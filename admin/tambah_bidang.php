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
  $bidang = query("SELECT*FROM bidang ORDER BY idbidang DESC");

  // Jika tombol submit ditekan
  if (isset($_POST["submit"])) {
    // Jika fungsi registrasi berhasil
    if (tambah_bidang($_POST) > 0) {
      echo "
        <script>
          alert('Bidang Berhasil Ditambahkan');
          document.location.href='tambah_bidang.php';
        </script>
      ";
      } else {
        echo "<script>
               alert('Bidang Gagal Ditambahkan!');
              </script>";
      }
    }

  // Jika tombol cari di klik
  if (isset($_POST["cari"])) {
    $bidang = cari_bidang($_POST["keyword"]);
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
              <a class="nav-link text-white rounded " href="pengurus.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tampil Data Pengurus"> Data Pengurus</a><hr class="bg-secondary">
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
              <a class="nav-link text-white rounded" href="tambah_pengurus.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tambah atau Edit Data Pengurus">Edit Data Pengurus</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white rounded  sidebar-active" href="tambah_bidang.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tambah atau Edit Data Bidang"> Edit Data Bidang</a><hr class="bg-secondary">
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
          <h3><i class="bi bi-person-plus icon"></i> Tambah Data Bidang</h3><hr>
          
          <div class="row me-0 pe-0">
            <form action="" method="POST">
            <div class="mb-3">
                <label for="idbidang" class="form-label d"> Idbidang :</label>
                <input type="text" class="form-control" id="idbidang" name="idbidang">
              </div>

              <div class="mb-3">
                <label for="bidang" class="form-label d"> Bidang :</label>
                <input type="text" class="form-control" id="bidang" name="bidang">
              </div>
              <button type="submit" class="btn btn-primary mb-5" name="submit">Submit</button>
            </form>
          </div>

          <div class="input-group mt-3 mb-2 ms-0 ps-0">
            <form action="" method="POST" class="row g-3">
              <div class="col-auto">
                <input type="text" class="form-control" placeholder="Masukkan kata kunci..." name="keyword" autocomplete="off" size="130">
              </div>
              <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3 px-5" name="cari" >Cari</button>
              </div>
            </form> 
          </div>

          <div class="row me-3">
            <table class="table table-striped table-hover col-auto table-bordered border-dark">
              <thead class="table-dark">
                <tr class="text-center">
                  <th width="50">No.</th>
                  <th>Idbidang</th>
                  <th>Bidang</th>
                  <th width="100">Aksi</th>
                </tr>
              </thead>
                  
              <!-- Membuat nomor -->
              <?php $i=1;?>
              <?php  foreach ($bidang as $bagian) :?>

              <tbody>
                <tr>
                  <td class="text-center"><?php echo $i; ?></td>
                  <td><?php echo $bagian["idbidang"];?></td>
                  <td><?php echo $bagian["bidang"];?></td>
                  <td class="text-center">
                    <a href="edit_bidang.php?idbidang=<?php echo $bagian["idbidang"];?>" class="bg-success decor text-white ps-1 pt-1 pb-1 me-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                        <i class="bi bi-pencil-square"></i>
                    </a> 
                    <a href="hapus_bidang.php?idbidang=<?php echo $bagian["idbidang"];?>" class="bg-danger decor text-white p-1" onclick="return confirm('Apakah anda yakin data akan dihapus?')" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hapus">
                        <i class="bi bi-trash"></i>
                    </a>
                  </td>
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
