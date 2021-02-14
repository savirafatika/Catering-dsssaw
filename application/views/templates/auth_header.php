<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <link rel="icon" type="image/png" href="<?= base_url('assets/img/logo/side_bar.png'); ?>">
   <title><?= $title; ?></title>
   <!-- Tell the browser to be responsive to screen width -->
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="<?= base_url('vendor/adminlte3/'); ?>plugins/fontawesome-free/css/all.min.css">
   <!-- Ionicons -->
   <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <!-- icheck bootstrap -->
   <link rel="stylesheet" href="<?= base_url('vendor/adminlte3/'); ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="<?= base_url('vendor/adminlte3/'); ?>dist/css/adminlte.min.css">
   <!-- Google Font: Source Sans Pro -->
   <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

   <style type="text/css">
      .login-logo,
      .register-logo {
         font-size: 2.1rem;
         font-weight: 300;
         margin-bottom: .9rem;
         text-align: center;
      }

      .login-logo a,
      .register-logo a {
         color: #495057;
      }

      .login-page,
      .register-page {
         -ms-flex-align: center;
         align-items: center;
         background: #e9ecef;
         display: -ms-flexbox;
         display: flex;
         -ms-flex-direction: column;
         flex-direction: column;
         height: 100vh;
         -ms-flex-pack: center;
         justify-content: center;
      }

      .login-box {
         width: 400px;
      }

      .register-box {
         width: 600px;
      }

      @media (max-width: 576px) {

         .login-box,
         .register-box {
            margin-top: .5rem;
            width: 90%;
         }
      }

      .login-card-body,
      .register-card-body {
         background: #ffffff;
         border-top: 0;
         color: #666;
         padding: 20px;
      }
   </style>
</head>

<body class="hold-transition login-page">