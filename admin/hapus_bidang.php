<?php
    
    require 'function.php';

    $idbidang = $_GET["idbidang"];

    if (hapus_bidang($idbidang) > 0) {
        echo "
            <script>
                alert('Data Berhasil Dihapus');
                document.location.href='tambah_bidang.php';
            </script>
        ";
    } else 
        echo "
            <script>
                alert('Data Gagal Dihapus');
                document.location.href='tambah_bidang.php';
            </script>
        ";
    
?>