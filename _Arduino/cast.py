import requests
from datetime import datetime
import MySQLdb
import xmltodict

db = MySQLdb.connect("118.44.43.210","admin","2794","db")
curs = db.cursor()

def get_current_date_string():
    current_date = datetime.now().date()
    return current_date.strftime("%Y%m%d")

def get_current_hour_string():
    now = datetime.now()
    if now.minute<45: 
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


while True:
    params ={'serviceKey' : keys, 
             'numOfRows' : '1000', 
             'pageNo' : '1', 
             'dataType' : 'XML', 
             'base_date' : get_current_date_string(), 
             'base_time' : get_current_hour_string(), 
             'nx' : '73', 
             'ny' : '134' }


    res = requests.get(url, params = params)

    xml_data = res.text
    dict_data = xmltodict.parse(xml_data)


    weather_data = dict()
    for item in dict_data['response']['body']['items']['item']:
        
        if item['category'] == 'TMP':
            weather_data['tmp'] = item['fcstValue']
        
        if item['category'] == 'REH':
            weather_data['hum'] = item['fcstValue']
        
        if item['category'] == 'PCP':
            weather_data['pcp'] = item['fcstValue']
        
        if item['category'] == 'POP':
            weather_data['pop'] = item['fcstValue']

    dust =port.readline()
    temp = weather_data['tmp']
    hum = weather_data['hum']
    pcp = weather_data['pcp']
    pop = weather_data['pop']

    query = """INSERT INTO db_table(db_temp,db_humid,db_prob,db_prec) VALUES(%s,%s,%s,%s)"""
    data = [(tmp,hum,pcp,pop)]
    curs.executemany(query, data)
    db.commit()





db.close()
