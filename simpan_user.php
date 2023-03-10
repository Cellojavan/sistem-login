<?php

    

    require 'koneksi.php';

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $tlfn = $_POST['nohp'];
    $kelamin = $_POST['kelamin'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    

    $query = "INSERT INTO user (nama, email, phone, jeniskelamin, passwordd, statuss) VALUES ('$nama', '$email', '$tlfn', '$kelamin', '$password', '$level' )";

if($koneksi->query($query)){
    header("location: halaman_admin.php");
}else{
    echo "data gagal ditambah";
}


?>