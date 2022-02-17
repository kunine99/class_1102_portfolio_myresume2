<?php
include_once "../base.php";


echo "<pre>";
print_r($_POST);
echo "</pre>";


// for($i=0;$i<count($_POST['id']);$i++){
//     $row['text']=$_POST['wk_revise'][$i];
//     $row['id']=$_POST['id'][$i];
//     $Work->save($row);
// }


// for($i=0;$i<count($_POST['id']);$i++){
//     $row['text']=$_POST['wk_revise'][$i];
//     $row['time'] = $_POST['wk_time'][$i];
//     $Work->save($row);
// }

// for($i=0;$i<count($_POST['id']);$i++){
//     $row['text']=$_POST['wk_revise'][$i];
//     $row['title'] = $_POST['wk_title'][$i];

//     $Work->save($row);
// }

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


// 第二種錯誤 error了
// if (isset($_POST['id']) && $_POST['id'] != null) {
//     for ($i = 0; $i < count($_POST['id']); $i++) {
//         $row['title'] = $_POST['title'][$i];
//         $row['text'] = $_POST['wk_revise'][$i];
//         $row['time'] = $_POST['wk_time'][$i];
//         $Work->save($row);
//     }
// }


 