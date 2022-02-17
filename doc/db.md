# 資料庫規劃
* 資料庫規劃 - 請描述你的資料庫設計，有那些資料表，各負責什麼功能，資料表間是否有關聯性，有那些欄位

* 資料表resume_basic_intro
  欄位共有7個
  `id``name``addr``email``graduate``position``other`
  用來存放個人資料


* 資料表resume_basic_bottom
  欄位共有2個
  `id``bottom`
  用來存放頁尾版權

  * 資料表resume_image
  欄位共有6個
  `id``img``sh``intro``por``porName`
  用來存放照片
  計畫以intro和pro是為了把個人大頭貼和作品集的照片分開
  porName是用來存作品集的名字

  * 資料表resume_porfolio
  欄位共有14個
  `id``name``href``sh``del``php``mysql``js``jquery``css``bootstrap``ps``ai``rank`
  用來存放作品集
  此name和資料表resume_image中的欄位porName有關聯

  * 資料表resume_work_experience
  欄位共有5個
  `id``title``text``sh``time`
  用來存工作經驗

