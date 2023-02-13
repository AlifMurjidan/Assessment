<?php

require 'koneksi.php';
include 'proses.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Produk</title>
</head>
<body>
    <div class=".container-sm">
        <?php
        if (isset($_POST['add'])){
            if($_POST['add']=='berhasil'){
                echo "='alert alert-success'>Tambah Data Produk Berhasil";
            }elseif($_GET['add']=='gagal'){
                echo "='alert alert-danger'>Tambah Data Produk Gagal";
            }
            }
        ?>
        <h2>Form Tambah Produk</h2>
        <form method="post">
            <br>
                 <h6>Nama  :</h6>
                <input type="text" name="nama" required>
            </br>
            <br>
                 <h6>Deskripsi  :</h6>
                <input type="text" name="deskripsi"required>
            </br>
            <br>
                 <h6>Harga  :</h6>
                <input type="text" name="harga"required>
            </br>
            <br></br>
            <button type="submit" class="btn btn-primary" name="add">Tambah Produk</button>
        </form>
             <a href="index.php">
                 <button class="btn btn-danger">Kembali</button>
             </a>
    </div>
</body>
</html>

