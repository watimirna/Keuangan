<!DOCTYPE html>
<html>
<head>
    <title>Tambah Barang</title>
</head>
<?php
    //Koneksi database
    include 'koneksi.php';
    //Menangkap data yang dikirim dari form 
    if(!empty($_POST['save'])){ //Jika ada kiriman dari 'save' maka jalankan :
        $Nama = $_POST['nama_barang'];
        $Kode = $_POST['kode_barang'];
        $Qty = $_POST['qty'];
        $Kategori = $_POST['id_kategori'];
        //menginput data ke database
        $a = mysqli_query($koneksi,"insert into barang values('','$Nama','$Kode','$Qty','$Kategori')");
        if($a){
            //mengalihkan halaman kembali
            header("location:list_barang.php");
        }else{
            echo mysqli_error();
        }
    }
?>
<body>
    <h2>Pemograman 3 2023</h2>
    <br>
    <a href="list_barang.php">Kembali</a>
    <br><br>
    <h3>TAMBAH DATA BARANG</h3>
    <form method="POST">
        <table>
            <tr>
                <td>Nama Barang</td>
                <td><Input type="text" name="nama_barang"></td>
            </tr>
            <tr>
                <td>Kode Barang</td>
                <td><input type="text" name="kode_barang"></td>
            </tr>
            <tr>
                <td>Qty</td>
                <td><input type="number" name="qty"></td>
            </tr>
            <tr>
                <td>Id Kategori</td>
                <td><input type="number" name="id_kategori"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="save"></td>
            </tr>
        </table>
    </form>
</body>
</html>