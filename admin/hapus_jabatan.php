<?php
    
    require 'function.php';

    $idjabatan = $_GET["idjabatan"];

    if (hapus_jabatan($idjabatan) > 0) {
        echo "
            <script>
                alert('Data Berhasil Dihapus');
                document.location.href='tambah_jabatan.php';
            </script>
        ";
    } else 
        echo "
            <script>
                alert('Data Gagal Dihapus');
                document.location.href='tambah_jabatan.php';
            </script>
        ";
    
?>