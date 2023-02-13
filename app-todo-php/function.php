<?php
//koneksi ke php

$conn2 = mysqli_connect("localhost","root","","jidan");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;
        //ambil data dari setiap elemen dalam form
        $Kode = $data["kode"];
        $Nama = $data["nama"];
        $Deskripsi = $data["deskripsi"];
        $Harga = $data["harga"];

        //query insert data
        $query = "INSERT INTO produk VALUES('$Kode','$Nama','$Deskripsi','$Harga')";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);

}

function hapus($Kode) {
    global $conn;
    mysqli_query($conn, "DELETE FROM produk WHERE Kode = $Kode");

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;
        //ambil data dari setiap elemen dalam form
        $Kode = $data["kode"];
        $Nama = $data["nama"];
        $Deskripsi = $data["deskripsi"];
        $Harga = $data["harga"];

        //query update data
        $query = "UPDATE produk SET 
                  Kode = '$Kode',
                  Nama = '$Nama',
                  Deskripsi = '$Deskripsi',
                  Harga = '$Harga'
                  WHERE Kode = $Kode";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);

}

function registrasi($data) {
    global $conn2;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn2,$data["password"]);
    $password2 = mysqli_real_escape_string($conn2,$data["password2"]);

    //Cek konfirmasi password
    if( $password !== $password2 ) {    
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
              </script>";
        return false;
    }
    
    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //cek username sudah ada tau belum
    $result = mysqli_query($conn2, "SELECT username FROM user WHERE username = '$username'");

    if( mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah terdaftar!')
             </script>";
        return false;
    }
    //tambahkan user baru ke database
    mysqli_query($conn2,"INSERT INTO user VALUES('','$username','$password')");
    return mysqli_affected_rows($conn2);
}
?>