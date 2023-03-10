<?php
session_start();
if(isset($_SESSION['level'])){
    header("location: paralel.php");
}


require 'koneksi.php';
$username = "";
$password = "";
$eror ="";
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if( $username == '' or $password == ''){
        $eror = "<li>Silahkan masukan username dan password</li>";
    }
    if(empty($eror)){
        $result = "SELECT * FROM user WHERE nama='$username' AND passwordd='$password'";
        $query = mysqli_query($koneksi,$result);
        $row = mysqli_fetch_array($query);
        $level = $row['statuss'];
        if( $username == $row['nama'] && $password == $row['passwordd']){
            $_SESSION['level'] = $level;
            header ("location: paralel.php");
        }else{
            $eror = "<li>Password dan Username salah</li>";

        }
    }
    }
    

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container" style="margin-top: 80px">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                <div class="card">
                 
                    <div class="card-header text-center">
                        LOGIN
                    </div>
                    <div class="card-body">
                    <?php 
                        if($eror){
                        echo "<ul>$eror</ul>";
                       }
                       
    
                     ?>
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off">
                            </div>
                            <button type="submit" class="btn btn-primary mt-2" name="submit">Submit</button>
                        </form>
                       

                    </div>
                    </div>
                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>