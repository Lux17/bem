<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'function.php';

	// membuat variabel untuk menampung data dari form
  $id = isset($_POST['id']) ? $_POST['id'] : '';
  $title = isset($_POST['title']) ? $_POST['title'] : '';
  $tgl = isset($_POST['date']) ? $_POST['date'] : '';	
  $file = isset($_POST['file']) ? $_POST['file'] : '';
  $description = isset($_POST['description']) ? $_POST['description'] : '';


 
 
  $query  = "UPDATE blog SET title = '$title', description = '$description', date = '$tgl', image='$file'";
  $query .= "WHERE id = '$id'";
  $result = mysqli_query($conn, $query);
                    // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($conn).
                                         " - ".mysqli_error($conn));
  } else {                      
  echo "<script>alert('Data berhasil diubah.');window.location='../admin/blog.php';</script>";
  }
              

 