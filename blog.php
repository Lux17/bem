<?php
require 'function.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Artikel BEM FT UMC</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Artikel</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php#blog">Artikel</a></li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
          <article class="entry entry-single">
            <?php

            // $id = $_GET['id'];
             
            //  // jalankan query untuk menampilkan semua data diurutkan berdasarkan 
            //  $query = "SELECT * FROM blog WHERE id='$id'";
            if (is_numeric($_GET['id']) && abs($_GET['id']) == $_GET['id']) {
              $query = "SELECT * FROM blog WHERE id = ".$_GET['id'];
              $result = mysqli_query($conn, $query);
              //mengecek apakah ada error ketika menjalankan query


              $no = 1; //variabel untuk membuat nomor urut
              // hasil query akan disimpan dalam variabel $data dalam bentuk array
              // kemudian dicetak dengan perulangan while
           } else {
              echo "Sorry, only positive integers allowed here!";
           }



           if(!$result){
            die ("Query Error: ".mysqli_errno($conn).
            " - ".mysqli_error($conn));
            }

           while($row = mysqli_fetch_assoc($result))
           {

             //buat perulangan untuk element tabel dari data mahasiswa

             ?>
              <center>
              <div class="entry-img">
               
              <iframe src="<?php echo $row['image']; ?>" width="640" height="480" allow="autoplay"></iframe>
              </div>

             </center>

              <h2 class="entry-title">
                <a href="#"><?php echo $row['title']; ?></a>
              </h2>

              <div class="entry-meta">
                <ul>

                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"> <?php echo $row['date']; ?></a></li>

                </ul>
              </div>

              <div class="entry-content">
              <?php echo $row['description']; ?>
              </div>

                        <?php
                           };

                ?>

            </article><!-- End blog entry -->
          </div>

          <div class="col-lg-4">

 
          <h3 class="sidebar-title">Recent Posts</h3>
              <?php
                $query = "SELECT * FROM blog ORDER BY date DESC LIMIT 10";
                           $result = mysqli_query($conn, $query);
                           //mengecek apakah ada error ketika menjalankan query
                           if(!$result){
                               die ("Query Error: ".mysqli_errno($conn).
                               " - ".mysqli_error($conn));
                           }

                           //buat perulangan untuk element tabel dari data mahasiswa
                           $no = 1; //variabel untuk membuat nomor urut
                           // hasil query akan disimpan dalam variabel $data dalam bentuk array
                           // kemudian dicetak dengan perulangan while
                           while($row = mysqli_fetch_assoc($result))
                           {
                           ?>
              <div class="sidebar-item ">

                <div class="post-item clearfix">

                <div class="row mb-2">
                <iframe  src="<?php echo $row['image']; ?>" width="60" height="60" allow="autoplay"></iframe>
                
                <h4><a style="font-size: 15px; font-weight: bold;   color: #012970;
                transition: 0.3s; " href="blog.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h4>
                              <time style="  display: block;
                font-style: italic;
                font-size: 14px;
                color: #aaaaaa;" ><?php echo $row['date']; ?></time>  
                              <div class="col-sm-2">
                
                                </div>
                                </div>

            </div>
          </div>
          <?php
                           };
?>
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

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