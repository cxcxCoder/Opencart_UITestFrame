# 数据驱动UI自动化测试框架
## 框架简介
本框架基于pytest+yaml+playwright+allure实现的数据驱动UI测试框架

## 核心功能
1.yaml数据驱动：通过yaml进行测试数据导出、分析，动态处理测试
2.前后置条件处理：基于钩子函数进行测试前后置条件处理，一般来说前置条件通过接口设置好数据状态或者要求跳转到某个页面；后置条件则是状态回退或者登出等避免影响下一个
用例执行。
3.PO设计：基于playwright的页面对象设计，封装操作和断言，部分操作自带断言处理避免影响后续操作
4.异常与日志管理：PO内部识别到的字段、跳转等异常都通过断言异常抛出，外部调度器主要处理Playwright异常和一些位置异常，而日志的记录要更加详细
5.allure报告，分级分步详细记录测试信息，同时支持截图附带
6.断言处理：对于用例执行后的验证性断言，涉及多个页面可以通过类似steps的操作在vld一步步执行，单个页面操作可以直接基于PO封装好的来单字段执行。



## 环境准备
## 项目结构
整体结构：
- base  
  - dispatchbase.py  调度器基类,扶着整体逻辑的拼接和PO行为的调度
  - playwrightobj.py  playwright封装类，主要用于获取page
  - precon.yaml 前置条件接口数据，未实现
  - preconditions.py  前置条件执行类，用于分发处理前置条件，部分实现
  - teardown.yaml  后置条件接口数据，未实现
  - teardown.py 后置条件执行类，用于分发处理后置条件，部分实现
- conf
  - conf.yaml 配置文件，配置文件夹、运行参数等信息
  - configloader.py 配置加载类，用于加载配置文件数据
- data  测试数据存储文件夹
- logs  日志内容存储文件夹
- opencart_docker  基于docker的opencart环境
- pages  页面对象文件夹，封装页面元素
  - base_page.py  根基类，所有页面对象都继承此类，封装所有页面都有的action和一些功能
  - ac_base_page.py 账号基类
  - ac_.... 账号相关页面，包括个人信息、注册、登录等
  - gds_base_page.py  商品页面基类
  - gds_.... 商品相关页面，包括商品列表、详情、购物车等
- reports  运行报告存储文件夹
- screenshots  截图存储文件夹
- tests/test_entry.py  入口测试文件，调用测试用例
- utils
  - caseloader.py 用例加载类，配合钩子从指定文件夹加载用例数据
  - recordlogs.py 日志记录类，用于记录日志
- conftest.py 全局测试配置，主要配置各种钩子的执行
- pytest.ini pytest配置文件
- run.py  运行入口文件，调用pytest


## 具体使用
**整体用例运行设计**
本框架通过yaml规范数据实现数据驱动，由pytest钩子负责数据载入、前置处理、用例执行、后置处理等流程，框架开始先初始化好page，用例通过指明PO对象、函数、数据来实现
PO行为的调用，PO的action中，对于跳转等强前后联系的行为会在action中就进行断言验证，同时整个用例执行完成也有独立的行为验证的断言。

**配置文件**
运行配置文件置于conf/conf.yaml，主要配置好文件夹、运行参数等信息，可以依照目前格式修改即可，需要新增需要对应加载器和具体使用时导入

**用例设计**
设计测试用例时，遵循下面模板，根据实际情况进行调整，设计完成的用例推荐放在data文件夹进行存储，通过run.py即可

用例模板：
-------------------------------------------------
```
- meta:
    feature: 用户模块                      #用于allure的feature标签
    story: 用户注册                        #用于allure的story标签
    case_name: 用户首页正常注册后登录       #用例名称
    preconditions:                        #前置条件
      - url_home
    teardown:                             #后置条件
      - logout

  #测试步骤
  steps:
    - step_name: 点击账号-注册
      page_name: home                     #PO页面表示，用于在调度器转化为page对象，需要注意命名转化逻辑
      action: top_navigate                #PO行为，也就是PO对象的某个函数方法
      data:                               #函数可能需要的数据
        nv_name: Register

    - step_name: 注册账号
      page_name: ac_register
      action: register
      data: 
        first_name: ccc
        last_name: xxx
        email: 12345@gg.com
        password: 123456789
  
  #验证步骤，本质上与测试步骤一致，主要是隔离开的独立验证，整体格式与steps基本一致，只是vld_name
  validation:
    - vld_name: 验证登录成功
      page_name: now
      action: val_url
      data:
        expected: customer_token

- meta：
  ......
```
-------------------------------------------------

**PO设计**
PO设计采用继承设计，所有页面对象都继承base_page.py，然后根据实际情况进行扩展。
模块、类名、用例page_name与action有如下规范：
- 模块名:xxxx_page，其中用例的page_name与xxxx对应，用于匹配模块
- 类名：AaBbbCccPage对应模块名为aa_bbb_ccc_page，可以通过abc来实现模块层级划分，模块转化会根据下划线_来划分块进行大小写转换
- PO函数：action需要直接与用例的action直接对应