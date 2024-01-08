<?php

include 'function.php';
session_start();	

    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $tgl = isset($_POST['date']) ? $_POST['date'] : '';	
    $file = isset($_POST['file']) ? $_POST['file'] : '';	
    $description= isset($_POST['description']) ? $_POST['description'] : '';

    $query = "INSERT INTO blog VALUES('','$title','$description','$tgl', '$file')";
    $result = mysqli_query($conn, $query);
    
    
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($conn).
                                           " - ".mysqli_error($conn));
    } else {                      
    echo "<script>alert('Data berhasil ditambah.');window.location='../admin/blog.php';</script>";
    }

// if($_POST['submit']){
// // File upload path
//     $targetDir = "uploads/";
//     $fileName = basename($_FILES["file"]["name"]);
//     $targetFilePath = $targetDir . $fileName;
//     $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);




    
// }


// if (isset($_POST['submit']) && isset($_FILES['my_image'])) {





// 	if ($error === 0) {
// 		if ($img_size > 125000) {
// 			$em = "Sorry, your file is too large.";
// 		    header("Location: index.php?error=$em");
// 		}else {
// 			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
// 			$img_ex_lc = strtolower($img_ex);

// 			$allowed_exs = array("jpg", "jpeg", "png"); 

// 			if (in_array($img_ex_lc, $allowed_exs)) {
// 				

// 				// Insert into Database
// 				$sql = "INSERT INTO blog(image) 
// 				        VALUES('$new_img_name')";
// 				mysqli_query($kon, $sql);
// 				header("Location: ../blog.php");
// 			}else {
// 				$em = "You can't upload files of this type";
// 		        header("Location: ../blog.php?error=$em");
// 			}
// 		}
// 	}else {
// 		$em = "unknown error occurred!";
// 		header("Location: ../blog.php?error=$em");
// 	}

// }else {
// 	header("Location: ../blog.php");
// }


echo($_FILES['file']['errors']);