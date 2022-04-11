import json
import pymysql
import time
import comlib
DB_host = "localhost"
DB_port = 3306
DB_user = "fcu"
DB_password = "123456789"
DatabaseName = "ParkingData"
TableName = "parkingdata"

JsonfileUrl ="Parking_Info.json"

DB_conn = pymysql.connect(host=DB_host, port=DB_port, user=DB_user, password=DB_password, database=DatabaseName)


cursor = DB_conn.cursor()

def datatime(): #抓取目前系統時間
    localtime = time.localtime()
    result = time.strftime("%Y-%m-%d %I:%M:%S %p", localtime)
    #print(result)
    return result

sql = "insert into " + TableName + " (parkId, parkName, totalSpace, surplusSpace, payGuide,introduction, address, wgsX, wgsY, areaId, areaName, datatime) VALUES  ('%s', '%s', %s, %s, '%s', '%s', '%s', '%s', '%s', '%s', '%s','%s')"

f = open(JsonfileUrl, encoding='utf8')

table = json.load(f)

#print('return value = %s' %table['parkingLots'])    #回傳json內success的內容
print("-------------------------")

for xp in table['parkingLots']:
    #print(xp)
    #print("-------------------------")
    s01 = xp['parkId']
    s02 = xp['parkName']
    s03 = xp['totalSpace']
    s04 = xp['surplusSpace']
    s05 = xp['payGuide']
    s06 = xp['introduction']
    s07 = xp['address']
    s08 = xp['wgsX']
    s09 = xp['wgsY']
    s10 = xp['areaId']
    s11 = xp['areaName']
    #print(s01,s02,s03,s04,s05,s06,s07,s08,s09,s10,s11)
    sqlstr = sql % (s01,s02,s03,s04,s05,s06,s07,s08,s09,s10,s11,comlib.getdataorder("%Y-%m-%d %I:%M:%S %p"))
    print(sqlstr)
    
    try:    #保護連線失敗而當機的語法
        cursor.execute(sqlstr) #execute SQL Statement
        DB_conn.commit()
    except Exception as err:    #同意連線、但是拒絕您溝通
        print(f'Other error occurred: {err}')
        exit(0)
    else:
        print('Success!')
    
f.close()