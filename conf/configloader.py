import os
import yaml
import logging
"""
配置加载模块,负责动静态加载数据配置等。
"""
DIR_BASE = os.path.dirname(os.path.dirname(__file__))

class ConfigLoader:
    """
    配置加载类,提供数据接在和一些特殊配置的加载
    """
    def __init__(self, config_file = r"conf\conf.yaml"):
        self.config_file = config_file


    def load_data(self,fst_node, snd_node = None, thd_node = None,file = None):
        """
        类似readyaml的数据读取,本质为数据加载为字典后进行访问,此处提供最多三级的节点访问。
        """
        if file is None:
            file = self.config_file
        try:
            with open(file, 'r', encoding='utf-8') as f:
                extract_data = yaml.safe_load(f)
                if snd_node is None and thd_node is None:
                    return extract_data[fst_node]
                elif snd_node is not None and thd_node is None:
                    return extract_data[fst_node][snd_node]
                else:
                    return extract_data[fst_node][snd_node][thd_node]
        except Exception as e:
            return None

    def get_log_level(self, level_name):
        """
        获取日志级别,由于不是字符类型,需要getattr进行转换
        """
        level_str = self.load_data("logs", level_name)
        return getattr(logging, level_str.upper(), logging.INFO)    

configloader = ConfigLoader()

# playwright配置
HEADLESS = configloader.load_data("playwright", "headless")
BROWSER_TYPE = configloader.load_data("playwright", "browserType")
BROWER_INFO = configloader.load_data("playwright", "browserInfo",BROWSER_TYPE)
TIMEOUT = configloader.load_data("playwright", "page_default_timeout")
NV_TIMEOUT = configloader.load_data("playwright", "page_nv_default_timeout")

# 测试数据目录
CASES_DIR = os.path.join(DIR_BASE, configloader.load_data("test_data"))

# allure配置
ATD = os.path.join(DIR_BASE, configloader.load_data("allure", "tmp_dir"))
ARD = os.path.join(DIR_BASE, configloader.load_data("allure", "report_dir"))


# 日志配置
LOG_FOLDER = os.path.join(DIR_BASE, configloader.load_data("logs", "folder"))
LOG_LEVEL = configloader.get_log_level("level")
LOG_STREAM_LEVEL = configloader.get_log_level("stream_level")
LOG_MAXBYTES = configloader.load_data("logs", "file_max_bytes")
LOG_BACKUPCOUNT = configloader.load_data("logs", "file_backup_count")
RENTENTION_DAYS = configloader.load_data("logs", "rentention_days")
