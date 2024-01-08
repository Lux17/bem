<?php
    
    require 'function.php';

    $idblog = $_GET["id"];

    if (hapus_blog($idblog) > 0) {
        echo "
            <script>
                alert('Data Berhasil Dihapus');
                document.location.href='blog.php';
            </script>
        ";
    } else 
        echo "
            <script>
                alert('Data Gagal Dihapus');
                document.location.href='blog.php';
            </script>
        ";
    
?>