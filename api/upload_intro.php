<?php

include_once "../base.php";
// print_r($_FILES);
// 新增個人照片

if(!empty($_FILES['pic']['tmp_name'])){
    $row=[];
    $pictype=array_pop(explode('.',$_FILES['pic']['name']));
    $picname='intro'.date("Ymd").date("his").'.'.$pictype;
    echo $picname;
    move_uploaded_file($_FILES['pic']['tmp_name'],'../image/'.$picname);
    $row['img']=$picname;
    $row['sh']='0';
    $row['intro']='1';

    $SelfPic->save($row);
}

to("../back.php?do=intro");
