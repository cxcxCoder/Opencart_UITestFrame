import pytest
import os
import conf.configloader as configloader

if __name__ == '__main__':
    ATD = configloader.ATD       #最终合并的临时目录
    ARD = configloader.ARD   #最终合并的永久目录


    pytest_args = [            
        #'-q',           #安静模式
        '--tb=long',   #堆栈输出

        '-s',
        '-v',
        f'--alluredir={ATD}',
        'tests/test_entry.py::test_UI',
        '--clean-alluredir'

    ]


    pytest.main(pytest_args)


    merge_cmd = f'allure generate {ATD} -o {ARD} --clean'
    os.system(merge_cmd)

    os.system(f'allure open {ARD}')

