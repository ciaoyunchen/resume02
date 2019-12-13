# 個人履歷表系統開發計畫

## 作品集計畫
### 前端部分
* 萬年曆
* 發票紀錄及兌獎系統
* 小遊戲（還沒做:D）
### 設計部分
* 旅遊poster
* 美食banner

## 視覺風格
* 生活風格-以簡單的圖片及文字來呈現介面
* 網頁呈現-單頁式網頁，由上到下閱讀
* 網頁互動性-每頁添加不同js效果
* 配色-黑白為主，避免過多的色彩增添視覺負擔

## 資料庫規劃
### 資料表設計
* 封面照片（cover)
* 個人資料（about)
* 工作經歷（experience)
* 個人特質（character)
* 作品集（portfolio)
* 聯絡方式（contact)

### 資料表欄位設計
* login

    |  name   |    type    |  pk | default | A_I |
    |:-------:|:----------:|:---:|:-------:|:---:|
    |id       |int(10)     |yes  |         |yes  |
    |user     |varchar(10) |     |         |     |
    |password |varchar(10) |     |         |     |

* cover

    |  name   |  type  |  pk | default | A_I |
    |:-------:|:------:|:---:|:-------:|:---:|
    |id       |int(10) |yes  |         |yes  |
    |file     |text    |     |         |     |
    |text     |text    |     |         |     |
    |sh       |int(1)  |     |   0     |     |

* about

    |  name   |  type  |  pk | default | A_I |
    |:-------:|:------:|:---:|:-------:|:---:|
    |id       |int(10) |yes  |         |yes  |
    |name     |text    |     |         |     |
    |age      |text    |     |         |     |
    |education|text    |     |         |     |
    |abilities|text    |     |         |     |
    |skills   |text    |     |         |     |

* experience

    |  name   |  type  |  pk | default | A_I |
    |:-------:|:------:|:---:|:-------:|:---:|
    |id       |int(10) |yes  |         |yes  |
    |company  |text    |     |         |     |
    |title    |text    |     |         |     |
    |time     |text    |     |         |     |
    |period   |text    |     |         |     |
    |pay      |text    |     |         |     |
    |file     |text    |     |         |     |
    |content  |text    |     |         |     |

* special

    |  name   |  type  |  pk | default | A_I |
    |:-------:|:------:|:---:|:-------:|:---:|
    |id       |int(10) |yes  |         |yes  |
    |title    |text    |     |         |     |
    |text     |text    |     |         |     |
    |sh       |int(1)  |     |   1     |     |

* portfolio

    |  name   |  type  |  pk | default | A_I |
    |:-------:|:------:|:---:|:-------:|:---:|
    |id       |int(10) |yes  |         |yes  |
    |file     |text    |     |         |     |
    |http     |text    |     |         |     |
    |sh       |int(1)  |     |   1     |     |

* contact

    |  name   |  type  |  pk | default | A_I |
    |:-------:|:------:|:---:|:-------:|:---:|
    |id       |int(10) |yes  |         |yes  |
    |tel      |text    |     |         |     |
    |email    |text    |     |         |     |

## 功能規劃
### 前台
* 開頭歡迎詞
* 個人資料（about)介紹有分officail、private兩部份，點擊按鈕可以切換
* 工作經歷以js動畫呈現
* 個人特質可以點擊按紐呈現
* 作品集有相對應的連結

### 後台
* 登入系統管理
* 個人資料管理以表單的方式來呈現
* 資料皆可以編輯並儲存回資料庫
* 部分資料可以選擇是否顯示在前台
* 新增及更新資料會以modal視窗彈出


