import sys  #作業系統套件，用於檔案、目錄資料使用
import requests #建立雲端WinSocket連線的套件
import json     #了解json內容的json物件的套件
import time     #系統時間套件
import datetime #時鐘物件
import math     #數學運算套件
import os       # #作業系統套件，用於檔案、目錄資料使用
import http.client  #winsock連線物件之討建
from pathlib import Path    #存取檔案路徑之套件

from requests.exceptions import HTTPError   #連線錯誤的套件

#     https://opendata.cwb.gov.tw/api/v1/rest/datastore/O-A0001-001?Authorization=CWB-8D336EBD-4CD8-4077-AD00-F5551E8DE2DA&format=JSON															CWB-8D336EBD-4CD8-4077-AD00-F5551E8DE2DA

url='https://opendata.cwb.gov.tw/api/v1/rest/datastore/O-A0001-001?Authorization=CWB-8D336EBD-4CD8-4077-AD00-F5551E8DE2DA&format=JSON'
# 從open data網站，拿到的http GET的 Restful API字串
try:    #保護連線失敗而當機的語法
    res = requests.get(url) #用http GET進行連線，url=連線網址
    res.raise_for_status()  #要求連線狀態
    #res ==>連線win socket物件
except HTTPError as http_err:   #連線錯誤
    print(f'HTTP error occurred: {http_err}')
    
except Exception as err:    #同意連線、但是拒絕您溝通
    print(f'Other error occurred: {err}')
    sys.exit(0)
else:
    print('Success!')

table=json.loads(res.content)   #res.content 連線物件的回應內容
    #json.load(json內容)        ==>把json內容載入，回傳給前面的table物件
print('return value = %s' %table['success'])    #回傳json內success的內容

for data in table['records']['location']:   #json內table['records']['location']的內容(因為是一個list)
    print('item name =%s' % data['lat'])    #緯度
    print('item name =%s' % data['lon'])    #經度
    print('item name =%s' % data['stationId'])  #站號
    print('item name =%s' % data['locationName'])   #站名
    print('item name =%s' % data['time']['obsTime'])    #資料觀測時間
    for data2 in data['weatherElement']:
        print('subitem name =%s' % data2['elementName'])
        print('subitem name =%s' % data2['elementValue'])
    for data3 in data['parameter']:
        print('subitem name =%s' % data3['parameterName'])
        print('subitem name =%s' % data3['parameterValue'])
#    print('item name =%s' % data['weatherElement'])