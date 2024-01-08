<?php
    
    require 'function.php';

    $id_surat = $_GET["id_surat"];

    if (hapus_surat($id_surat) > 0) {
        echo "
            <script>
                alert('Data Berhasil Dihapus');
                document.location.href='tambah_surat.php';
            </script>
        ";
    } else 
        echo "
            <script>
                alert('Data Gagal Dihapus');
                document.location.href='tambah_surat.php';
            </script>
        ";
    
?>