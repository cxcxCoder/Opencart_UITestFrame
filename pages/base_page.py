import allure
import os
import time

from utils.recordlogs import logs
from playwright.sync_api import TimeoutError

# PO页面基类，封装PO对象的共用页面操作方法，如：
# 1. 页面共用操作，例如顶部导航、商品查询等，主要是配合页面
# 2. 页面工具，例如元素加载、截图等
# 3. 页面断言，例如页面导航等待跳转、URL断言等


class BasePage:
    def __init__(self, page):
        self.page = page

    def top_navigate(self, data):
        """"
        页面顶部导航
        """
        nv_name = data.get('nv_name')

        # account下的相关操作需要先点击Account按钮
        Account_choice = ['Register','Login','My Account','Order History','Transactions','Downloads','Logout']
        if nv_name in Account_choice:
            self.page.locator("span", has_text="My Account").click()
        
        nv_dict = {
            #
            "Home": '#logo > a',
            "Wish List": '#wishlist-total',
            "Shopping Cart": 'a[title="Shopping Cart"]',
            "Checkout": 'a[title="Checkout"]',

            #登录前
            "Register": '#top >> a.dropdown-item:has-text("Register")', # 通过playwright的伪类拓展css选择器来定位，可以结合文本定位
            "Login": '#top >> a.dropdown-item:has-text("Login")',

            #登录后
            'My Account': '#top >> a.dropdown-item:has-text("My Account")',
            'Order History': '#top >> a.dropdown-item:has-text("Order History")',
            'Transactions': '#top >> a.dropdown-item:has-text("Transactions")',
            'Downloads': '#top >> a.dropdown-item:has-text("Downloads")',
            'Logout': '#top >> a.dropdown-item:has-text("Logout")'
        }

        if lct := nv_dict.get(nv_name,None):
            # 调用导航方法等待导航完成
            self.navigation_check(
                lambda: self.page.locator(lct).click(),
                name="【顶部导航】"
            )

            self.assert_url("top_navigate", f"/{nv_name.lower()}")

            allure.attach(f"{nv_name} 导航执行成功", name=f"✅✅✅顶部导航成功-{nv_name}✅✅✅", attachment_type=allure.attachment_type.TEXT)
        
        else:
            logs.error(f"顶部导航类型错误：不存在导航类型-{nv_name}")
            raise KeyError("顶部导航类型不存在")
        
        

    def goods_navigate(self, data):
        """
        商品类别导航
        """
        goods_type = data.get('goods_type')
        type_choice = data.get('type_choice', None)

        lct1 = f'#narbar-menu >> a.nav-link.dropdown-toggle:has-text("{goods_type}")'

        # click choice表示需要点击二级菜单，direct choice表示直接跳转
        click_choice = ['Desktops','Laptops & Notebooks','Components','MP3 Players']
        direct_choice = ['Tablets','Software','Phones & PDAs','Cameras']

        # 需要二级菜单跳转
        if goods_type in click_choice:
            # 模拟一级菜单的点击或悬浮
            self.page.locator(lct1).click()

            # 再进行二级菜单的点击
            lct2 = f'#narbar-menu >> a.nav-link:has-text("{type_choice}")'

            self.navigation_check(
                lambda: self.page.locator(lct2).click(),
                name="【商品导航】"
            )

            self.assert_url("goods_navigate", f"/{goods_type.lower()}/{type_choice.lower()}")

        # 直接跳转
        elif goods_type in direct_choice:
            self.navigation_check(
                lambda: self.page.locator(lct1).click(),
                name="【商品导航】"
            )

            self.assert_url("goods_navigate", f"/{goods_type.lower()}")

        else:
            logs.error(f"商品导航类型错误：不存在商品类型-{goods_type}")
            raise KeyError("商品导航类型不存在")
        
        allure.attach(f"商品类别导航执行成功", name=f"✅✅✅商品导航成功-{goods_type}✅✅✅", attachment_type=allure.attachment_type.TEXT)

        

    def search(self, data):
        """
        商品搜索功能
        """
        search_text = data.get('text')

        base = '#search'
        self.page.locator(base+' > input').fill(search_text)    #或者使用type模拟键入

        # 导航和url断言内部自带异常处理，无需重复处理
        self.navigation_check(
            lambda: self.page.locator(base+' > button').click(),
            name="【搜索】"
        )

        self.assert_url("search", f"/search={search_text}")

        allure.attach(f"搜索关键字：{search_text}", name=f"✅✅✅搜索成功-{search_text}✅✅✅", attachment_type=allure.attachment_type.TEXT)


    def view_cart(self,data = None):
        """
        缩略购物车查看
        """
        self.page.locator('#header-cart > div > button').click()

        if data:
            more_action = data.get('more_action')
            action_data = data.get('action_data', None)
            logs.info(f"【缩略购物车】执行操作：【{more_action}】--【{action_data}】")


            if more_action == 'View Cart':  #跳转购物车详情
                self.navigation_check(
                    lambda: self.page.locator('#header-cart >> p.text-end >> a:nth-child(1)').click(),
                    name="【缩略购物车】"
                )
                self.assert_url("view_cart", "/cart")
                allure.attach(f"购物车详情跳转成功", name=f"✅✅✅购物车详情跳转✅✅✅", attachment_type=allure.attachment_type.TEXT)
                
            elif more_action == 'Checkout': #跳转结算页
                self.navigation_check(
                    lambda: self.page.locator('#header-cart >> p.text-end >> a:nth-child(2)').click(),
                    name="【缩略购物车】"
                )
                self.assert_url("view_cart", "/checkout")
                allure.attach(f"结算跳转成功", name=f"✅✅✅结算跳转✅✅✅", attachment_type=allure.attachment_type.TEXT)
                
            elif more_action == 'Remove' and action_data: #删除商品
                product_name = action_data['ProductName']
                
                # 通过has进行内部匹配得到符合商品名的元素行,再进入内部删除
                table_row = self.page.locator(f'#header-cart >> tr:has(td.text-start > a:has-text("{product_name}"))')
                table_row.locator('button.btn-danger').click()
            else:
                logs.error(f"购物车操作失败，不存在操作类型-{more_action}")
                raise KeyError("操作类型不存在")


    def currency_change(self, data):
        """
        货币切换
        """
        currency_code = data.get('currency_code')

        # 先点击Currency按钮
        self.page.locator('#top >> span:has-text("Currency")').click()
        cur_dict = {
            'Euro': 1,
            'Pound Sterling': 2,
            'US Dollar': 3
        }

        cur_num = cur_dict.get(currency_code, None)
        if cur_num:
            self.page.locator(f'#form-currency > div > ul > li:nth-child({cur_num})').click()
        else:
            logs.error(f"货币切换失败，不存在货币类型-{currency_code}")
            raise KeyError("货币类型不存在")
        
    # 工具/////////////////////////////////////////////////////////////////////////////////////////////////////////
    # ////////////////////////////////////////////////////////////////////////////////////////////////////////////

    def get_screenshot(self,func_name,info,allure_name):
        """
        截图并附加到 Allure 报告中，构造时间+函数名+信息的png格式文件名，存放在 screenshots 文件夹下。
        同时allure进行图片附带的记录
        """
        timestamp = time.strftime("%H_%M_%S")
        filename = f"{timestamp}_{func_name}"
        
        # 附加信息
        if info:
            filename += f"_{info}"
        filename += ".png"

        folder = "screenshots"
        os.makedirs(folder, exist_ok=True)

        filepath = os.path.join(folder, filename)
        self.page.screenshot(path=filepath, full_page=True) #page截图函数

        allure.attach.file(filepath, allure_name, attachment_type=allure.attachment_type.PNG)
        return filepath
    
    def count_elements(self,locator_str,timeout = 5000,interval = 500):
        """
        等待 locator 指定的元素个数在短时间内稳定，避免页面渲染未完成就统计。
        """
        end_time = time.time() + timeout / 1000
        previous_count = -1

        while time.time() < end_time:
            current_count = self.page.locator(locator_str).count()
            if current_count == previous_count:
                return current_count
            previous_count = current_count
            time.sleep(interval / 1000)

        raise TimeoutError(f"元素数量未在 {timeout}ms 内稳定：最后统计为 {current_count}")

    
    # 断言/////////////////////////////////////////////////////////////////////////////////////////////////////////
    # ////////////////////////////////////////////////////////////////////////////////////////////////////////////
    

    def navigation_check(self, lambda_func, name="nav_action"):
        """
        导航跳转封装
        """
        try:
            # 表示预期出现页面导航跳转
            with self.page.expect_navigation():
                lambda_func()

        except TimeoutError:
            logs.error(f"❌ {name} 执行页面跳转**超时**")
            allure.attach(f"{name} 执行页面跳转**超时**", name="❌ 执行页面跳转**超时**", attachment_type=allure.attachment_type.TEXT)

            self.get_screenshot(name, "navigation_timeout", "❌ 执行页面跳转**超时**【截图】")
            raise AssertionError(f"{name} 执行页面跳转失败")
        
        logs.error(f"✅ {name} 执行页面跳转**成功**")
        allure.attach(f"{name} 执行页面跳转**成功**", name="✅ 执行页面跳转**成功**", attachment_type=allure.attachment_type.TEXT)

    def assert_url(self, from_func, expected_route):
        """
        断言当前页面 URL 是否与与预期一致
        """
        ast_info = f'期望：【{expected_route}】--实际： 【{self.page.url}】'
        if expected_route in self.page.url:
            # 只做日志记录，外部记录allure，避免一个步骤多条allure信息
            logs.info("✅URL 跳转**成功**"+ast_info)
            allure.attach(ast_info, name="✅URL 跳转**成功**", attachment_type=allure.attachment_type.TEXT)
        else:
            logs.error("❌ URL跳转**失败**"+ast_info)
            allure.attach(ast_info, name="❌ URL跳转**失败**", attachment_type=allure.attachment_type.TEXT)

            self.get_screenshot(from_func,"url_mismatch","❌ URL跳转**失败**【截图】")
            raise AssertionError("URL跳转失败，与预期不符")
        
    def val_url(self,data):
        """
        断言层的URL断言，本质还是调用assert url
        """
        expected = data.get('expected')
        from_func = "val"
        self.assert_url(from_func, expected)

        


    
