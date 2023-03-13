<?php 

require 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$pengarang = $_POST['pengarang'];
$jumlah = $_POST['jumlah'];
$hargajual = $_POST['hargajual'];


mysqli_query($koneksi, "UPDATE data_buku SET nama_buku='$nama', pengarang='$pengarang', jumlah='$jumlah', hargajual='$hargajual' WHERE id_buku='$id'");


header("location:halaman_user.php");


?>