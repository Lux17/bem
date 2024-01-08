<table border="1">
    <tr bgcolor="#e5e5e5">
    <th>No</th>
                                            <td>ID Surat</td>
                                            <td>Nomer Surat</td>
                                            <td>Perihal</td>
                                            <td>Kepada</td>
                                            <td>Tujuan</td>
                                            <td>Jenis</td>
    </tr>
    <?php
        include "function.php";
        $no=0;
        $query    =mysqli_query($conn, "SELECT * FROM surat ORDER BY id_surat ASC");
        while($row =mysqli_fetch_array($query)){
        $no++
    ?>
    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $row["id_surat"];?></td>
                                        <td><?php echo $row["no_surat"];?></td>
                                        <td><?php echo $row["jenis"];?></td>
                                        <td><?php echo $row["perihal"];?></td>
                                        <td><?php echo $row["kepada"];?></td>
                                        <td><?php echo $row["tujuan"];?></td>
    </tr>
    <?php
        }
    ?>
</table>