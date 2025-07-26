import yaml
import os

class CaseLoader:
    def readYaml(self,file):
        """
        单个yaml加载测试数据
        """
        test_list = []
        try:
            with open(file, 'r',encoding='utf-8') as f:
                yaml_data = yaml.safe_load(f)

                for testcase in yaml_data:
                    test_list.append([testcase['meta'],testcase['steps'],testcase['validation']])

                
                return test_list
        except Exception as e:
            pass

    def load_cases(self,dir):
        """
        批量加载yaml测试数据，包括子目录
        """
        cases_list = []
        for root, _, files in os.walk(dir):
            for file in files:
                if file.endswith('.yaml') or file.endswith('.yml'):
                    cases_list.extend(self.readYaml(os.path.join(root, file)))


        return cases_list

