from pages.base_page import BasePage
from utils.recordlogs import logs


class GdsBasePage(BasePage):
    def __init__(self, page):
        super().__init__(page)

    def top_categories_navigate(self, data):
        """
        商品页面上层导航，主要包括Home和Up
        """
        nv_action = data.get("nav_action")
        nv_choices = ["Home","Up"]
        if nv_action in nv_choices:
            if nv_action == "Home":
                lct = '#product-category >> li:nth-child(1) > a'
            else:
                e_count = self.count_elements('#product-category >> li')
                lct = f'#product-category >> li:nth-child({e_count-1}) > a'

            
            self.navigation_check(
                lambda: self.page.locator(lct).click(),
                "【商品页面上层导航】"
            )


        else:
            logs.error(f"【商品页面上层导航】不存在对应操作【{nv_action}】")
            raise Exception(f"【商品页面上层导航】不存在对应操作【{nv_action}】")


    def good_manage(self, data):
        try:
            goods_name = data['goods_name']
            goods_action = data['goods_action']
        except KeyError:
            logs.error("【商品管理】参数不完整")
            raise Exception("【商品管理】参数不完整")
        
        goods_locator = self.page.locator(f'div.col.mb-3:has(div.description a:has-text("{goods_name}"))')

        goodscard = GoodsCard(self.page, goods_locator)

        if goods_action == "add_to_cart":
            goodscard.add_to_cart()
        elif goods_action == "add_to_wishlist":
            goodscard.add_to_wishlist()
        elif goods_action == "add_to_compare":
            goodscard.add_to_compare()
        else:
            logs.error(f"商品管理-不存在对应操作【{goods_action}】")
            raise KeyError(f"商品管理-不存在对应操作【{goods_action}】")



class GoodsCard:
    # 商城商品卡片类
    def __init__(self, page, locator):
        self.page = page
        self.goods_locator = locator

    def add_to_cart(self):
        self.goods_locator.locator("div.button-group button:nth-of-type(1)").click()

    def add_to_wishlist(self):
        self.goods_locator.locator("div.button-group button:nth-of-type(2)").click()

    def add_to_compare(self):
        self.goods_locator.locator("div.button-group button:nth-of-type(3)").click()
