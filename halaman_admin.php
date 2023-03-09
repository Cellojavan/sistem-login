<?php 
require 'koneksi.php';
session_start();
if(!isset($_SESSION['username_admin'])){
    header("location: login.php");
}
print_r($_SESSION['admin_akses']);
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
                 
                    <div class="card-header text-center">
                        DATA USER
                    </div>
                    <div class="card-body">
                        <a href="logout.php" class="btn btn-danger mb-2 " style="float: right">LOGOUT</a>
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">NAMA</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">NO.HP</th>
                        <th scope="col">KELAMIN</th>
                        <th scope="col">PASSWORD</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        </tr>
                       
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