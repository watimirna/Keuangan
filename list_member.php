<!DOCTYPE html>
<html>
<head>
    <title>List Member</title>
</head>
<body>
    <h2>Pemograman 3 2023</h2>
    <br>
    <a href="../Home.html">Home</a>
    <br>
    <a href="tambah_member.php">+ Tambah Member</a>
    <br>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Nama Member</th>
            <th>Level</th>
        </tr>
        <?php
                include 'koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi,"select * from member");
                while($d = mysqli_fetch_array($data)){
            ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['nama_member']; ?></td>
            <td><?php echo $d['level']; ?></td>
            <td>
                <a href="edit_penjualan.php?id=<?php echo $d['id_member']; ?>">Edit</a>
                <a href="hapus_penjualan.php?id=<?php echo $d['id_member']; ?>">Hapus</a>
            </td>
        </tr>
        <?php
                }
                ?>
    </table>
</body>
</html>