<?php 

require 'koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM user WHERE id_user='$id'";

if($koneksi->query($query)){
    header("location: halaman_admin.php");
}else{
    echo "data gagal dihapus";
}
?>