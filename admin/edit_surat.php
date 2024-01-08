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
  $id_surat = $_GET["id_surat"];

  $surat = query("SELECT*FROM surat WHERE id_surat = $id_surat") [0];

  // Jika tombol submit ditekan
  if (isset($_POST["submit"])) {
    // Jika fungsi registrasi berhasil
    if (edit_surat($_POST) > 0) {
      echo "
        <script>
          alert('surat Berhasil Diubah');
          document.location.href='tambah_surat.php';
        </script>
      ";
      } else {
        echo "<script>
               alert('surat Gagal Diubah!');
               document.location.href='tambah_surat.php';
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

    <title>Pendataan Surat BEM FT UMC</title>
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
                <a class="nav-link active" aria-current="page" href="tambah_surat.php"><i class="bi bi-arrow-right-circle fs-4 icon-2 text-center ps-0 pe-0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Kembali"></i></a>
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
              <a class="nav-link text-white rounded sidebar-active" href="tambah_surat.php" > Edit Data surat</a><hr class="bg-secondary">
            </li>
          </ul>
        </div>
        <!-- Sidebar Selesai -->

        <!-- Membuat Isi Website -->
        <div class="col-sm-10 pt-5 content-icon">
          <!-- Membuat Konten Dashboard -->
          <h3><i class="bi bi-person-plus icon"></i> Edit Data surat</h3><hr>
          
          <div class="row me-0 pe-0">
            <form action="" method="post">

              <div class="mb-3">
                <label for="id_surat" class="form-label d"> Id surat :</label>
                <input type="hidden" class="form-control" id="id_surat" name="id_surat"  value="<?php echo $surat['id_surat']?>" require>
              </div>

              <div class="mb-3">
                <label for="no_surat" class="form-label d">No Surat :</label>
                <input type="text" class="form-control" id="no_surat" name="no_surat" value="<?php echo $surat['no_surat']?>" require>
              </div>

              
              
              <div class="mb-3">
                <label for="perihal" class="form-label d">Perihal :</label>
                <select id="perihal" class="form-control" name="perihal" required="">
                <option selected value="<?php echo $surat['perihal']?>"><?php echo $surat['perihal']?></option>
                <option value="Undangan">Undangan</option>
                                <option  value="Peminjaman Sarana dan Prasarana">Peminjaman Sarana dan Prasarana </option>
                                <option  value="Peminjaman Alat">Peminjaman Alat</option>
                                <option  value="Pemberitahuan Acara">Pemberitahuan Acara</option>
                                <option value="Surat Keterangan Aktif Kegiatan Mahasiswa">Surat Keterangan Aktif Kegiatan Mahasiswa</option>
                                <option  value="Permohonan Menjadi Pemateri">Permohonan Menjadi Pemateri</option>
                                <option value="Surat Dispensasi">Surat Dispensasi</option>
                                <option  value="Surat Izin">Surat Izin</option>
                                <option value="Permohonan Delegasi ">Permohonan Delegasi</option>
                                <option value="Permohonan Kerja Sama(Sponsorship)">Permohonan Kerja Sama(Sponsorship)</option>
                                <option value="Permohonan Bantuan Dana">Permohonan Bantuan Dana</option>
                                <option  value="Peringatan pertama (SP-1)">Peringatan Pertama (SP-1)</option>
                                <option  value="Peringatan Kedua(SP-2)">Peringatan Kedua(SP-2)</option>
                                <option  value="Peringatan Ketiga(SP-3)">Peringatan Ketiga(SP-3)</option>
                                <option  value="Permohonan SK">Permohonan SK</option>
                                <option  value="Pemberitahuan Pengunduran Acara">Pemberitahuan Pengunduran Acara</option>
                                <option value="Pernyataan Pengunduran Diri">Pernyataan Pengunduran Diri</option>
                                <option  value="Permohonan Juri">Permohonan Juri</option>
                                <option  value="Undangan Penutupan Kegiatan ">Undangan Penutupan Kegiatan </option>
                  </select>
                  </div>

              <div class="mb-3">
                <label for="kepada" class="form-label d">  Kepada :</label>
                <input type="text" class="form-control" id="kepada" name="kepada" value="<?php echo $surat['kepada']?>" require>
              </div>

              <div class="mb-3">
                <label for="tujuan" class="form-label d"> Tujuan :</label>
                <!-- <input type="text" class="form-control" id="jabatan" name="jabatan" require> -->
                <input type="text" class="form-control" id="tujuan" name="tujuan" value="<?php echo $surat['tujuan']?>" require>
              </div>

              <div class="mb-3">
                <label for="jenis" class="form-label d"> Jenis :</label>
                <select name="jenis" id="jenis" class="form-control" required="">
                <option selected value="<?php echo $surat['jenis']?>"><?php echo $surat['jenis']?></option>
                <option value="Surat Masuk">Surat Masuk</option>
                <option  value="Surat Keluar">Surat Keluar</option>
                </select>
              </div>


              <button type="submit" class="btn btn-primary mb-4" name="submit">Simpan</button>
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
