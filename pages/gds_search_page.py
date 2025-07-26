from pages.gds_base_page import GdsBasePage

class GdsSearchPageGoods(GdsBasePage):
    # 搜索后的商品页面，包含子搜索、排序设置等
    def __init__(self, page):
        super().__init__(page)

    def sub_search(self,data):
        sub_search_text = data.get('text')
        if_search_in_description = data.get('in_description')

        pass

    def set_goods_shown(self, data):
        sort_kind = data.get('sort_kind')
        sort_order = data.get('sort_order')

        show_num = data.get('show_num')

        pass




