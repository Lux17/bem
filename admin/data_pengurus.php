<table border="1">
    <tr bgcolor="#e5e5e5">
    <th>No</th>
                                            <td>ID Pengurus</td>
                                            <td>Nama</td>
                                            <td>NIM</td>
                                            <td>Prodi</td>
                                            <td>Semester</td>
                                            <td>Jabatan</td>
                                            <td>Bidang</td>
    </tr>
    <?php
        include "function.php";
        $no=0;
        $query    =mysqli_query($conn, "SELECT * FROM pengurus ORDER BY idpengurus ASC");
        while($row =mysqli_fetch_array($query)){
        $no++
    ?>
    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $row['idpengurus']; ?></td>
                                        <td><?php echo $row['nama_lengkap']; ?></td>
                                        <td><?php echo $row['nim']; ?></td>
                                        <td><?php echo $row['prodi']; ?></td>
                                        <td><?php echo $row['semester']; ?></td>
                                        <td><?php echo $row['jabatan']; ?></td>
                                        <td><?php echo $row['bidang']; ?></td>
    </tr>
    <?php
        }
    ?>
</table>