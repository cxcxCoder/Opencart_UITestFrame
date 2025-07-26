import allure
import inspect

from pages.base_page import BasePage
from utils.recordlogs import logs

from playwright.sync_api import TimeoutError

class AcBasePage(BasePage):
    def __init__(self, page):
        super().__init__(page)

    def right_navigate(self, data):
        nv_name = data['nv_name']

        account_nav_map =  {
            "Login": (1, "login"),
            "Register": (2, "register"),
            "Forgotten Password": (3, "forgotten"),
            "My Account": (4, "account"),
            "Address Book": (5, "address"),
            "Wish List": (6, "wishlist"),
            "Order History": (7, "order"),
            "Downloads": (8, "download"),
            "Subscriptions": (9, "subscription"),
            "Reward Points": (10, "reward"),
            "Returns": (11, "returns"),
            "Transactions": (12, "transaction"),
            "Newsletter": (13, "newsletter")
        }

        
        # 导航执行
        self.right_navigate(
            lambda: self.page.click(f'#column-right a:nth-of-type({account_nav_map[nv_name][0]})'),
            "【账户右侧导航】"
        )

        # URL 跳转断言（可以加等待确保页面稳定）
        self.assert_url(inspect.currentframe().f_code.co_name, f'route=account/{account_nav_map[nv_name][1]}')

        allure.attach(f"账户内容导航执行成功", name=f"✅✅✅商品导航成功-{nv_name}✅✅✅", attachment_type=allure.attachment_type.TEXT)
                


        