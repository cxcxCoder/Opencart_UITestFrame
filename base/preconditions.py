from base.playwrightobj import plw

# 前置条件处理类，主要负责分发处理前置条件
# 一般来说主要负责页面的跳转和一些初始条件的设置，后者实际中主要直接通过接口实现，目前未实现

class Preconditions:
    def __init__(self):
        self.page = plw.get_page()

    def prec_entry(self,prec_name):
        """
        前置条件通过接口实现，更快且更稳定，目前未实现
        配合precon.yaml，存储接口内容
        """
        if prec_name == "url_home":
            self.page.goto("http://localhost:8080/")

        pass