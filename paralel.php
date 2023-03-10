<?php 
require 'koneksi.php';
session_start();
if($_SESSION['level'] == 'admin' ){
    header("location: halaman_admin.php");

}
if($_SESSION['level'] == 'user'){
    header("location: halaman_user.php");

}


?>