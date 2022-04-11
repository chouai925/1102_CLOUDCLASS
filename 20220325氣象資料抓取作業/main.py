import json
import urllib.parse
from os import getenv

import requests as req
from dotenv import load_dotenv

"""
    Create a .env file with KEY parameter 
    KEY=YOUR_AUTH_KEY_HERE
"""

# Dicts for converting field names
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
    "NOW": "nowr"
}

def main():
    load_dotenv()

    k = getenv("KEY")
    # print(k)

    port = getenv("PORT")
    url = f"http://localhost:{port}/fcu/opendata/rain.php"


    params = {
        "Authorization": k
    }
    
    apiURL = "https://opendata.cwb.gov.tw/api/v1/rest/datastore/O-A0002-001"
    r = req.get(apiURL, params=params)

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

        # print(d, end="\n\n")
        url = f"http://localhost:{port}/fcu/opendata/rain.php"
        url = buildURL(url, d)
        r = req.get(url)

        # print(r)
        # print(r.text)
        # print(r.url)
        # print(r.status_code)
        if (r.status_code!=200):
            print(r.url)
            print(r.status_code)
            break
        # print("---")

        # break
    
    print("--- End of Program ---")

def buildURL(baseURL: str, params: dict) -> str:
    """
        Adds quotted parameters to a URL
    """

    query = ""

    for k, v in params.items():
        # The value is string, just process it
        if (type(v) == str):
            query += f"{k}={urllib.parse.quote(v)}"
            query += "&"
        # The value is dict / json
        else:
            for k2, v2 in v.items():
                query += f"{k2}={urllib.parse.quote(v2)}"
                query += "&"
        
    
    # Remove the last character (&)
    query = query[:-1]

    url = f"{baseURL}?{query}"
    return url

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