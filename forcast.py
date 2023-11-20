import requests
from datetime import datetime
import xmltodict

def get_current_date_string():
    current_date = datetime.now().date()
    return current_date.strftime("%Y%m%d")

def get_current_hour_string():
    now = datetime.now()
    if now.minute<45: # base_time와 base_date 구하는 함수
        if now.hour==0:
            base_time = "2330"
        else:
            pre_hour = now.hour-1
            if pre_hour<10:
                base_time = "0" + str(pre_hour) + "30"
            else:
                base_time = str(pre_hour) + "30"
    else:
        if now.hour < 10:
            base_time = "0" + str(now.hour) + "30"
        else:
            base_time = str(now.hour) + "30"

    return base_time

keys = 'IAcOIG1cqlGxiJw358QN2mBaw+a3j6WUVi0G1gFtZP3hUBm7Yql5Osz92q8/C6WQlYOpnUD9CdOwCvJtXYvAvQ=='
url = 'http://apis.data.go.kr/1360000/VilageFcstInfoService_2.0/getVilageFcst'

params ={'serviceKey' : keys, 
         'numOfRows' : '1000', 
         'pageNo' : '1', 
         'dataType' : 'XML', 
         'base_date' : get_current_date_string(), 
         'base_time' : get_current_hour_string(), 
         'nx' : '60', 
         'ny' : '127' }

# 값 요청 (웹 브라우저 서버에서 요청 - url주소와 파라미터)
res = requests.get(url, params = params)

#XML -> 딕셔너리
xml_data = res.text
dict_data = xmltodict.parse(xml_data)

#값 가져오기
weather_data = dict()
for item in dict_data['response']['body']['items']['item']:
    # 기온
    if item['category'] == 'TMP':
        weather_data['tmp'] = item['fcstValue']
    # 습도
    if item['category'] == 'REH':
        weather_data['hum'] = item['fcstValue']
    # 1시간 강수량
    if item['category'] == 'PCP':
        weather_data['pcp'] = item['fcstValue']
    # 강수확률
    if item['category'] == 'POP':
        weather_data['pop'] = item['fcstValue']

str_tmp = "온도 : " + weather_data['tmp']
str_hum = "습도 : " + weather_data['hum']
str_pcp = "1시간 강우량 : " + weather_data['pcp']
str_pop = "강수확률 : " + weather_data['pop']

print(get_current_hour_string())
print(str_tmp)
print(str_hum)
print(str_pcp)
print(str_pop)
