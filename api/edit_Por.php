
<?php
include_once "../base.php";

print_r($_POST);

// 處理作品集顯示及刪除


if(isset($_POST['sh'])){
    for($i=0;$i<count($_POST['id']);$i++){
        $row['id']=$_POST['id'][$i];
        $row['sh']=(isset($_POST['sh']) && in_array($_POST['id'][$i],$_POST['sh']))?1:0;
        $Por->save($row);
    }
}

if(isset($_POST['del'])){
    foreach($_POST['del'] as $p){
        $Por->del($p);
        }
}



//-------------------


to("../back.php?do=porfolio");

