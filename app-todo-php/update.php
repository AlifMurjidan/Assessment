<?php

require 'koneksi.php';
include 'proses.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Data Produk</title>
</head>
<body>
    <div class=".container-sm">
        <?php
        if(isset($_POST['edit'])){
            if($_POST['edit']=='berhasil'){
                echo "<div class='alert alert-success'>Ubah Data Produk Berhasil</div>";
            }else if($_GET['edit']=='gagal'){
                echo "<div class='alert alert-danger'>Ubah Data Produk Gagal</div>";
            }
        }
        ?>
        <h3 type class="text-center">From Ubah Data Produk</h3>
        <?php
        $Kode = $_GET['Kode'];
        $query = mysqli_query($koneksi, "SELECT * FROM trypwpb WHERE Kode=$Kode");
        while ($data = mysqli_fetch_array($query)){
            $Kode = $data['kode'];
            $Nama = $data['nama'];
            $Deskripsi = $data['deskripsi'];
            $Harga = $data['harga'];
        }
        ?>
        <form method="post">
            <br>
                 <h6> Kode  :</h6>
                <input type="text" value="<?= $Kode ?>" name="kode">
            </br>
            <br>
                 <h6>Nama  :</h6>
                <input type="text" value="<?= $Nama ?>" name="nama" required>
            </br>
            <br>
                 <h6>Deskripsi  :</h6>
                <input type="text" value="<?= $Deskripsi ?>" name="deskripsi" required>
            </br>
            <br>
                 <h6>Harga  :</h6>
                <input type="text" value="<?= $Harga ?>" name="harga" required>
            </br>
            <br></br>
            <button type="submit" class="btn btn-primary" name="edit">Ubah Data Produk</button>
        </form>
             <a href="index.php">
                 <button class="btn btn-danger">Kembali</button>
             </a>
</body>
</html>

