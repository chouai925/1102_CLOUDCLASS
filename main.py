import json
from os import getenv

import requests as req
from dotenv import load_dotenv

"""
    Create a .env file with KEY parameter 
    KEY=YOUR_AUTH_KEY_HERE
"""

paramDict = {
    "CITY": "cname",
    "CITY_SN": "cid",
    "TOWN": "tname",
    "TOWN_SN": "tid",

    # Not sure
    "ATTRIBUTE": "sname"
}

weatherDict = {
    "ELEV": "hight",
    "RAIN": "rain",
    "MIN_10": "minten",
    "HOUR_3": "hourthree",
    "HOUR_6": "hoursix",
    "HOUR_12": "hourtwelve",
    "HOUR_24": "hourtwentyfour",
    "NOW": "nowr,"
}

def main():
    load_dotenv()

    k = getenv("KEY")
    # print(k)

    params = {
        "Authorization": k
    }
    
    url = "https://opendata.cwb.gov.tw/api/v1/rest/datastore/O-A0002-001"

    r = req.get(url, params=params)

    # print(r)
    # print(r.json())
    # writeJSON_File("./data.json", r.json())
    
    jsonData = r.json()

    for i, d in enumerate(jsonData["records"]["location"]):
        s01 = d["stationId"]
        s02 = d["locationName"]
        s03 = d["time"]["obsTime"]
        s04 = d["lat"]
        s05 = d["lon"]

        s06 = {}
        for ele in d["weatherElement"]:
            name = weatherDict.get(ele["elementName"], None)
            if (name == None):
                continue
            
            s06[name] = ele["elementValue"]

        # print(s06)
        
        s07 = {}
        for ele in d["parameter"]:
            name = paramDict[ele["parameterName"]]
            s07[name] = ele["parameterValue"]

        # print(s07)

        # l = [s01, s02, s03, s04, s05, s06, s07]
        # print(l, end="\n\n")

        d = {
            # "id": i,
            # "dataorder": None,
            # "sysdatetime": None,
            "sid": s01,
            "sname": s02,
            "sdatetime": s03,
            "lat": s04,
            "lon": s05,
            "weather": s06,
            "parameter": s07
        }

        print(d, end="\n\n\n")

def writeFile(p, s, encoding="utf-8"):
    try:
        with open(p, "w+", encoding=encoding) as f:
            f.write(s)

        return True

    except:
        return False

def readJSON_File(p: str, encoding="utf-8"):
    """
        Reads a json file's content from given path
        None will be returned if exception caught
    """
    try:
        with open(p, "r", encoding=encoding) as f:
            return json.load(f)
    except Exception as e:
        # print(e)
        return None

def writeJSON_File(p: str, d: dict):
    try:
        with open(p, 'w+', encoding='utf-8') as f:
            json.dump(d, f, ensure_ascii=False, indent=4)
        return True
    except:
        return False

if (__name__ == "__main__"):
    main()
