import json     #了解json內容的json物件的套件
import pymysql

# Open database connection
db = pymysql.connect(host="localhost",user="fcu",password="12345678",database="fcu" )
#連接資料庫
# prepare a cursor object using cursor() method
cursor = db.cursor()


sql = "insert into fcu.parkingdata (parkId, parkName, totalSpace, surplusSpace, payGuide,introduction, address, wgsX, wgsY, areaId, areaName, datatime) VALUES  ('%s', '%s', %s, %s, '%s', '%s', '%s', '%s', '%s', '%s', '%s','20220401191300')"
# Opening JSON file
f = open('D://xampp//htdocs//fcu//parking//Parking_Info.json',encoding='utf8')
 
# returns JSON object as
# a dictionary
table = json.load(f)
#print(data)
print('return value = %s' %table['parkingLots'])    #回傳json內success的內容
print("-------------------------")
#for data in table['records']['location']:   #json內table['records']['location']的內容(因為是一個list)
#    print('item name =%s' % data['lat'])    #緯度
for x in range(0,10):
    xp = table['parkingLots'][x]
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
    sqlstr = sql % (s01,s02,s03,s04,s05,s06,s07,s08,s09,s10,s11)
    print(sqlstr)
    try:    #保護連線失敗而當機的語法
        cursor.execute(sqlstr) #execute SQL Statement
        db.commit()
    except Exception as err:    #同意連線、但是拒絕您溝通
        print(f'Other error occurred: {err}')
        sys.exit(0)
    else:
        print('Success!')
#print(data["parkingLots"]) 
# Iterating through the json
# list
# Closing file

f.close()
