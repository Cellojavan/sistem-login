<?php 

require 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$kelamin = $_POST['kelamin'];
$password = $_POST['password'];
$level = $_POST['level'];

mysqli_query($koneksi, "UPDATE user SET nama='$nama', email='$email', phone='$nohp', jeniskelamin='$kelamin', passwordd='$password', statuss='$level' WHERE id_user='$id'");


header("location:halaman_admin.php");


?>