<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <link rel="icon" type="image/png" href="<?= base_url('assets/img/logo/side_bar.png'); ?>">
   <title>Blocked</title>
   <!-- Tell the browser to be responsive to screen width -->
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="<?= base_url('vendor/adminlte3/'); ?>plugins/fontawesome-free/css/all.min.css">
   <!-- Ionicons -->
   <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="<?= base_url('vendor/adminlte3/'); ?>dist/css/adminlte.min.css">
   <!-- Google Font: Source Sans Pro -->
   <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition lockscreen">
   <!-- Automatic element centering -->
   <div class="lockscreen-wrapper">

      <div class="error-page">
         <h2 class="headline text-danger">403</h2>

         <div class="error-content">
            <h3><i class="fas fa-exclamation-triangle text-danger"></i>Sorry! Access Forbiden.</h3>

            <p>
               You don't have access to this page, you may
               <br><a class="btn btn-outline-danger" href="<?= base_url('user'); ?>"><i class="fas fa-long-arrow-alt-left mr-2"></i>return to dashboard</a>
               <br>or you have to ask for permission from the administrator Savira Catering.
            </p>

         </div>
      </div>

   </div>
   <!-- /.center -->

   <!-- jQuery -->
   <script src="<?= base_url('vendor/adminlte3/'); ?>plugins/jquery/jquery.min.js"></script>
   <!-- Bootstrap 4 -->
   <script src="<?= base_url('vendor/adminlte3/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>