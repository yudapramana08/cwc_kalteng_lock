<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Enterprise 2</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo config_item('base_url') ?>assets/logo/favicon.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo config_item('base_url') ?>assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?php echo config_item('base_url') ?>assets/dist/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo config_item('base_url') ?>assets/dist/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo config_item('base_url') ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo config_item('base_url') ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?php echo config_item('base_url') ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo config_item('base_url') ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo config_item('base_url') ?>assets/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo config_item('base_url') ?>assets/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo config_item('base_url') ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo config_item('base_url') ?>assets/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo config_item('base_url') ?>assets/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="<?php echo config_item('base_url') ?>assets/dist/css/fontgoogleapi.css" rel="stylesheet">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo config_item('base_url') ?>assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo config_item('base_url') ?>assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="<?php echo config_item('base_url') ?>assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="<?php echo config_item('base_url') ?>assets/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="<?php echo config_item('base_url') ?>assets/admin-style.css">
    <!-- panggil ckeditor.js -->
    <script type="text/javascript" src="<?php echo base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
    <!-- panggil adapter jquery ckeditor -->
    <script type="text/javascript" src="<?php echo base_url('assets/ckeditor/adapters/jquery.js'); ?>"></script>
    <!-- setup selector -->

    <!-- sweetalert  -->
    <script src="<?php echo config_item('base_url') ?>assets/sweetalert/sweetalert.min.js"></script>
    <!-- sweetalert  -->
    <link rel="stylesheet" href="<?php echo config_item('base_url') ?>assets/style-login.css">
    <style>
        .loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .loading-spinner img {
            /* Sesuaikan ukuran gambar dengan kebutuhan */
            width: 150px;
            height: 150px;
        }
    </style>
</head>
<?php
function hari_ini()
{
    $hari = date("D");

    switch ($hari) {
        case 'Sun':
            $hari_ini = "Minggu";
            break;

        case 'Mon':
            $hari_ini = "Senin";
            break;

        case 'Tue':
            $hari_ini = "Selasa";
            break;

        case 'Wed':
            $hari_ini = "Rabu";
            break;

        case 'Thu':
            $hari_ini = "Kamis";
            break;

        case 'Fri':
            $hari_ini = "Jumat";
            break;

        case 'Sat':
            $hari_ini = "Sabtu";
            break;

        default:
            $hari_ini = "Tidak di ketahui";
            break;
    }

    return  $hari_ini;
}
?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="loading-overlay" id="loadingOverlay">
        <div class="loading-spinner">
            <img src="<?php echo config_item('base_url') ?>assets/loader.gif" alt="Loading...">
        </div>
    </div>
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <!-- navbar kiri -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <a class="nav-link" style="font-weight: bold;">
                    <i class="fa fa-calendar" aria-hidden="true"></i> <?php echo hari_ini() . ', ' . date('d/m/Y'); ?> <span id="jam" style="font-size:24"></span> &nbsp;&nbsp;&nbsp;|
                </a>
                <!-- navbar kanan -->
                <li class="nav-item">

                    <a class="nav-link" title="logout" onclick="return confirm('Yakin Logout ?')" href="<?php echo site_url() . 'login/logout' ?>" role="button">
                        <i class="fa fa-sign-out"></i>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->