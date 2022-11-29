<?php
session_start();
include "../koneksi.php";

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = mysqli_query($conn, "SELECT * FROM `login` WHERE username = '$username' AND `password` = PASSWORD('$password') ");
    $data = mysqli_fetch_array($sql);
    $cek = mysqli_num_rows($sql);

    if ($cek === 1) {
        $_SESSION['username'] = $username;
        echo "<script>alert('Selamat datang'); 
                location.href='dashboard.php';</script>";
    } else {
        echo "<script>alert('Mohon maaf akun salah'); 
            location.href='index.php';</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>

<body>
    <div class="container my-4">
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Login ke Halaman Admin</div>
                </div>
                <div style="padding-top:30px" class="panel-body">
                    <form id="loginform" class="form-horizontal" action="" method="post" role="form">
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="login-username" type="text" class="form-control" name="username" placeholder="username">
                        </div>
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                        </div>
                        <div style="margin-top:10px" class="form-group">
                            <div class="col-sm-12 controls">
                                <input type="submit" name="login" class="btn btn-success" value="Login" />
                                <button type="button" class="btn btn-secondary" style="background-color: #00BFFF;"><a href="index.php" style="color:white;text-decoration:none">Home</a></button>
                            </div>
                        </div>
                        <div class="col-sm-12 controls">
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>