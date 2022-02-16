<?php include_once "../base.php";

//先檢查是否有錯誤訊息遺留，有則刪除
if(isset($_SESSION['error'])){
    unset($_SESSION['error']);
}


if(!empty($_POST)){
    if($_POST['acc']=='admin'  && $_POST['pw']=='1234'){
        to("../back.php");
    }else{
        echo "<script>";
        echo "alert('帳號或密碼錯誤')";
        echo "</script>";
        // to("../index.php");
    
    }
}

?>



