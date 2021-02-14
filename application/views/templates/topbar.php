<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
   <!-- Left navbar links -->
   <ul class="navbar-nav">
      <li class="nav-item">
         <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!-- <li class="nav-item d-sm-inline-block">
         <a href="#" class="nav-link">Contact</a>
      </li>
      <li class="nav-item d-sm-inline-block">
         <a href="#" class="nav-link">Help!</a>
      </li> -->
   </ul>

   <!-- Right navbar links -->
   <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
         <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">
            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-circle" style="width: 30px; margin-right: 5px;">
            <?= $user['name']; ?>
         </a>
         <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
            <li><a href="<?= base_url('user'); ?>" class="dropdown-item">
                  <i class="fas fa-user float-right"></i>My Profile</a>
            </li>
            <li><a href="<?= base_url('auth/logout'); ?>" class="dropdown-item" id="button-logout">
                  <i class="fas fa-sign-out-alt float-right"></i>Sign Out</a>
            </li>
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