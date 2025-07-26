import allure

from pages.ac_base_page import AcBasePage
from utils.recordlogs import logs

class AcRegisterPage(AcBasePage):
    def __init__(self, page):
        super().__init__(page)

    def register(self, data):
        """
        用户注册，注册后会自动进行登录
        """
        logs.info('注册页面-进行注册')
        # 只需处理数据缺失的情况
        try:
            first_name = data['first_name']
            last_name = data['last_name']
            email = data['email']
            password = data['password']

        except KeyError as e:
            logs.error(f"【注册】数据缺少值 {e}")
            raise

        #playwright异常由外部统一处理
        self.page.locator('#input-firstname').fill(str(first_name))
        self.page.locator('#input-lastname').fill(str(last_name))
        self.page.locator('#input-email').fill(str(email))
        self.page.locator('#input-password').fill(str(password))

        if data.get('subscribe', False):
            self.page.locator('#input-newsletter').click()

        self.page.locator('#form-register >> input[name="agree"]').click()

        self.navigation_check(
            lambda: self.page.locator('#form-register >> button[type="submit"]').click(),
            name="【注册】"
        )

        self.assert_url('register','customer_token')

        allure.attach(f"用户注册成功，已自动登录，跳转至登陆后界面", name=f"✅✅✅用户注册成功✅✅✅", attachment_type=allure.attachment_type.TEXT)

        


        

