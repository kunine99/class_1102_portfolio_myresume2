<?php
include_once "../base.php";
print_r($_POST);
// 自我介紹文字內容管理_顯示/刪除照片

$row=[];
for($i=0;$i<count($_POST['id']);$i++){
    $row['id']=$_POST['id'][$i];

   
    $row['sh']=(isset($_POST['sh']) && in_array($_POST['id'][$i],$_POST['sh']))?1:0;
    $row['wk']='0';
    $SelfPic->save($row);
}

foreach($_POST['id'] as  $k => $id){
    if(isset($_POST['del']) && in_array($id,$_POST['del'])){
        $SelfPic->del($id);
    }
}

to("../back.php?do=intro");
