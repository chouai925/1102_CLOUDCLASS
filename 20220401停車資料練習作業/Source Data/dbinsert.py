#!/usr/bin/python3
#coding=utf-8

import pymysql

# Open database connection
db = pymysql.connect(host="localhost",user="fcu",password="12345678",database="fcu" )

# prepare a cursor object using cursor() method
cursor = db.cursor()

# Drop table if it already exist using execute() method.
cursor.execute("DROP TABLE IF EXISTS employee")
sql = "INSERT INTO `parkingdata` (`id`, `parkId`, `parkName`, `totalSpace`, `surplusSpace`, `payGuide`, `introduction`, `address`, `wgsX`, `wgsY`, `areaId`, `areaName`, `systemdatetime`, `datatime`) VALUES (NULL, 'P-TY-002', '桃園縣公有府前地下停車場\"', '200', '100', '停車費率:30 元/小時。停車時數未滿一小時者，以一小時計算。逾一小時者，其超過之不滿一小時部分', '桃園市政府管轄之停車場', '桃園區縣府路1號(出入口位於桃園市政府警察局前)', '121.3011', '24.9934', '1', '桃園區', current_timestamp(), '20220401191300');"
# Create table as per requirement


cursor.execute(sql)
print("Insert data into table Successfull.")
# disconnect from server
db.close()