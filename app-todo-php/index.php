<?php
   
require 'koneksi.php';
include 'proses.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Produk</title>
</head>
<body>
        <h2 class="text-center">PRODUK</h2>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>  
                </tr>
            </thead>
            <tbody>
                <?php
                $query = mysqli_query($koneksi, "SELECT * FROM trypwpb");
                $no = 1;
                $jumlah = mysqli_num_rows($query);
                while ($data = mysqli_fetch_assoc($query)){
                    $Kode = $data['kode'];
                    $Nama = $data['nama'];
                    $Deskripsi = $data['deskripsi'];
                    $Harga = $data['harga'];
                
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $Kode ?></td>
                    <td><?= $Nama ?></td>
                    <td><?= $Deskripsi ?></td>
                    <td><?= $Harga ?></td>
                    <td>
                     <form method="post">
                       <input type="hidden" name="Kode" value="<?= $Kode ?>">
                         <button name="hapus" class="btn btn-danger">Delete</button>
                           <a href="update.php?Kode=<?= $Kode ?>" button class="btn btn-primary">Edit</a></button>
                        </form>
                    </tr>
                    <?php }?>
            </tbody>
            </table>
            Jumlah Produk = <?= $jumlah ?>
            <br>
            <a href="tambah.php">
            <button class="btn btn-primary">Tambah Produk</button>
            </a>
            
</body>
</html>

