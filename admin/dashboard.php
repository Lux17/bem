<?php 
  require 'function.php';
  session_start();
  if(isset($_COOKIE['ceadmin'])&&$_COOKIE['ceadmin']=="asjbmbnsugaldsks22"){
      echo "";
      }else{
          session_unset();
          session_destroy(); 
          header("Location:../index.php");
      }   
?>
<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Bootstrap Eskternal -->
    <link href="css/admin.css" rel="stylesheet" />

    

    <title>Pendataan BEM FT</title>
  </head>

  <body>
    <!-- Membuat Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container"> 
        <a class="navbar-brand" href="#">BEM FT UMC</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar Selesai -->

    <!-- Membuat Isi Website -->
    <section id="content">
      <div class="row mt-5 g-0 gass">

        <!-- Membuat Sidebar -->
        <div class="col-sm-2 bg-dark mt-2 pt-4">
          <ul class="nav flex-column mb-5 sidebar list-unstyled ps-0">
            <li class="nav-item">
               <a class="nav-link text-white rounded sidebar-active" aria-current="page" href="dashboard.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Dashboard"> Dashboard</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white rounded" href="pengurus.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tampil Data Pengurus"> Data Pengurus</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white rounded" href="bidang.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tampil Data Bidang"> Data Bidang</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white rounded" href="jabatan.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tampil Data Jabatan"> Data Jabatan</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white rounded " href="surat.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tampil Data Surat">Data Surat</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white rounded" href="tambah_pengurus.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tambah atau Edit Data Pengurus"> Edit Data Pengurus</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white rounded" href="tambah_bidang.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tambah atau Edit Data Bidang"> Edit Data Bidang</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white rounded" href="tambah_jabatan.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tambah atau Edit Data Jabatan"> Edit Data Jabatan</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white rounded" href="tambah_surat.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tampil Data Surat">Edit Data Surat</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white rounded " href="blog.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Buat Blog"> Buat Blog</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white rounded" href="../index.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Keluar"> Keluar</a><hr class="bg-secondary">
            </li>
          </ul>
        </div>
        <!-- Sidebar Selesai -->

        <!-- Membuat Isi Website -->
        <div class="col-sm-10 pt-5 content-icon">
          <!-- Membuat Konten Dashboard -->
           <h3><i class="bi bi-speedometer2 icon"></i> Dashboard</h3><hr>
          
          <div class="row ms-4 text-white me-0">
              <div class="card bg-primary" style="width: 23rem; height:13rem;">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="bi bi-person"></i>
                  </div>
                  <h5 class="card-title">JUMLAH PENGURUS</h5>
                  <div class="display-4 fw-bold mt-3">
                  <?php 
                      $ambil = "SELECT count(*) AS jumlah FROM pengurus";
                      $masuk = mysqli_query($conn, $ambil);
                      $hitung = mysqli_fetch_array($masuk);
                      echo "{$hitung['jumlah']}";
                    ?>
                  </div>
                  <a href="pengurus.php" class="decor"><p class="card-text text-white mt-4">Lihat Detail<i class="bi bi-chevron-double-right ms-2"></i></p></a>
                </div>
              </div>
            
            

              <div class="card mb-3 bg-danger jarak-card" style="width: 23rem; height:13rem;">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="bi bi-music-note-beamed"></i>
                  </div>
                  <h5 class="card-title">JUMLAH BIDANG</h5>
                  <div class="display-4 fw-bold mt-3">
                  <?php 
                        $ambil2 = "SELECT count(*) AS jumlah2 FROM bidang";
                        $masuk2 = mysqli_query($conn, $ambil2);
                        $hitung2 = mysqli_fetch_array($masuk2);
                        echo "{$hitung2['jumlah2']}";
                      ?>
                  </div>
                  <a href="bidang.php" class="decor"><p class="card-text text-white mt-4">Lihat Detail<i class="bi bi-chevron-double-right ms-2"></i></p></a>
                </div>
              </div>

              <div class="card mb-3 bg-success jarak-card" style="width: 23rem; height:13rem;">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="bi bi-people"></i>
                  </div>
                  <h5 class="card-title">JUMLAH JABATAN</h5>
                  <div class="display-4 fw-bold mt-3">
                  <?php 
                        $ambil3 = "SELECT count(*) AS jumlah3 FROM jabatan";
                        $masuk3 = mysqli_query($conn, $ambil3);
                        $hitung3 = mysqli_fetch_array($masuk3);
                        echo "{$hitung3['jumlah3']}";
                      ?>
                  </div>
                  <a href="jabatan.php" class="decor"><p class="card-text text-white mt-4">Lihat Detail<i class="bi bi-chevron-double-right ms-2"></i></p></a>
                </div>
            </div>


            <div class="card  ms-0 text-white me-0 bg-warning" style="width: 23rem; height:13rem;">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="bi bi-people"></i>
                  </div>
                  <h5 class="card-title">JUMLAH SURAT</h5>
                  <div class="display-4 fw-bold mt-3">
                  <?php 
                        $ambil3 = "SELECT count(*) AS jumlah3 FROM surat";
                        $masuk3 = mysqli_query($conn, $ambil3);
                        $hitung3 = mysqli_fetch_array($masuk3);
                        echo "{$hitung3['jumlah3']}";
                      ?>
                  </div>
                  <a href="surat.php" class="decor"><p class="card-text text-white mt-4">Lihat Detail<i class="bi bi-chevron-double-right ms-2"></i></p></a>
                </div>
            </div>

            
            <div class="card  bg-secondary jarak-card" style="width: 23rem; height:13rem;">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="bi bi-people"></i>
                  </div>
                  <h5 class="card-title">JUMLAH BLOG</h5>
                  <div class="display-4 fw-bold mt-3">
                  <?php 
                        $ambil3 = "SELECT count(*) AS jumlah3 FROM blog";
                        $masuk3 = mysqli_query($conn, $ambil3);
                        $hitung3 = mysqli_fetch_array($masuk3);
                        echo "{$hitung3['jumlah3']}";
                      ?>
                  </div>
                  <a href="blog.php" class="decor"><p class="card-text text-white mt-4">Lihat Detail<i class="bi bi-chevron-double-right ms-2"></i></p></a>
                </div>
            </div>

            <div class="card text-white bg-dark jarak-card" style="width: 23rem; height:13rem;">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="bi bi-people"></i>
                  </div>
                  <h5 class="card-title">JUMLAH USER</h5>
                  <div class="display-4 fw-bold mt-3">
                  <?php 
                        $ambil3 = "SELECT count(*) AS jumlah3 FROM users";
                        $masuk3 = mysqli_query($conn, $ambil3);
                        $hitung3 = mysqli_fetch_array($masuk3);
                        echo "{$hitung3['jumlah3']}";
                      ?>
                  </div>
                  <!-- <a href="blog.php" class="decor"><p class="card-text text-white mt-4">Lihat Detail<i class="bi bi-chevron-double-right ms-2"></i></p></a> -->
                </div>
            </div>

          </div> 
          <!-- Konten Dashboard Selesai -->
        </div>
      </div>
    </section>
    <!-- Isi Website Selesai -->

    <!-- Boostrap JavaScript -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Tooltips -->
    <script>
      var tooltipTriggerList = [].slice.call(
        document.querySelectorAll('[data-bs-toggle="tooltip"]'),
      )
      var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
      })
    </script>

    <script>
      /* global bootstrap: false */
      (function () {
        'use strict'
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        tooltipTriggerList.forEach(function (tooltipTriggerEl) {
          new bootstrap.Tooltip(tooltipTriggerEl)
        })
      })()
    </script>
  </body>
</html>
