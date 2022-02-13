<?php include_once "db.php";

//先檢查是否有錯誤訊息遺留，有則刪除
if(isset($_SESSION['error'])){
    unset($_SESSION['error']);
}


if(!empty($_POST)){
    if($_POST['account']=='admin'  && $_POST['password']=='1234'){
        to("../back/index.php");
    }else{
        echo "<script>";
        echo "alert('帳號或密碼錯誤')";
        echo "</script>";
        // to("../index.php");
    
    }
}

?>



