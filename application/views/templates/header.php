<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <link rel="icon" type="image/png" href="<?= base_url('assets/img/logo/side_bar.png'); ?>">
   <title><?= $title; ?></title>
   <!-- Tell the browser to be responsive to screen width -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="<?= base_url('vendor/adminlte3/'); ?>plugins/fontawesome-free/css/all.min.css">
   <!-- Ionicons -->
   <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <!-- SweetAlert2 -->
   <link rel="stylesheet" href="<?= base_url('vendor/adminlte3/'); ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
   <!-- Toastr -->
   <link rel="stylesheet" href="<?= base_url('vendor/adminlte3/'); ?>plugins/toastr/toastr.min.css">
   <!-- Tempusdominus Bbootstrap 4 -->
   <link rel="stylesheet" href="<?= base_url('vendor/adminlte3/'); ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
   <!-- iCheck -->
   <link rel="stylesheet" href="<?= base_url('vendor/adminlte3/'); ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
   <!-- JQVMap -->
   <link rel="stylesheet" href="<?= base_url('vendor/adminlte3/'); ?>plugins/jqvmap/jqvmap.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="<?= base_url('vendor/adminlte3/'); ?>dist/css/adminlte.min.css">
   <!-- overlayScrollbars -->
   <link rel="stylesheet" href="<?= base_url('vendor/adminlte3/'); ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
   <!-- daterange picker -->
   <link rel="stylesheet" href="<?= base_url('vendor/adminlte3/'); ?>plugins/daterangepicker/daterangepicker.css">
   <!-- iCheck for checkboxes and radio inputs -->
   <link rel="stylesheet" href="<?= base_url('vendor/adminlte3/'); ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
   <!-- Bootstrap Color Picker -->
   <link rel="stylesheet" href="<?= base_url('vendor/adminlte3/'); ?>plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
   <!-- Select2 -->
   <link rel="stylesheet" href="<?= base_url('vendor/adminlte3/'); ?>plugins/select2/css/select2.min.css">
   <link rel="stylesheet" href="<?= base_url('vendor/adminlte3/'); ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
   <!-- DataTables -->
   <link rel="stylesheet" href="<?= base_url('assets/'); ?>DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
   <link rel="stylesheet" href="<?= base_url('assets/'); ?>DataTables/Buttons-1.5.6/css/buttons.bootstrap4.min.css">
   <link rel="stylesheet" href="<?= base_url('vendor/adminlte3/'); ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
   <link rel="stylesheet" href="<?= base_url('vendor/adminlte3/'); ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
   <!-- summernote -->
   <link rel="stylesheet" href="<?= base_url('vendor/adminlte3/'); ?>plugins/summernote/summernote-bs4.css">
   <!-- Google Font: Source Sans Pro -->
   <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

   <style>
      .modal-body-fs {
         height: 630px;
         overflow: hidden;
      }

      .modal-body-fs:hover {
         overflow-y: auto;
      }

      .fade {
         opacity: 1;
         -webkit-transition: opacity 1s linier;
         transition: opacity 1s linier;
      }
   </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">