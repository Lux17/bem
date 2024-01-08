<?php
    // Koneksi ke database
    $conn = mysqli_connect('localhost', 'root', '', 'bemft');



    // Fungsi query
    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }
    // Fungsi query selesai



    // Fungsi Cari Pengurus
    function cari_pengurus($keyword) {
        $query = "SELECT*FROM pengurus
                    WHERE 
                  idpengurus LIKE '%$keyword%' OR
                  nama_lengkap LIKE '%$keyword%' OR
                  nim LIKE '%$keyword%' OR
                  prodi LIKE '%$keyword%' OR
                  semester LIKE '%$keyword%'OR
                  jabatan LIKE '%$keyword%'OR
                  bidang LIKE '%$keyword%'
                ";
        return query($query);
    }
    // Fungsi Cari Anggota Selesai



    // Fungsi Cari Bidang
    function cari_bidang($keyword) {
        $query = "SELECT*FROM bidang
                    WHERE
                    idbidang LIKE '%$keyword%'OR
                    bidang LIKE '%$keyword%'
                ";
        return query($query);
    }
    // Fungsi Cari Bidang Selesai



    // Fungsi Cari Jabatan
    function cari_jabatan($keyword) {
        $query = "SELECT*FROM jabatan
                    WHERE
                    idjabatan LIKE '%$keyword%'OR
                    jabatan LIKE '%$keyword%'
                ";
        return query($query);
    }
    // Fungsi Cari Jabatan Selesai



    // Fungsi Tambah Pengurus
    function tambah_pengurus($data) {
        global $conn;
        $idpengurus = htmlspecialchars($data["idpengurus"]);
        $nama_lengkap = htmlspecialchars($data["nama_lengkap"]);
        $nim = htmlspecialchars($data["nim"]);
        $prodi = htmlspecialchars($data["prodi"]);
        $semester = htmlspecialchars($data["semester"]);
        $jabatan = htmlspecialchars($data["jabatan"]);
        $Bidang = htmlspecialchars($data["bidang"]);
        

        $query = "INSERT INTO pengurus
                    VALUES
                   ('$idpengurus', '$nama_lengkap', '$nim', '$prodi', '$semester', '$jabatan', '$Bidang')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
    // Fungsi Tambah Pengurus Selesai



    // Fungsi Tambah Bidang
    function tambah_bidang($data) {
        global $conn;
        $idbidang = htmlspecialchars($data["idbidang"]);
        $bidang = htmlspecialchars($data["bidang"]);

        $query = "INSERT INTO bidang
                    VALUES
                   ('$idbidang', '$bidang')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
    // Fungsi Tambah Bidang Selesai



    // Fungsi Tambah Jabatan
    function tambah_jabatan($data) {
        global $conn;
        $idjabatan = htmlspecialchars($data["idjabatan"]);
        $jabatan = htmlspecialchars($data["jabatan"]);

        $query = "INSERT INTO jabatan
                    VALUES
                   ('$idjabatan', '$jabatan')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
    // Fungsi Tambah Jabatan Selesai



    // Fungsi Edit Pengurus
    function edit_pengurus($data) {
        global $conn;
        $idpengurus = $data["idpengurus"];
        $nama_lengkap = htmlspecialchars($data["nama_lengkap"]);
        $nim = htmlspecialchars($data["nim"]);
        $prodi = htmlspecialchars($data["prodi"]);
        $semester = htmlspecialchars($data["semester"]);
        $jabatan = htmlspecialchars($data["jabatan"]);
        $Bidang = htmlspecialchars($data["bidang"]);

        $query = "UPDATE pengurus SET
                    idpengurus = '$idpengurus',
                    nama_lengkap = '$nama_lengkap',
                    nim = '$nim',
                    prodi = '$prodi',
                    semester = '$semester',
                    jabatan = '$jabatan',
                    bidang = '$Bidang'
                  WHERE idpengurus = '$idpengurus'
                ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);

    }
    // Edit Pengurus Selesai



    // Fungsi Edit Bidang
    function edit_bidang($data) {
        global $conn;
        $idbidang = $data["idbidang"];
        $Bidang = htmlspecialchars($data["bidang"]);

        $query = "UPDATE bidang SET
                    bidang = '$Bidang'
                  WHERE idbidang = '$idbidang'
                ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);

    }
    // Edit Bidang Selesai



    // Fungsi Edit Jabatan
    function edit_jabatan($data) {
        global $conn;
        $idjabatan = $data["idjabatan"];
        $jabatan = htmlspecialchars($data["jabatan"]);

        $query = "UPDATE jabatan SET
                    jabatan = '$jabatan'
                  WHERE idjabatan = '$idjabatan'
                ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);

    }
    // Edit Jabatan Selesai



    // Fungsi Hapus Pengurus
    function hapus_pengurus($idpengurus) {
        global $conn;
        mysqli_query($conn, "DELETE FROM pengurus WHERE idpengurus=$idpengurus");

        return mysqli_affected_rows($conn);
    }
    // Hapus Pengurus Selesai



    // Fungsi Hapus Bidang
    function hapus_bidang($idbidang) {
        global $conn;
        mysqli_query($conn, "DELETE FROM bidang WHERE idbidang=$idbidang");

        return mysqli_affected_rows($conn);
    }
    // Hapus Section Selesai



    // Fungsi Hapus Jabatan
    function hapus_jabatan($idjabatan) {
        global $conn;
        mysqli_query($conn, "DELETE FROM jabatan WHERE idjabatan=$idjabatan");

        return mysqli_affected_rows($conn);
    }
    // Hapus Jabatan Selesai
?>