# 1102_CLOUDCLASS

自動雨量站-雨量觀測資料
抓出 O-A0002-001 的資料

作業要求：
1. 根據 O-A0002-001 的資料，自行建立對應資料表
2. 在雲端上建立對應的 php 程式，用 Restful API 的方式，使用 HTTP Get 方式，將 O-A0002-001 的資料抓到 mySQL 資料庫對應的資料表
3. 使用 python， 抓出 O-A0002-001 的資料，在用使用 HTTP Get 方式，呼叫第 2 項的 php 程式，把資料傳送雲端

繳交檔案
1. 以組繳交
2. 把插入資料成功的資料表，轉成對應的 xxxx.sql，進行繳交
3. 把用到所有 php，壓成 php 程式.rar 壓縮檔繳交

API DOC: https://opendata.cwb.gov.tw/dataset/observation?page=1
API URL: https://opendata.cwb.gov.tw/api/v1/rest/datastore/O-A0002-001