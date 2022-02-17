<?php include_once "base.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>前台管理頁面</title>
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


</head>

<body>

  <header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #E8ECEB;">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#about">About || 關於我 <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#exe">Experience || 經歷</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#port">Portfolio || 作品集</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact Me || 聯絡我</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./front/login.php">Login || 登入</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Navbar -->

    <!-- Background image -->
    <div class="p-5 text-center bg-image" style="
          background-image: url('./image/1491532468847.jpg');
          height: 400px;
          background-size:cover;
        ">
      <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
        <div class="d-flex justify-content-center align-items-center h-100">
          <div class="text-white">
            <h1 class="mb-3">Chang Yen-Jung</h1>
            <h4 class="mb-3">Welcome my website</h4>
            <div class="container  pb-0 ">
              <section class="mb-4">
                <!-- mail -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;" href="#!" role="button"><i class="fas fa-envelope me-3"></i></a>
                <!-- Linkedin -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca;" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>
                <!-- Github -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #db6930;" href="https://github.com/kunine99?tab=repositories" role="button"><i class="fab fa-github"></i></a>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
  </header>

  <!-- About || 關於我 -->

  <div class="w3-row w3-padding-64  " id="#about" style="background-color: #E8ECEB;">
    <?php $bis = $BasicIntro->all();?>
    <?php $pic = $SelfPic->find(['intro' => '1', 'sh' => '1']);?>
    <div class="w3-col m6 w3-padding-large w3-hide-small">
      <img src="image/<?= $pic['img']; ?>" class="w3-round w3-image w3-opacity-min box" alt="Table Setting" width="300" height="450">
      <!-- https://picsum.photos/id/1025/400/300 -->
    </div>
    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center" data-text="Contact Me." id="exe" data-aos="fade-left" data-aos-delay="170" data-aos-duration="1000">About || 關於我</h1><br>
      <h5 class=" w3-center"><?= $bis[0]['other'] ?></h5>
      <p class="w3-large">hello！我畢業於<?= $bis[0]['graduate'] ?>
      <p class="w3-large">生日：xxxx/9月
      <p class="w3-large">現居地：<?= $bis[0]['addr'] ?>
      <p class="w3-large">期望職位：<?= $bis[0]['position']; ?>
    </div>
  </div>

  <!-- About || 關於我 END -->

  <!-- Experience 經歷-->
  <div class="container-fluid text-white" style="background-color: #EBC999;">
    <?php
    $wks = $Work->all();
    // print_r($wks);

    // $wkpic = $SelfPic->all(['wk' => '1', 'sh' => '1']);
    // print_r($wkpic);
    ?>
    <h2 class="mb-2" class="por_title col-12 text-center " data-text="Contact Me." id="exe" data-aos="fade-left" data-aos-delay="170" data-aos-duration="1000">
      <br>
      <p class="text-center">Experience || 經歷</p>
    </h2>
    <div class="d-flex flex-column flex-md-row justify-content-between">
      <div class="flex-grow-1">
        <h3 class="mb-0"><?= nl2br($wks[0]['title']); ?></h3>
        <div class="subheading mb-3"><span><?= nl2br($wks[0]['text']); ?></span></div>
      </div>
      <div class="flex-shrink-0"><span class="text-white"><?= nl2br($wks[0]['time']); ?></span></div>
    </div>
    <!-- 經歷2 -->
    <div class="d-flex flex-column flex-md-row justify-content-between">
      <div class="flex-grow-1">
        <h3 class="mb-0"><?= nl2br($wks[1]['title']); ?></h3>
        <div class="subheading mb-3"><span><?= nl2br($wks[1]['text']); ?></span></div>
      </div>
      <div class="flex-shrink-0"><span class="text-white"><?= nl2br($wks[1]['time']); ?></span></div>
    </div>
  </div>
  <!-- 經歷2  end-->
  <!-- Experience 經歷 END -->

  <!-- Portfolio || 作品集 -->
  <div class=" mt-12 text-white" id="link-tabs" style="background-color: #8CA9D3;">
    <h2 class="mb-5" class="por_title col-12 text-center" data-text="Contact Me." id="port" data-aos="fade-left" data-aos-delay="170" data-aos-duration="1000">
      <br>
      <p class="text-center">Portfolio || 作品集</p>
    </h2>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs justify-content-around">
      <li class="nav-item">
        <a class="nav-link active" href="#page1">全部</a>
        <!-- <a class="nav-link" href="#page1">Page 1</a> -->
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#page2">前後端</a>
        <!-- <a class="nav-link active" href="#page2">Page 2</a> -->
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#page3">其他</a>
      </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <!-- active 預設顯示 -->
      <div id="page1" class="container tab-pane active"><br>
        <!-- <div id="page1" class="container tab-pane fade"><br> -->
        <!-- 第一排 -->
        <div class="row">
          <div class="col-md-4 w-80">
            <div class="box">
              <a href="http://220.128.133.15/s1100411/calendar/">
              <img src="./image/back_01.PNG" class="card-img-top" alt="...</a>">
              <h3 class="text-secondary">萬年曆</h3>
              <div class="line bg-success"></div>
              <p>CSS、HTML、PHP</p>
            </div>
          </div>
          <div class="col-md-4 w-80">
            <div class="box">
              <a href="http://220.128.133.15/s1100411/vote11/">
              <img src="./image/back_02.PNG" class="card-img-top" alt="...</a>">
              <h3 class="text-secondary">投票系統</h3>
              <div class="line bg-success"></div>
              <p>CSS、HTML、PHP、SQL</p>
            </div>
          </div>
          <div class="col-md-4 w-80">
            <div class="box">
              <a href="http://">
              <img src="https://picsum.photos/id/1025/400/300" class="card</a>-img-top" alt="...">
              <h3 class="text-secondary">Child</h3>
              <div class="line bg-success"></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem animi quibusdam maiores
                dolore nesciunt perferendis tempore modi nulla deserunt fugit.</p>
            </div>
          </div>
        </div>
        <!-- 第一排end -->

        <!-- 第二排 -->
        <div class="row mt-5">
          <div class="row">
            <div class="col-md-4 w-80">
              <div class="box">
                <a href="https://github.com/wdaweb/php-portfolio-1102-kunine99/blob/master/image/ps_01.jpg">
                <img src="./image/ps_01.jpg" class="card-img-top" alt="..."></a>
                <h3 class="text-secondary">職訓局宣傳海報</h3>
                <div class="line bg-success"></div>
                <p>photoshop</p>
              </div>
            </div>
            <div class="col-md-4 w-80">
              <div class="box">
                <a href="https://github.com/wdaweb/php-portfolio-1102-kunine99/blob/master/image/ps_02.jpg">
                <img src="./image/ps_02.jpg" class="card-img-top" alt="..."></a>
                <h3 class="text-secondary">老街旅遊海報</h3>
                <div class="line bg-success"></div>
                <p>photoshop</p>
              </div>
            </div>
            <div class="col-md-4 w-80">
              <div class="box">
                <a href="https://github.com/wdaweb/php-portfolio-1102-kunine99/blob/master/image/ps_03.jpg">
                <img src="./image/ps_03.jpg" class="card-img-top" alt="..."></a>
                <h3 class="text-secondary">虎年年曆</h3>
                <div class="line bg-success"></div>
                <p>photoshop</p>
              </div>
            </div>
          </div>
          <!-- col-md-4 end-->
        </div>
        <!-- 第二排end -->
      </div>

      <!-- 分頁二 前後端  -->
      <div id="page2" class="container tab-pane fade"><br>
        <!-- <div id="page2" class="container tab-pane active"><br> -->
        <!-- tab2 row1 -->
        <div class="row">
          <div class="col-md-4 w-80">
            <div class="box">
              <a href="http://220.128.133.15/s1100411/calendar/">
              <img src="./image/back_01.PNG" class="card-img-top" alt="...</a>">
              <h3 class="text-secondary">萬年曆</h3>
              <div class="line bg-success"></div>
              <p>CSS、HTML、PHP</p>
            </div>
          </div>
          <div class="col-md-4 w-80">
            <div class="box">
              <a href="http://220.128.133.15/s1100411/vote11/">
              <img src="./image/back_02.PNG" class="card-img-top" alt="...</a>">
              <h3 class="text-secondary">投票系統</h3>
              <div class="line bg-success"></div>
              <p>CSS、HTML、PHP、SQL</p>
            </div>
          </div>
          <div class="col-md-4 w-80">
            <div class="box">
              <a href="http://">
              <img src="https://picsum.photos/id/1025/400/300" class="card</a>-img-top" alt="...">
              <h3 class="text-secondary">Child</h3>
              <div class="line bg-success"></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem animi quibusdam maiores
                dolore nesciunt perferendis tempore modi nulla deserunt fugit.</p>
            </div>
          </div>
        </div>
        <!-- tab2 row1 end -->

        <!-- tab2 row2     -->
        <!-- <div class="row mt-5 justify-content-center">
          <div class="col-md-4 w-80">
            <div class="box">
              <a href="http://">
              <img src="https://picsum.photos/id/1025/400/300" class="card</a>-img-top" alt="...">
              <h3 class="text-secondary">Child</h3>
              <div class="line bg-success"></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem animi quibusdam maiores
                dolore nesciunt perferendis tempore modi nulla deserunt fugit.</p>
            </div>
          </div>
          <div class="col-md-4 w-80">
            <div class="box">
              <a href="http://">
              <img src="https://picsum.photos/id/1025/400/300" class="card</a>-img-top" alt="...">
              <h3 class="text-secondary">Child</h3>
              <div class="line bg-success"></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem animi quibusdam maiores
                dolore nesciunt perferendis tempore modi nulla deserunt fugit.</p>
            </div>
          </div>
          <div class="col-md-4 w-80">
            <div class="box">
              <a href="http://">
              <img src="https://picsum.photos/id/1025/400/300" class="card</a>-img-top" alt="...">
              <h3 class="text-secondary">Child</h3>
              <div class="line bg-success"></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem animi quibusdam maiores
                dolore nesciunt perferendis tempore modi nulla deserunt fugit.</p>
            </div>
          </div>
        </div> -->
        <!-- tab2 row2 end -->
      </div>
      <!-- 分頁二 前後端  end-->


      <!-- 分頁三 其他-->
      <div id="page3" class="container tab-pane fade "><br>
        <div class="row">
          <div class="col-md-4 w-80">
            <div class="box">
              <a href="https://github.com/wdaweb/php-portfolio-1102-kunine99/blob/master/image/ps_01.jpg">
              <img src="./image/ps_01.jpg" class="card-img-top" alt="..."></a>
              <h3 class="text-secondary">職訓局宣傳海報</h3>
              <div class="line bg-success"></div>
              <p>photoshop</p>
            </div>
          </div>
          <div class="col-md-4 w-80">
            <div class="box">
              <a href="https://github.com/wdaweb/php-portfolio-1102-kunine99/blob/master/image/ps_02.jpg">
              <img src="./image/ps_02.jpg" class="card-img-top" alt="..."></a>
              <h3 class="text-secondary">老街旅遊海報</h3>
              <div class="line bg-success"></div>
              <p>photoshop</p>
            </div>
          </div>
          <div class="col-md-4 w-80">
            <div class="box">
              <a href="https://github.com/wdaweb/php-portfolio-1102-kunine99/blob/master/image/ps_03.jpg">
              <img src="./image/ps_03.jpg" class="card-img-top" alt="..."></a>
              <h3 class="text-secondary">虎年年曆</h3>
              <div class="line bg-success"></div>
              <p>photoshop</p>
            </div>
          </div>
        </div>
        <!-- 分頁三 END-->
      </div>
    </div>
    <!-- tabs end -->
    <!-- Portfolio || 作品集 END-->

    <!-- tabs end -->
    <!-- Portfolio || 作品集 END-->

    <!-- Contact Container -->
    <!-- 顏色候補 #FAE6B1-->
    <div class="container-fluid w3-padding-64 w3-theme-l5 text-black" id="contact" style="background-color: #F26659;">
      <div class="container">
        <div class="w3-row">
          <div class="w3-col m5" class="por_title col-12 text-right " data-text="Contact Me." id="por" data-aos="fade-left" data-aos-delay="170" data-aos-duration="1000">
            <div class="w3-padding-16 ">
              <span class="w3-xlarge  w3-bottombar" id="contact">Contact Me || 聯絡我</span>
            </div>
            <h3>求職條件</h3>
            <p>求職條件：全職</p>
            <p>可上班日期：隨時</p>
            <p>希望待遇：面議</p>
            <p>求職地區：北部</p>
            <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i> <?= $bis[0]['addr'] ?>, 台灣</p>
            <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +00 0000000000</p>
            <p><i class="fas fa-envelope me-3 w3-text-teal w3-xlarge"></i> <?= $bis[0]['email']; ?></p>
            <!-- 感謝您撥冗閱讀，如有任何需要，請隨時聯絡我！ -->

          </div>
          <div class="w3-col m7 box">
            <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="/action_page.php" target="_blank">
              <div class="w3-section">
                <label>Name</label>
                <input class="w3-input" type="text" name="Name" required>
              </div>
              <div class="w3-section">
                <label>Email</label>
                <input class="w3-input" type="text" name="Email" required>
              </div>
              <div class="w3-section">
                <label>Message</label>
                <input class="w3-input" type="text" name="Message" required>
              </div>
              <!-- <input class="w3-check" type="checkbox" checked name="Like"> -->
              <!-- <label>I Like it!</label> -->
              <button type="submit" class="w3-button w3-right w3-theme">Send</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- </div> -->
    <!-- Contact Container END-->

    <!-- footer -->
    <footer class="text-center text-white fixed-bottom " style="background-color: #F26659;">
      <div class="text-center p-2" style="background-color: rgba(0, 0, 0, 0.2);">
        <?= $Bottom->find(1)['bottom']; ?>
      </div>
    </footer>
    <!-- footer end -->


    <script>
      // 使用aos.js
      AOS.init();
    </script>

    <!-- cdnj/Home/Libraries/bodymovin  lottie小動畫用-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.8.1/lottie.min.js"></script>
    <script src="./js/script.js"></script>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

    <!-- tabs js -->
    <script>
      $(document).ready(function() {
        $(".nav-tabs a").click(function() {
          $(this).tab('show');
        });
      });
    </script>


</body>

</html>