<?php
include_once "../base.php";


echo "<pre>";
print_r($_POST);
echo "</pre>";



print_r(count($_POST['id']));
// 第一種錯誤 error了
for ($i = 0; $i < count($_POST['id']); $i++) {
$row['id'] = $_POST['id'][$i];
    $row['text'] = $_POST['wk_revise'][$i];
    $row['time'] = $_POST['wk_time'][$i];
    $row['title'] = $_POST['wk_title'][$i];
    $row['sh'] = $_POST['wk_sh'][$i];


    $Work->save($row);
}


to("../back.php?do=wk");

