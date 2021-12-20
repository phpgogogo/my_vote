# 資料庫程式設計作業

## 投票系統
**請建立一個投票系統可以提供投票功能，並能查看投票的結果**

### 動作要求
1. 分析需要的功能
    * 使用者註冊、登入及登出的功能 frontend/reg.php , api/reg.php
    * 使用者修改會員基本資料的功能 frontend/edit_member.php , api/edit_member.php
    * 使用者進行投票的功能  frontend/vote.php , api/vote.php
    * 新增投票題目的功能 backend/vote_page.php , api/add_subject.php
    * 動態新增選項的功能 backend/add_option.php , api/add_option.php
    * 管理員控制投票題目顯示與否的功能 backend/vote_list.php , api/vote_status.php
    * 管理員刪除投票題目的功能 backend/vote_list.php , api/del_vote.php

2. 設計資料表
    * 資料表一(users)
        |欄位名|資料型態|主鍵|預設值|自動遞增|備註|屬性|
        |id|int(11)|主鍵|---|自動遞增|---|UNSIGNED|
        |account|var(32)|---|---|---|---|---|
        |password|var(32)|---|---|---|---|---|
        |email|var(32)|---|---|---|---|---|
        |name|var(12)|---|---|---|---|---|
        |gender|var(2)|---|---|---|---|---|
        |birthday|date|---|---|---|---|---|
    * 資料表二(topics)
        |欄位名|資料型態|主鍵|預設值|自動遞增|備註|屬性|
        |id|int(11)|主鍵|---|自動遞增|---|UNSIGNED|
        |topic|var(128)|---|---|---|---|---|
        |status|tinyint(1)|---|1|---|---|UNSIGNED|
    * 資料表三(options)
        |欄位名|資料型態|主鍵|預設值|自動遞增|備註|屬性|
        |id|int(11)|主鍵|---|自動遞增|---|UNSIGNED|
        |opt|var(128)|---|---|---|---|---|
        |topic_id|int(11)|---|---|---|---|UNSIGNED|
        |count|int(11)|---|---|---|---|---|
    * 資料表四(already_vote)
        |欄位名|資料型態|主鍵|預設值|自動遞增|備註|屬性|
        |id|int(11)|主鍵|---|自動遞增|---|UNSIGNED|
        |already_vote_name|var(32)|---|---|---|---|---|
        |topic_id|int(11)|---|---|---|---|UNSIGNED|

    
3. 請充分運用學到的各項網頁知識來美化這個投票系統的畫面
    * html標籤的應用(語意標籤、表單、表格、分隔線、標頭..etc)
    * css的應用(行內、內嵌、外連、flexbox、偽元素、動畫..etc)
    * bootstrap的應用(排版功能、元件、類別..etc)
    * javascript or jQuery的應用(DOM的操作、CSS的切換)

4. 請上傳至220的伺服器個人空間，並自行建立所需資料表


### 必備要求
**後台功能**
* 請設計一個頁面可以用來輸入投票的題目
* 可以控制題目的啟用與關閉

**前台功能**
* 請設計一個頁面可以看到目前進行投票的項目
* 可以進行投票
* 請設計一個頁面可以看到投票統計的結果

**進階功能**
* 請整合註冊及登入系統
* 能以長條圖或圖像化的方式來呈現統計的結果
* 能判斷使用者的狀態，避免重覆投票

## 評量時間
2021-12-24(星期五)