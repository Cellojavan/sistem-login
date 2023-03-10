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
                        <th><?= $row['nama_buku']?></th>
                        <th><?= $row['pengarang']?></th>
                        <th><?= $row['jumlah']?></th>
                        <th><?= rupiah($row['hargajual'])?></th>
                        <th>
                            <td><a href="edit_user.php?id=<?= $row['id_user']?>" class="btn btn-warning">EDIT</a></td>
                        </th>
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

