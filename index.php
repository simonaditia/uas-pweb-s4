<?php
ob_start();
session_start();
include "./config/koneksi.php";
if (!isset($_SESSION["login"])) {
    header("location:login.php");
    exit();
}

// if ($_SESSION['status'] != "login") {
//     header("location:login.php");
// }
// if (!isset($_SESSION['username'])) header("location:login.php");
// if (!isset($_SESSION['logged_in']));
// header("Location: login.php");

// var global user session
$iduser = $_SESSION['iduser'];
$id_username = $_SESSION['username'];
$nama_user = $_SESSION['nama_user'];
$foto = $_SESSION['foto'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SD Jaya Bekasi</title>
    <link rel="icon" href="./assets/gambar/S.png">
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="./assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="./assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="./assets/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./assets/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="./assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="./assets/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="./assets/plugins/summernote/summernote-bs4.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./assets/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="./assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="./assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="./assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./assets/dist/css/adminlte.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="./assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div> -->

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><?php echo date('l, d-M-Y / H:i:s a'); ?></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle user-panel">
                        <img src="<?= "./assets/gambar/$foto"; ?>" class="img-circle elevation-2" alt="User Image">&nbsp;
                        <?php echo $nama_user; ?>
                    </a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li><a href="./index.php?page=edit_profile&iduser=<?php echo $iduser; ?>" class="dropdown-item">Edit Profile </a></li>
                        <li><a href="index.php?page=edit_password_user&iduser=<?php echo $iduser; ?>" class="dropdown-item">Edit Password </a></li>
                        <li><a href="./logout.php" class="dropdown-item">Logout</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index.php?page=dashboard" class="brand-link">
                <img src="./assets/gambar/S.png" alt="SD Jaya Bekasi Logo" class="brand-image">
                <span class="brand-text"><b><span class="text-red">SD</span><span class="text-black"> Jaya Bekasi</span></b></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= "./assets/gambar/$foto"; ?>" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?php echo $nama_user; ?></a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                        <li class="nav-header">Main Navigation</li>
                        <li class="nav-item">
                            <a href="index.php?page=dashboard" class="nav-link <?php if ($_GET['page'] == "dashboard") echo "active"; ?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($_GET['page'] == "data_siswa") echo "active"; ?>" href="index.php?page=data_siswa">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Data Siswa
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">

                            <i class="nav-icon fas fa-chalkboard-teacher"></i>
                            <p>
                                Data Guru
                            </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?page=data_mapel" class="nav-link <?php if ($_GET['page'] == "data_mapel") echo "active"; ?>">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Data Mapel
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?page=data_nilai" class="nav-link <?php if ($_GET['page'] == "data_nilai") echo "active"; ?>">
                                <i class="nav-icon fas fa-star"></i>
                                <p>
                                    Data Nilai
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">Settings</li>
                        <li class="nav-item <?php if ($_GET['page'] == "edit_profile" || $_GET['page'] == "edit_password_user") echo "menu-open"; ?>">
                            <a href="#" class="nav-link <?php if ($_GET['page'] == "edit_profile" || $_GET['page'] == "edit_password_user") echo "active"; ?>">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    User
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="index.php?page=edit_profile&iduser=<?php echo $iduser; ?>" class="nav-link <?php if ($_GET['page'] == "edit_profile") echo "active"; ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Edit Profile</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.php?page=edit_password_user&iduser=<?php echo $iduser; ?>" class="nav-link <?php if ($_GET['page'] == "edit_password_user") echo "active"; ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Edit Password</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="wrapper">
                <?php
                include "./config/pages.php";
                ?>
            </section>
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2021 <a href="#">Simon Aditia - 201910225377 - TF4A7</a>.</strong>
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 0.1
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="./assets/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="./assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="./assets/plugins/jquery/jquery.min.js"></script>
    <script src="./assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="./assets/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="./assets/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="./assets/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="./assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="./assets/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="./assets/plugins/moment/moment.min.js"></script>
    <script src="./assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="./assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="./assets/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="./assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="./assets/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="./assets/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="./assets/dist/js/pages/dashboard.js"></script>
    <!-- jQuery -->
    <!-- <script src="./assets/plugins/jquery/jquery.min.js"></script> -->
    <!-- Bootstrap 4 -->
    <script src="./assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="./assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="./assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="./assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="./assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="./assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="./assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="./assets/plugins/jszip/jszip.min.js"></script>
    <script src="./assets/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="./assets/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="./assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="./assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="./assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
    <?php
    if (@$_SESSION['sukses']) { ?>
        <script>
            swal("Sukses!", "<?php echo $_SESSION['sukses']; ?>", 'success');
        </script>
    <?php unset($_SESSION['sukses']);
    }

    ?>
</body>

</html>