import json     #了解json內容的json物件的套件
# Opening JSON file
f = open('D://xampp//htdocs//fcu//parking//Parking_Info.json',encoding='utf8')
 
# returns JSON object as
# a dictionary
table = json.load(f)
#print(data)
print('return value = %s' %table['parkingLots'])    #回傳json內success的內容

#for data in table['records']['location']:   #json內table['records']['location']的內容(因為是一個list)
#    print('item name =%s' % data['lat'])    #緯度
for x in range(0,10):
    xp = table['parkingLots'][x]
    print(xp)
    print("-------------------------")
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
    print(s01,s02,s03,s04,s05,s06,s07,s08,s09,s10,s11)
    
#print(data["parkingLots"]) 
# Iterating through the json
# list
# Closing file

f.close()
