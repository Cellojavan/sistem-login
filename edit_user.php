<?php 


require 'koneksi.php';

$id = $_GET['id'];

$query = "SELECT * FROM user WHERE id_user = $id LIMIT 1";

$result = mysqli_query($koneksi, $query);

$row = mysqli_fetch_array($result);

print_r($row);

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
            <form action="simpan_user.php" method="post" >
                <div class="form-group">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" value="<?= $row['nama']?>"id="nama" placeholder="Nama" autocomplete="off">
                    <input type="hidden" name="id" value="<?= $row['id_user']?>">
                </div>    

                <div class="form-group">    
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="<?= $row['email']?>" id="email" placeholder="Email" autocomplete="off">
                </div>  

                <div class="form-group">
                    <label for="nohp" class="form-label">NoHp</label>
                    <input type="text" class="form-control" name="nohp"  value="<?= $row['phone']?>" id="nohp" placeholder="NoHp" autocomplete="off">
                </div>

                <div class="form-group">
                    <label for="kelamin" class="form-label">Kelamin</label>
                    <select class="form-select" name="kelamin"  value="<?= $row['jeniskelamin']?>" id="kelamin" autocomplete="off" >
                    <option></option>
                    <option>laki-laki</option>
                    <option>perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password"  value="<?= $row['passwordd']?>" id="password" placeholder="Password" autocomplete="off">
                </div>

                <div class="form-group">
                    <label for="level" class="form-label">Level</label>
                    <select class="form-select" name="level"  value="<?= $row['statuss']?>" id="level" autocomplete="off">
                    <option>admin</option>
                    <option>user</option>
                    </select>
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