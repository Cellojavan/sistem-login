<?php 


session_start();
if(!isset($_SESSION['level'])){
    header("location: login.php");
}


require 'koneksi.php';

if(isset($_POST['submit'])){
    $nama = $_POST['namabuku'];
    $pengarang = $_POST['pengarang'];
    $jumlah = $_POST['jumlahbuku'];
    $hargajual = $_POST['hargajual'];

    $query = "INSERT INTO data_buku (nama_buku, pengarang, jumlah, hargajual) VALUES ('$nama', '$pengarang', '$jumlah', '$hargajual')";

    if($koneksi->query($query)){
        header("location: halaman_user.php");
    }
}


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
            <div class="card">
            <div class="card-header">
                DATA USER
            </div>
            <div class="card-body">
            <form action="" method="post" >
                <div class="form-group">
                    <label for="nama" class="form-label">Nama buku</label>
                    <input type="text" class="form-control" name="namabuku" id="nama" placeholder="Nama Buku" autocomplete="off">
                </div>    

                <div class="form-group">    
                    <label for="pengarang" class="form-label">Pengarang Buku</label>
                    <input type="text" class="form-control" name="pengarang" id="pengarang" placeholder="Pengarang" autocomplete="off">
                </div>  

                <div class="form-group">
                    <label for="jumlah" class="form-label">Jumlah Buku</label>
                    <input type="text" class="form-control" name="jumlahbuku" id="jumlah" placeholder="Jumlah" autocomplete="off" >
                </div>

                <div class="form-group">
                    <label for="harga" class="form-label">Harga Jual</label>
                    <input type="text" class="form-control" name="hargajual" id="harga" placeholder="Harga" autocomplete="off">
                </div>

                <button type="submit" class="btn btn-success mt-2" name=submit>TAMBAH</button>
            </form>    
            </div>
            </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>