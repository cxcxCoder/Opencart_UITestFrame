import allure
import importlib
import traceback

from playwright.sync_api import TimeoutError, Error
from base.playwrightobj import plw
from utils.recordlogs import logs

# 调度器模块，负责整体的用例执行和断言逻辑，包括
# 1.主逻辑组合用例各个步骤的执行和业务后置断言
# 2.yaml数据解析，主要是PO类提取与实例化操作
# 3.异常处理，主要处理playwright异常和未知异常，内部断言异常不处理

def snake_to_camel(snake_str):
    """
    下划线转驼峰，用于匹配模块和类名
    ac_login → AcLogin
    gds_detail → GdsDetail
    """
    return ''.join(word.capitalize() for word in snake_str.split('_'))



class DispatchBase:
    # 调度器类
    # __init__:初始化调度器，主要是获取playwright对象和由其获取page对象
    # get_select:根据page_key获取PO类实例，返回
    # excute_test:执行测试用例，分步执行action step，以及整体业务断言
    # step_excute:执行页面action,单action来收集playwright异常，action内部处理内容主动构造断言异常，同时断言也通过该函数对PO函数调用
    # dispatch_assert:调度解析断言，分步执行vld step，以及整体业务断言


    def __init__(self):
        self.plw = plw
        self.plw_page = self.plw.get_page()
        self.po_name = ""   #初始化，主要用于PO缓存，避免重复实例化


    def get_select(self, page_key):
        """
        匹配转化类名，并进行实例化返回，用于页面操作
        """
        module_name = f"pages.{page_key}_page"  # ac_login → pages.ac_login_page
        class_name = f"{snake_to_camel(page_key)}Page"  # ac_login → AcLoginPage

        try:
            module = importlib.import_module(module_name)
            cls = getattr(module, class_name)
            return cls(self.plw_page)
        except (ModuleNotFoundError, AttributeError) as e:
            logs.error(f"PO页面对象无法加载【{class_name}】来自模块【{module_name}】")
            raise ImportError(f"PO页面对象无法加载【{class_name}】来自模块【{module_name}】") from e
    

    def excute_test(self,steps,vlds):
        """
        主执行逻辑，分步执行action step，以及整体业务断言
        """
        for step in steps:            
            self.step_excute(step)

        #action内部有内部断言，同时下面结合业务独立断言
        self.dispatch_assert(vlds)
        

    def step_excute(self,step,valid = False):
        """
        执行单个页面步骤,单action来收集playwright异常，action内部处理内容主动构造断言异常
        """
        try:
            # 必须字段
            step_name = step['step_name'] if not valid else "【断言】" + step['vld_name']
            page_name = step["page_name"]
            func = step["action"]
            
            # 可以没有data
            data = step.get("data", None)

            with allure.step(step_name):
                logs.info(f"PO步骤执行：【{page_name}】{step_name}")

                # 缓存避免重复实例化PO对象,相同页面名以及now表示不需要替换
                if self.po_name!= page_name and page_name != "now":
                    self.po_name = page_name
                    self.po = self.get_select(page_name)

                clsfunc = getattr(self.po, func)

                if "data" in step:
                    # 不解包 data，内部处理
                    clsfunc(data)
                else:
                    clsfunc()


        except TimeoutError as e:
            logs.error(f"Playwright操作超时: {e}\n{traceback.format_exc()}")
            self.po.get_screenshot("【playwright_orgin】", "timeout")
            raise  # 可以保留，让 Pytest 报失败

        except Error as e:
            logs.error(f"Playwright 其他异常: {e}\n{traceback.format_exc()}")
            self.po.get_screenshot("【playwright_orgin】", "playwright_error")
            raise

        except AssertionError as e:
            # 业务错误已在底层记录、截图了，**此处不再重复记录**
            raise

        except Exception as e:
            logs.error(f"其它异常: {e}")
            self.po.get_screenshot("【playwright_orgin】", "other_error")
            raise
        

    def dispatch_assert(self,vlds):
        """
        调度解析断言,依靠step_excute调用PO执行函数
        """
        for vld in vlds:
            self.step_excute(vld,True)
