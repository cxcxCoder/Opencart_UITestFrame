import allure

from pages.ac_base_page import AcBasePage
from utils.recordlogs import logs

class AcLoginPage(AcBasePage):
    def __init__(self, page):
        super().__init__(page)

    def login(self, data):
        """
        用户登录
        """
        logs.info('登录页面-进行登录')
        try:
            email = data['email']
            password = data['password']
        except KeyError as e:
            logs.error(f"【登录】数据缺少值 {e}")
            raise

        self.page.locator('#input-email').fill(str(email))
        self.page.locator('#input-password').fill(str(password))

        self.navigation_check(
            lambda:self.page.locator('#content button[type="submit"]').click(),
            name = '【登录】'
        )

        self.assert_url('login','customer_token')

        allure.attach(f"用户登录成功，跳转至登陆后界面", name=f"✅✅✅用户登录成功✅✅✅", attachment_type=allure.attachment_type.TEXT)

