<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

    <h2>Download Excel</h2>
    <table border="1">
        <tr><th>NO</th><th>Kecamatan</th><th>Desa</th><th>Fasilitas</th><th>Domain</th><th>Artikel</th><th>Update</th></tr>
        <?php
        include 'koneksi.php';
        $data = mysqli_query($conn, "SELECT * from data");
        $no=1;
        foreach ($data as $row){
            echo "<tr>
            <td>".$row['id']."</td>
            <td>".$row['kecamatan']."</td>
            <td>".$row['desa']."</td>
            <td>".$row['fasilitas']."</td>
            <td>".$row['domian']."</td>
            <td>".$row['artikel']."</td>
            <td>".$row['update']."</td>
            </tr>";
            $no++;
        }
        ?>
    </table>

</body>
</html>