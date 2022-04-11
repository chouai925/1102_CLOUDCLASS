import time

def getdataorder(datatype):
    localtime = time.localtime()
    result = time.strftime(datatype, localtime)
    return result