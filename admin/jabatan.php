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
  $jabatan = query("SELECT*FROM jabatan ORDER BY idjabatan ASC");

  // Jika tombol cari di klik
  if (isset($_POST["cari"])) {
    $jabatan = cari_jabatan($_POST["keyword"]);
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



    <title>Pendataan Pengurus BEM FT</title>
  </head>

  <body>
    <!-- Membuat Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container"> 
        <a class="navbar-brand" href="#">BEM FT UMC</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          
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
               <a class="nav-link text-white rounded" aria-current="page" href="dashboard.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Dashboard"> Dashboard</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white rounded" href="pengurus.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tampil Data Pengurus"> Data Pengurus</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white rounded" href="bidang.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tampil Data Bidang"> Data Bidang</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white rounded sidebar-active" href="jabatan.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tampil Data Jabatan"> Data Jabatan</a><hr class="bg-secondary">
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
              <a class="nav-link text-white rounded" href="blog.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Buat Blog"> Buat Blog</a><hr class="bg-secondary">
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
           <h3><i class="bi bi-people icon"></i> Data Jabatan</h3><hr>
          
          <div class="row ms-1 me-0 pe-0 text-white">
            <div class="card bg-success" style="width: 30rem; height:13rem;">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="bi bi-people icon"></i>
                  </div>
                  <h5 class="card-title">JUMLAH Jabatan</h5>
                  <div class="display-4 fw-bold mt-3">
                    <?php 
                      $ambil = "SELECT count(*) AS jumlah FROM jabatan";
                      $masuk = mysqli_query($conn, $ambil);
                      $hitung = mysqli_fetch_array($masuk);
                      echo "{$hitung['jumlah']}";
                    ?>
                  </div>
                </div>
            </div>

              <div class="input-group mb-3 ms-0 ps-0 mt-3">
                <form action="" method="POST" class="row g-3">
                  <div class="col-auto">
                    <input type="text" class="form-control" placeholder="Masukkan kata kunci..." name="keyword" autocomplete="off" size="130">
                  </div>
                  <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3 px-5" name="cari" >Cari</button>
                  </div>
                </form> 
              </div>

              <div class="row">
                <table class="table table-striped table-hover col-auto table-bordered border-dark">
                  <thead class="table-dark">
                    <tr class="text-center">
                      <th width="50">No.</th>
                      <th>Idjabatan</th>
                      <th>Jabatan</th>
                    </tr>
                  </thead>
                  
                  <!-- Membuat nomor -->
                  <?php $i=1;?>
                  <?php  foreach ($jabatan as $team) :?>

                  <tbody>
                    <tr>
                      <td class="text-center"><?php echo $i; ?></td>
                      <td><?php echo $team["idjabatan"];?></td>
                      <td><?php echo $team["jabatan"];?></td>
                    </tr>
                  </tbody>
                  <?php  $i++?>
                  <?php endforeach;?>
                </table>
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
