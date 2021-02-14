<div class="login-box">
   <!-- /.login-logo -->
   <div class="card">
      <div class="card-body login-card-body">
         <center>
            <a href="<?= base_url('home'); ?>"><img src="<?= base_url('assets/img/logo/logo_bnw.png'); ?>" style="width: 60%; height: 60%; margin-bottom: 15px;"></a>
         </center>
         <p class="login-box-msg"> <b>You forgot your password?</b> Here you can easily retrieve a new password.</p>
         <?= $this->session->flashdata('message'); ?>

         <form action="<?= base_url('auth/forgotpassword'); ?>" method="post">
            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
            <div class="input-group mb-3">
               <input type="text" class="form-control" placeholder="Enter Email Address ..." name="email" id="email">
               <div class="input-group-append">
                  <div class="input-group-text">
                     <span class="fas fa-envelope"></span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-12">
                  <button type="submit" class="btn btn-dark btn-block">Request new password</button>
               </div>
               <!-- /.col -->
            </div>
         </form>

         <div class="social-auth-links text-center mt-3">
            <p>- OR -</p>
         </div>

         <div class="container" style="text-align: center;">
            <p class="mt-3 mb-1">
               <a href="<?= base_url('auth'); ?>">Back to Login</a>
            </p>
         </div>

      </div>
      <!-- /.login-card-body -->
   </div>
</div>
<!-- /.login-box -->