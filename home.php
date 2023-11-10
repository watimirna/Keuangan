<!DOCTYPE html>
<html>
<head>
    <title>Menu Pilihan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        h1 {
            text-align: center;
        }

        ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }

        li {
            margin: 10px;
            display: inline;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        a:hover {
            background-color: #2e86c1;
        }
    </style>
</head>
<body>
    <h1>Silakan Pilih Menu:</h1>
    <ul>
        <li><a href="list_barang.php">List Barang</a></li>
        <li><a href="list_kategori.php">List Kategori</a></li>
        <li><a href="list_member.php">List Member</a></li>
        <li><a href="list_transaksi.php">List Transaksi</a></li>
        <li><a href="logout.php">Keluar</a></li>
    </ul>
</body>
</html>
