<?php
    
    require 'function.php';

    $idpengurus = $_GET["idpengurus"];

    if (hapus_pengurus($idpengurus) > 0) {
        echo "
            <script>
                alert('Data Berhasil Dihapus');
                document.location.href='tambah_pengurus.php';
            </script>
        ";
    } else 
        echo "
            <script>
                alert('Data Gagal Dihapus');
                document.location.href='tambah_pengurus.php';
            </script>
        ";
    
?>