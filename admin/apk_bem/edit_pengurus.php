<?php

  require 'function.php';

  $idpengurus = $_GET["idpengurus"];

  $pengurus = query("SELECT*FROM pengurus WHERE idpengurus = $idpengurus") [0];

  // Jika tombol submit ditekan
  if (isset($_POST["submit"])) {
    // Jika fungsi registrasi berhasil
    if (edit_pengurus($_POST) > 0) {
      echo "
        <script>
          alert('Pengurus Berhasil Diubah');
          document.location.href='tambah_pengurus.php';
        </script>
      ";
      } else {
        echo "<script>
               alert('Pengurus Gagal Diubah!');
               document.location.href='tambah_pengurus.php';
              </script>";
      }
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

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="bootstrap_icon/bootstrap-icons.css">

    <title>Pendataan Pengurus BEM FT UMC</title>
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

          <form class="d-flex">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="tambah_pengurus.php"><i class="bi bi-arrow-right-circle fs-4 icon-2 text-center ps-0 pe-0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Kembali"></i></a>
              </li>
            </ul>
          </form>
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
              <a class="nav-link text-white rounded sidebar-active" href="tambah_pengurus.php" ><i class="bi bi-person-plus icon"></i> Edit Data Pengurus</a><hr class="bg-secondary">
            </li>
          </ul>
        </div>
        <!-- Sidebar Selesai -->

        <!-- Membuat Isi Website -->
        <div class="col-sm-10 pt-5 content-icon">
          <!-- Membuat Konten Dashboard -->
          <h3><i class="bi bi-person-plus icon"></i> Edit Data Pengurus</h3><hr>
          
          <div class="row me-0 pe-0">
            <form action="" method="POST">
                <input type="hidden" name="idpengurus" value="<?php echo $pengurus["idpengurus"];?>">

                <div class="mb-3">
                <label for="idpengurus" class="form-label d"> Idpengurus :</label>
                <input type="text" class="form-control" id="idpengurus" name="idpengurus" require>
              </div>

              <div class="mb-3">
                <label for="nama_lengkap" class="form-label d"> Nama :</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" require>
              </div>

              <div class="mb-3">
                <label for="nim" class="form-label d"> Nim :</label>
                <input type="text" class="form-control" id="nim" name="nim" require>
              </div>

             
              <div class="mb-3">
                <label for="prodi" class="form-label d">  Prodi :</label>
                <input type="text" class="form-control" id="prodi" name="prodi" require>
              </div>

              <div class="mb-3">
                <label for="semester" class="form-label d">  Semester :</label>
                <input type="text" class="form-control" id="semester" name="semester" require>
              </div>

              <div class="mb-3">
                <label for="jabatan" class="form-label d"> Jabatan :</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" require>
              </div>

              <div class="mb-3">
                <label for="bidang" class="form-label d"> Bidang :</label>
                <input type="text" class="form-control" id="bidang" name="bidang" require>
              </div>

              <button type="submit" class="btn btn-primary mb-4" name="submit">Submit</button>
            </form>
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
