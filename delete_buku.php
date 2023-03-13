<?php 

require 'koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM data_buku WHERE id_buku='$id'";

if($koneksi->query($query)){
    header("location: halaman_user.php");
}else{
    echo "data gagal dihapus";
}
?>