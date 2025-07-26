from base.playwrightobj import plw
# 后置条件处理，主要是数据恢复、登出等操作，一般来说也是通过接口直接进行强覆盖
class Teardown:
    def __init__(self):
        self.page = plw.get_page()

    def td_entry(self,td_name):
        if td_name == "logout":
            from pages.base_page import BasePage
            BasePage(self.page).top_navigate({'nv_name': 'Logout'})

        pass