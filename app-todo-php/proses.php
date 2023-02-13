<?php

if (isset($_POST['add'])){
    $Nama = $_POST['nama'];
    $Deskripsi = $_POST['deskripsi'];
    $Harga = $_POST['harga'];
    
    echo "<script>console.log('$Nama');</script>";

    
    $tambah = mysqli_query($koneksi, "INSERT INTO trypwpb VALUES ('','$Nama','$Deskripsi','$Harga')");
        if ($tambah){
            header("location:tambah.php?add=berhasil");
        }else{
            header("location:tambah.php?add=gagal");
        }
}

if (isset($_POST['hapus'])){
    $Kode = $_POST['Kode'];
    $hapus = mysqli_query($koneksi, "Delete from trypwpb where kode=$Kode");
    if($hapus){
        header("location:index.php?hapus=berhasil");
        }else{  
            header("location:index.php?hapus=gagal");
    }
}

if (isset($_POST['edit'])){
    $Kode = $_POST['kode'];
    $Nama = $_POST['nama'];
    $Deskripsi = $_POST['deskripsi'];
    $Harga = $_POST['harga'];
    $edit = mysqli_query($koneksi, "UPDATE trypwpb SET Nama = '$Nama', Deskripsi = '$Deskripsi', Harga = '$Harga' WHERE trypwpb.Kode=$Kode");
    if($edit){
        header("location:index.php?update=berhasil");
        }else{
            header("location:index.php?update=gagal");
    }



}
?>

