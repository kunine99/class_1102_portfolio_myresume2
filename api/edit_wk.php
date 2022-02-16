<?php
include_once "../base.php";

// print_r($_POST);
echo "123";

for ($i = 0; $i < count($_POST['id']); $i++) {
    $row['title'] = $_POST['wk_title'][$i];
    $row['text'] = $_POST['wk_revise'][$i];
    $row['time'] = $_POST['wk_time'][$i];

    $row['id'] = $_POST['id'][$i];
    $Work->save($row);
}


// to("../back/index.php?do=wk");




