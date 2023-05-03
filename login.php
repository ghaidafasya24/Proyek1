<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

  <title>TJP BOOKSTORE</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <!--external css-->
  <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/style-responsive.css" rel="stylesheet">

  <link rel="stylesheet" href="css/login.css">
  <script src="js/login.js"></script>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->


  <!-- login  -->
  <!-- <div id="login-page">
    <div class="container">

      <form class="form-login" method="POST" action="controller/authcontroller.php?page=login">
        <h2 class="form-login-heading">Selamat Datang Di TJP BOOKSTORE</h2>
        <div class="login-wrap">
         


          <input name="username" type="text" class="form-control" placeholder="User ID" required autofocus>
          <br>
          <input name="password" type="password" class="form-control" placeholder="Password" required>
          <label class="checkbox">

          </label>
          <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
          <hr>


        </div>
      </form>
    </div>
  </div> -->
  <!-- login end  -->

  <form method="POST" action="controller/authcontroller.php?page=login">
    <div class="container" onclick="onclick">
      <div class="top"></div>
      <h1>
        <marquee behavior="" direction="">Selamat Datang di Toko Buku </marquee>
      </h1>

      <div class="bottom"></div>
      <div class="center">
        <h1>
        </h1>

        <?php
        if (isset($_GET['status'])) {
          echo '<div class="alert alert-danger" align="center">';
          if ($_GET['status'] == 'tidakaktif') {
            echo "Akun Anda Tidak Aktif, Silahkan Hubungi Admin";
          }
          if ($_GET['status'] == 'gagal') {
            echo "Username Atau Password Salah !";
          }
          echo '</div>';
        }
        ?>

        <h2>Silahkan Login</h2>
        <hr>
        <input name="username" type="username" type="text" placeholder="Masukan username anda..." required autofocus />
        <input name="password" type="password" type="password" placeholder="Masukan password anda..." required />
        <br>
        <label class="checkbox">

        </label>
        <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
        <br>
        <p>@Copyright 2023.</p>
        <h2>&nbsp;</h2>
      </div>
    </div>
  </form>




  <!-- js placed at the end of the document so the pages load faster -->
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("assets/img/", {
      speed: 500
    });
  </script>


</body>

</html>