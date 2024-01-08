<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Masuk - BEM Fakultas Teknik Universitas Muhammadiyah Cirebo</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bocor
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/bocor-bootstrap-template-nice-animation/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.php">BEM FT UMC<span>.</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php#about">Tentang kami</a></li>
          <li><a class="nav-link scrollto" href="index.php#features">Tugas</a></li>
          <!-- <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li> -->
          <li><a class="nav-link scrollto" href="index.php#team">Pengurus</a></li>
          <li><a class="nav-link scrollto" href="index.php#artikel">Artikel</a></li>
          <li><a class="nav-link scrollto" href="index.php#contact">Kontak</a></li>
          <li><a class="getstarted scrollto" href="masuk.php">Masuk</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    
    <section class="inner-page">
      <div class="container">
 



      <div style="display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: center;
    width: 100%;
    min-height: 100%;
    margin-left: 5px;
    margin-right: 10px;
    padding: 20px; ;">
  <div class="card  shadow-sm" style="width: 27rem;" >
  <div class="card-body">
    <h1 class="card-title" style="color: #b31919;">Masuk Akun</h1>
    <p class="card-text" style="color: #b31919;">Silahkan  masuk ke akunmu.</p>
    <form method="POST"  action="login_action.php">
      <div class="col-12">
        <div class="mb-3">
            <label for="InputEmail" class="form-label">Username</label>
            <input type="username" class="form-control" id="username" name="username" >
        </div>
        <label for="exampleInputPassword1" class="form-label" >Password</label>
        <div class="mb-3 input-group">
            <input type="password" class="form-control" id="password" aria-describedby="passwordHelpInline" data-toggle="password" name="password">
            <div class= "input-group-append">
            <span class="input-group-text" onclick="password_show_hide();">
                  <i class="mb-2 fas fa-eye" id="show_eye"></i>
                  <i class="mb-2 fas fa-eye-slash d-none" id="hide_eye"></i>
            </span>
            </div>
          </div>
  </div>
        <div class="mb-3 form-check">
            <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
            <!-- <label class="form-check-label" for="exampleCheck1">ingat saya</label> -->
        </div>
        <div class="d-grid mx-auto">
            <button class="btn btn-large btn-block btn-danger tombol" type="submit" value="login">Masuk</button>
        </div>
    </form>
    
    <div class="d-flex py-2 mt-3 border-top">
    <!-- <p class="card-text">Belum punya akun?</p>
    <a  href="#"style="color: blue;">Hubungi admin</a> -->
    </div>
  </div>
</div>
<!-- style="display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: center;
    width: 100%;
    min-height: 100%;
    padding: 20px;
" -->
<script type="text/javascript">
function password_show_hide() {
  var x = document.getElementById("password");
  var show_eye = document.getElementById("show_eye");
  var hide_eye = document.getElementById("hide_eye");
  hide_eye.classList.remove("d-none");
  if (x.type === "password") {
    x.type = "text";
    show_eye.style.display = "none";
    hide_eye.style.display = "block";
  } else {
    x.type = "password";
    show_eye.style.display = "block";
    hide_eye.style.display = "none";
  }
}
</script>
<?php

				if(isset($_GET['pesan'])){
	        if($_GET['pesan'] == "gagal"){
		       echo "Login gagal! username dan password salah!";
	        }else if($_GET['pesan'] == "logout"){
		       echo "Anda telah berhasil logout";
	        }else if($_GET['pesan'] == "belum_login"){
		       echo "Anda harus login untuk mengakses dashboard";
	        }
        }
				?>



      </div>
    </section>

  </main><!-- End #main -->

<!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row  justify-content-center">
          <div class="col-lg-6">
            <h3>BEM FT</h3>
            <p>Bem Fakultas Teknik adalah Badan Eksekutif Mahasiswa di sebuah Fakultas Teknik di Universitas Muhammadiyah Cirebon</p>
          </div>
        </div>

        <div class="social-links">
          <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        </div>

      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>BEM FT</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bocor-bootstrap-template-nice-animation/ -->
         <a href="https://bootstrapmade.com/"></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>