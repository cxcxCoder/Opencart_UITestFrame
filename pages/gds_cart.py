from pages.gds_base_page import GdsBasePage
from utils.recordlogs import logs

class GdsCartPage(GdsBasePage):
    def __init__(self, page):
        super().__init__(page)

    def good_manage(self, data):
        try:
            goods_name = data['goods_name']
            goods_action = data['goods_action']

            if goods_action == 'update':
                quantity = data['quantity']

        except KeyError:
            logs.error("【商品管理】参数不完整")
            raise Exception("【商品管理】参数不完整")
        

        goods_locator = self.page.locator(f'#shopping-cart  tbody tr:has(td.text-wrap a:has-text("{goods_name}"))')

        if goods_action == "remove":
            goods_locator.locator('button.btn-danger').click()
        elif goods_action == "update":
            goods_locator.locator('input[name="quantity"]').fill(quantity)
            goods_locator.locator('button.btn-primary').click()

        else:
            logs.error(f"【购物车管理】不支持的操作 {goods_action}")
            raise Exception(f"【购物车管理】不支持的操作 {goods_action}")