import json
import conf.configloader as configLoader

from playwright.sync_api import sync_playwright
from utils.recordlogs import logs

# Playwright对象初始化，主要负责：
# 1.配置读取和playwright原生对象初始化
# 2.页面初始化，通过持久化连接现成浏览器，并设置一些必要的配置
# 3.获取page对象，提供额外页面级别配置
# 4.实例化一个全局plw对象，表示共用一个页面/浏览器

class PlaywrightObject:
    # playwright封装类
    # __init__:初始化方法，主要负责配置读取和playwright原生对象初始化
    # init_page:页面初始化，通过持久化连接现成浏览器，并设置一些必要的配置
    # get_page:获取page对象，提供额外页面级别配置
    # reset_page:页面重启，用于解决一些页面加载失败的问题
    # close:收尾工作，关闭浏览器

    def __init__(self):
        self.playwright = sync_playwright().start()
        self.browerinfo = configLoader.BROWER_INFO
        self.headless = configLoader.HEADLESS

        self.init_page()


    def init_page(self):
        """
        通过持久化连接实现浏览器初始化，并设置一些必要的配置，能够更加贴合实际使用场景
        """
        xct_path = self.browerinfo.get("xct_path")
        user_data_dir = self.browerinfo.get("user_data_dir")

        logs.info(f"Playwright初始化页面****执行文件:【{xct_path}】, 用户目录:【{user_data_dir}】")

        # 持久化连接，直接得到context
        context = self.playwright.chromium.launch_persistent_context(
            headless = self.headless, 
            executable_path = xct_path,
            user_data_dir = user_data_dir,
            ignore_default_args=["--enable-automation"],

            args=[
                "--disable-password-manager-reauthentication",
                "--disable-save-password-bubble",
                "--disable-features=PasswordManager",
                "--disable-password-generation",
                "--disable-autofill-keyboard-accessory-view",
                "--disable-popup-blocking",
                "--disable-notifications",
                "--disable-translate",
                "--disable-infobars",
                "--no-default-browser-check",
                "--disable-autofill-keyboard-accessory-view",
                "--disable-save-password-bubble",
                "--disable-features=PasswordManager",  # 彻底关闭密码管理器
                "--start-maximized"
            ],
            locale="en-US",
            extra_http_headers={"Accept-Language": "en-US"}
        )


        self.page = context.new_page()

    def get_page(self):
        """
        获取page对象，同时能够根据需求进行一些额外反反爬虫或一些其它的page级别配置
        """
        # ....额外操作
        self.page.set_default_timeout(configLoader.TIMEOUT)
        self.page.set_default_navigation_timeout(configLoader.NV_TIMEOUT)
        
        return self.page
    
    def reset_page(self):
        """
        页面重启，用于解决一些页面加载失败的问题
        """
        self.page.close()
        self.init_page()


    def close(self):
        """
        收尾工作，关闭浏览器
        """
        self.page.context.close()
        self.playwright.stop()
        
# 维护一个全局的PlaywrightObject对象即可
plw = PlaywrightObject()
