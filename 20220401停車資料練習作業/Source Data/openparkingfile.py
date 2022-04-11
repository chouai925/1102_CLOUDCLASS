import json
 
# Opening JSON file
f = open('D://xampp//htdocs//fcu//parking//Parking_Info.json',encoding='utf8')
 
# returns JSON object as
# a dictionary
data = json.load(f)
print(data)
# Iterating through the json
# list
# Closing file
f.close()
