import pytest
import time
import conf.configloader as configLoader

from base.playwrightobj import plw
from utils.caseloader import CaseLoader
from base.preconditions import Preconditions
from base.teardown import Teardown
from utils.recordlogs import logs

def pytest_sessionstart(session):
    """
    pytest_sessionstart会话级钩子函数，在 测试运行正式开始之前调用，用于执行一些全局初始化工作
    """
    logs.info("*****************************TEST START*****************************")
    session.start_time = time.time()



def pytest_generate_tests(metafunc):
    """
    参数化钩子函数，在收集测试用例阶段调用，动态生成测试用例
    """
    data_dir = configLoader.CASES_DIR

    if "case_data" in metafunc.fixturenames:
        cases = CaseLoader().load_cases(data_dir)
        metafunc.parametrize("case_data", cases)




def pytest_runtest_setup(item):
    """
    测试用例级别的前置钩子，在每个测试函数执行前 调用，用于前置条件执行
    """
    if hasattr(item, "callspec"):   #callspec标识参数规格pytest.CallerSpec对象，只有参数化才会有
        case_data = item.callspec.params.get("case_data", [])


        if case_data:

            meta , _ , _ = case_data
            preconds = meta.get("preconditions", [])
            if preconds:
                logs.info('//////////////////开始执行前置条件//////////////////')
                for precond in preconds:
                    Preconditions().prec_entry(precond)

                    #input("wait")


def pytest_runtest_teardown(item, nextitem):
    """
    测试用例级别的收尾钩子，在每个测试函数执行后调用
    """
    if hasattr(item, "callspec"):
        case_data = item.callspec.params.get("case_data", [])
        if case_data:
            meta, _, _ = case_data
            teardown_steps = meta.get("teardown", [])
            if teardown_steps:
                logs.info("//////////////////开始执行后置条件//////////////////")
                for teardown in teardown_steps:
                    Preconditions().prec_entry(teardown)


def pytest_sessionfinish(session, exitstatus):
    """
    会话级钩子函数，在所有测试执行完成后调用，用于收尾操作
    """
    logs.info("*****************************TEST END*****************************")
    plw.close()


#钩子：测试结果总结处理
def pytest_terminal_summary(terminalreporter, exitstatus, config):
    """
    会话结束后终端汇总钩子，定义命令行测试结果的输出格式，追加统计、失败列表、URL链接等
    """
    #生成测试结果摘要字符串
    total = terminalreporter._numcollected
    passed = len(terminalreporter.stats.get('passed', []))
    failed = len(terminalreporter.stats.get('failed', []))
    error = len(terminalreporter.stats.get('error', []))
    skipped = len(terminalreporter.stats.get('skipped', []))
    duration = time.time() - getattr(terminalreporter._session, "start_time", None)

    summary = f"""
    自动化测试结果，通知如下，请着重关注测试失败的接口，具体执行结果如下：
    测试用例总数：{total}
    测试通过数：{passed}
    测试失败数：{failed}
    错误数量：{error}
    跳过执行数量：{skipped}
    执行总时长：{duration}
    """
    print(summary)
    logs.info(summary)

