<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>11</title>
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
  <style>
    * {
      /* background-color: #E8ECEB; */

    }

    #boxx:hover {
      background: white;
      box-shadow: 0px 20px 20px rgba(0, 0, 0, .25);
    }
  </style>

</head>

<body>


  <!-- <div class="container-fluid"> -->
  <header>


    <!-- Background image -->
    <div class="p-5 text-center bg-image" style="
              background-image: url('../image/1491532468847.jpg');
              background-size:cover;
            ">
      <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
        <div class="d-flex justify-content-center align-items-center h-100">
          <div class="text-white">
            <h1 class="mb-3">Chang Yen-Jung</h1>
            <h4 class="mb-3">Welcome my website</h4>
            <!-- <a class="btn btn-outline-light btn-lg" href="#!" role="button">Call to action</a> -->
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



  <div class="mask d-flex align-items-center h-100 gradient-custom-3 " style=" background-color: #E8ECEB;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <!-- <div style="border-radius: 15px;" > -->
            <div class="card-body p-5">
              <h2 class='text-center font-weight-bold'>會員登入</h2>
              <form action="../api/check_login.php" method="post">
              <form>
                <table id="loginForm" class='table m-auto w-auto'>
                  <tr>
                    <td><i class="fas fa-user">帳號：</td>
                    <td><input type="text" name="acc" placeholder="請輸入帳號" class="form-control form-control-sm"></td>
                  </tr>
                  <tr>
                    <td><i class="fas fa-lock ">密碼：</td>
                    <td><input type="password" name="pw" placeholder="請輸入密碼" class="form-control form-control-sm"></td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <input type="submit" value="登入">
                      <input type="reset" value="重罝">
                      <a class="btn btn-sm  mx-1 " href="../index.php">回到上一頁</a>
                    </td>
                  </tr>
                </table>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- footer -->
  <footer class="text-center text-white fixed-bottom " style="background-color: #F26659;">
    <div class="text-center p-2" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022
      <a class="text-white">resume</a>
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