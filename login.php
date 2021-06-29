<?php
ob_start();
session_start();
include "./config/koneksi.php";
if (isset($_SESSION['login'])) {
    header("location:index.php?page=dashboard");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $sql_login = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
    if (mysqli_num_rows($sql_login) > 0) {
        $row_akun = mysqli_fetch_array($sql_login);
        $_SESSION['iduser'] = $row_akun['iduser'];
        $_SESSION['username'] = $row_akun['username'];
        $_SESSION['nama_user'] = $row_akun['nama_user'];
        $_SESSION['foto'] = $row_akun['foto'];
        $_SESSION['login'] = true;
        // $_SESSION["status"] = "login";
        header("location:index.php?page=dashboard");
        echo "TEST";
        var_dump("TEST");
    } else {
        header("location:login.php?gagal");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SD Jaya Bekasi</title>
    <link rel="icon" href="./assets/gambar/S.png">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page" style="margin-top: -30px;">
    <div class="login-box">
        <div class="login-logo">
            <img src="./assets/gambar/S.png" alt="SD Jaya Bekasi Logo" width="80px">
        </div>
        <div class="login-logo">
            <b><span class="text-red">SD</span><span class="text-black"> Jaya Bekasi</span></b>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <h4 class="login-box-msg">Login</h4>

                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>


                    <?php
                    if (isset($_GET['gagal'])) { ?>
                        <tr>
                            <td>
                                <div>
                                    <p class="text-red">Sorry, Username / Password doesn't match</p>
                                </div>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                    <div class="row justify-content-end">
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/dist/js/adminlte.min.js"></script>
</body>

</html>