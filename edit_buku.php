<?php 


require 'koneksi.php';

$id = $_GET['id'];

$query = "SELECT * FROM data_buku WHERE id_buku = $id LIMIT 1";

$result = mysqli_query($koneksi, $query);

$row = mysqli_fetch_array($result);


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TAMBAH USER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
            <div class="card">
            <div class="card-header">
                EDIT SISWA
            </div>
            <div class="card-body">
            <form action="update_buku.php" method="post" >
                <div class="form-group">
                    <label for="nama" class="form-label">Nama Buku</label>
                    <input type="text" class="form-control" name="nama" value="<?= $row['nama_buku']?>"id="nama" placeholder="Nama" autocomplete="off">
                    <input type="hidden" name="id" value="<?= $row['id_buku']?>">
                </div>    

                <div class="form-group">    
                    <label for="pengarang" class="form-label">Pengarang</label>
                    <input type="pengarang" class="form-control" name="pengarang" value="<?= $row['pengarang']?>" id="pengarang" placeholder="Pengarang" autocomplete="off">
                </div>  

                <div class="form-group">
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="text" class="form-control" name="jumlah"  value="<?= $row['jumlah']?>" id="jumlah" placeholder="Jumlah" autocomplete="off">
                </div>

                <div class="form-group">
                    <label for="hargajual" class="form-label">Harga Jual</label>
                    <input type="hargajual" class="form-control" name="hargajual"  value="<?= $row['hargajual']?>" id="hargajual" placeholder="Harga JUal" autocomplete="off">
                </div>
                <button type="submit" class="btn btn-success mt-2" name=submit>UPDATE</button>



                
            </form>    
            </div>
            </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>