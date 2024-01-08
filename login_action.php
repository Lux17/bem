<?php
session_start();	
include "function.php";

// pemeriksaan menggunakan fungsi isset()
$username = isset($_POST['username']) ? $_POST['username'] : '';
// pemeriksaan menggunakan fungsi empty()
$password = isset($_POST['password']) ? md5($_POST['password']) : '';

$sql = "select * from users where username='$username' and password='$password'";
$hasil = mysqli_query ($conn,$sql);
$jumlah = mysqli_num_rows($hasil);


if($jumlah > 0){
 
	$data = mysqli_fetch_assoc($hasil);

 // cek jika user login sebagai admin
 if($data['rolename']=="admin"){

	$_SESSION['idusers'] = $data_user['id'];
	$_SESSION['username'] = $username;
	$_SESSION['rolename'] = $rolename;
	$_SESSION['status'] = "login";
	setcookie('ceadmin', 'asjbmbnsugaldsks22', time() + 24 * 3600);
	header("Location:admin/dashboard.php");


 }else{

	 // alihkan ke halaman login kembali

	 header("location:masuk.php?pesan=gagal");
	}	
}else{
	header("location:masuk.php?pesan=gagal");
}
?>
