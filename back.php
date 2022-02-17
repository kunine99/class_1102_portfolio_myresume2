<?php include_once "base.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>後台管理頁面</title>
  <!-- W3SCHOOL -->
  <link rel="stylesheet" href="./css/w3c.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/style.scss">
  <!-- bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <!-- cdnj/font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./css/style.css">
  <!-- AOS  轉場效果-->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <link rel="stylesheet" href="./css/admin.css">
</head>
<body>
<div class="nav">
    <a href="back.php">後台管理介紹</a>
    <a href="?do=intro">About || 關於我</a>
    <a href="?do=wk">Experience || 經歷</a>
    <!-- <a href="?do=skills">SKILLS</a> -->
    <a href="?do=porfolio">Portfolio || 作品集</a>
    <!-- <a href="?do=contact">Contact Me || 聯絡我</a> -->
    <a href="?do=other">Other || 其他</a>
</div>
<div class="admin_content">
    
<?php
    $do=(isset($_GET['do']))?$_GET['do']:"index";
    $file="back/".$do.".php";
    if(file_exists($file)){
        include_once $file;
    }else{
        include_once "./back/index.php";
    }

?>

  <!-- footer -->
  <footer class="text-center text-white fixed-bottom " style="background-color: #F26659;">
    <div class="text-center p-2" style="background-color: rgba(0, 0, 0, 0.2);">
    <?= $Bottom->find(1)['bottom']; ?>
    </div>
  </footer>
  <!-- footer end -->

</body>
</html>