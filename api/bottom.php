<?php include_once "../base.php";
// 頁尾版權資料
$Bottom->save(['id'=>1,'bottom'=>$_POST['bottom']]);

to("../back.php?do=other");
