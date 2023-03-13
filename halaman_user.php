<?php 
require 'koneksi.php';
session_start();
if(!isset($_SESSION['level'])){
    header("location: login.php");
    
}

function rupiah($angka){
    $hasil = "Rp" . number_format($angka, '2', ',', '.');
    return $hasil;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DATA BUKU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container" style="margin-top: 80px">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                <div class="card">
                 
                    <div class="card-header text-center fw-bold">
                        DATA BUKU
                    </div>
                    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <?php if($_SESSION['level'] == 'admin') {?>                  
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="halaman_admin.php">USER PAGE</a>
                            </li>
                            <?php }?>
                        
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="halaman_user.php">BOOK PAGE</a>
                            </li>

                           
                        </div>
                    </div>
                    </nav>
                    <div class="card-body">
                        <a href="logout.php" class="btn btn-danger mb-2 " style="float: right">LOGOUT</a>
                        <a href="tambah_buku.php" class="btn btn-success mb-2 ">TAMBAH BUKU</a>
                    <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                        <th scope="col">NAMA BUKU</th>
                        <th scope="col">PENGARANG BUKU</th>
                        <th scope="col">JUMLAH BUKU</th>
                        <th scope="col">HARGA JUAL</th>
                        <th scope="col">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        require 'koneksi.php';
                        $no = 1;
                        $query = mysqli_query($koneksi, "SELECT * FROM data_buku ");
                        while($row = mysqli_fetch_array($query)) :
                        
                        ?>
                        <tr>
                        <td><?= $row['nama_buku']?></td>
                        <td><?= $row['pengarang']?></td>
                        <td><?= $row['jumlah']?></td>
                        <td><?= rupiah($row['hargajual'])?></td>
                        <td>
                            <a href="edit_buku.php?id=<?= $row['id_buku']?>" class="btn btn-warning">EDIT</a>
                            <a href="delete_buku.php?id=<?= $row['id_buku']?>" class="btn btn-danger">HAPUS</a>
                        </td>
                       
                        </tr>

                       <?php endwhile ?>
                    </tbody>
                    </table>
                    

                    </div>
                    </div>
                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

