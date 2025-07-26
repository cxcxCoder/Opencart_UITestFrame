import allure
import pytest
from base.dispatchbase import DispatchBase
"""
测试执行入口,pytest通过命令执行后,pytest_generate_tests根据配置载入参数化yaml测试用例数据
func:
- test_single: 单个测试用例执行
- test_workflow: 流程测试用例执行
"""

def test_UI(case_data):
    """
    测试入口
    """
    #解包成feature_name,base_info, test_case供后续使用
    meta, steps, vlds = case_data
    
    #allure动态记录用例信息
    allure.dynamic.feature(meta['feature'])
    allure.dynamic.story(meta['story'])
    allure.dynamic.title(meta['case_name'])

    #执行测试用例
    DispatchBase().excute_test(steps, vlds)
