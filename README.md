# 1102_CLOUDCLASS

自動雨量站-雨量觀測資料 抓出 **O-A0002-001** 的資料

API doc: https://opendata.cwb.gov.tw/dataset/observation?page=1

API url: https://opendata.cwb.gov.tw/api/v1/rest/datastore/O-A0002-001

說明資料: https://opendata.cwb.gov.tw/opendatadoc/DIV2/A0002-001.pdf

## 作業要求：

* [ ] 1. 根據 O-A0002-001 的資料，自行建立對應資料表
* [ ] 2. 在雲端上建立對應的 php 程式，用 Restful API 的方式，使用 HTTP Get 方式，將 O-A0002-001 的資料抓到 mySQL 資料庫對應的資料表
* [ ] 3. 使用 python， 抓出 O-A0002-001 的資料，在用使用 HTTP Get 方式，呼叫第 2 項的 php 程式，把資料傳送雲端

## 繳交檔案

* [ ] 1. 以組繳交
* [ ] 2. 把插入資料成功的資料表，轉成對應的 xxxx.sql，進行繳交
* [ ] 3. 把用到所有 php，壓成 php 程式.rar 壓縮檔繳交

## 資料 / Ref. etc

曹永忠，【物聯網環控系統開發#3】利用 PYTHON 將資料轉出，https://makerpro.cc/2020/05/use-python-to-transfer-data/, 2020 年 5 月 14 日

曹永忠，【物聯網整合開發】環控系統開發#2 測試氣象局 OPEN DATA 的 API KEY，https://makerpro.cc/2020/04/test-apikey-of-cwb-open-data/,2020 年 4 月 23 日

曹永忠，【物聯網整合開發】環控系統開發#1 如何取得氣象資料，https://makerpro.cc/2020/04/get-open-data-from-cwb/,2020 年 4 月 23 日