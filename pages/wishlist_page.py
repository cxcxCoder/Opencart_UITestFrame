from pages.ac_base_page import AcBasePage
from pages.gds_base_page import GdsBasePage

class WishlistPage(AcBasePage, GdsBasePage):
    def __init__(self, page):
        super().__init__(page)

    def goods_manage(self, data):
        pass