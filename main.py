import json
from os import getenv

import requests as req
from dotenv import load_dotenv

"""
    Create a .env file with KEY parameter 
    KEY=YOUR_AUTH_KEY_HERE
"""

def main():
    load_dotenv()

    k = getenv("KEY")
    # print(k)

    d = {
            "Authorization": k
    }
    
    url = "https://opendata.cwb.gov.tw/api/v1/rest/datastore/O-A0002-001"

    r = req.get(url, params=d)

    print(r)
    # print(r.json())
    # writeJSON_File("./data.json", r.json())
    
    data = r.json()

    for d in data["records"]["location"]:
        s01 = d["stationId"]
        s02 = d["locationName"]
        s03 = d["time"]["obsTime"]
        s04 = d["lat"]
        s05 = d["lon"]

        s06 = {}
        for ele in d["weatherElement"]:
            s06[ele["elementName"]] = ele["elementValue"]
        
        s07 = {}
        for ele in d["parameter"]:
            s07[ele["parameterName"]] = ele["parameterValue"]

        print(s07)

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
