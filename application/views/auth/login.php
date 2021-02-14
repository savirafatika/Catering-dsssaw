<div class="login-box">
   <div class="card">
      <div class="card-body login-card-body">

         <center>
            <a href="<?= base_url('home'); ?>"><img src="<?= base_url('assets/img/logo/logo_bnw.png'); ?>" style="width: 60%; height: 60%; margin-bottom: 10px;"></a>
         </center>

         <p class="login-box-msg">Sign in to start your session</p>
         <?= $this->session->flashdata('message'); ?>
         <form action="<?= base_url('auth'); ?>" method="post">
            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
            <div class="input-group mb-3">
               <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
               <div class="input-group-append">
                  <div class="input-group-text">
                     <span class="fas fa-envelope"></span>
                  </div>
               </div>
            </div>
            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
            <div class="input-group mb-3">
               <input type="password" class="form-control" id="password" name="password" placeholder="Password">
               <div class="input-group-append">
                  <div class="input-group-text">
                     <span class="fas fa-lock"></span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-8">
                  <div class="icheck-dark">
                     <input type="checkbox" id="remember">
                     <label for="remember">
                        Show Password
                     </label>
                  </div>
               </div>
               <!-- /.col -->
               <div class="col-4">
                  <button type="submit" class="btn btn-dark btn-block">Sign In</button>
               </div>
               <!-- /.col -->
            </div>
         </form>

         <div class="social-auth-links text-center mt-3">
            <p>- OR -</p>
         </div>
         <!-- /.social-auth-links -->

         <div class="container" style="text-align: center;">
            <p class="mb-1">
               <a href="<?= base_url('auth/forgotpassword'); ?>">I forgot my password</a>
            </p>
            <p class="mb-0">
               <a href="<?= base_url('auth/registration'); ?>">Register a new membership</a>
            </p>
         </div>

      </div>
      <!-- /.login-card-body -->
   </div>
</div>
<!-- /.login-box -->