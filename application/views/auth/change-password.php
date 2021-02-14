<div class="login-box">
   <!-- /.login-logo -->
   <div class="card">
      <div class="card-body login-card-body">
         <center>
            <a href="<?= base_url('home'); ?>"><img src="<?= base_url('assets/img/logo/logo_bnw.png'); ?>" style="width: 60%; height: 60%; margin-bottom: 15px;"></a>
         </center>
         <div class="text-center">
            <p class="login-box-msg">
               You are only one step a way from your new password, <b>recover your password now.</b>
            </p>
            <p class="mb-3">
               <?= $this->session->userdata('reset_email'); ?>
            </p>
         </div>
         <?= $this->session->flashdata('message'); ?>

         <form action="<?= base_url('auth/changepassword'); ?>" method="post">
            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
            <div class="input-group mb-3">
               <input type="password" class="form-control" id="password1" name="password1" placeholder="Enter New Password">
               <div class="input-group-append">
                  <div class="input-group-text">
                     <span class="fas fa-lock"></span>
                  </div>
               </div>
            </div>
            <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
            <div class="input-group mb-3">
               <input type="password" class="form-control" id="password2" name="password2" placeholder="Repeat Password">
               <div class="input-group-append">
                  <div class="input-group-text">
                     <span class="fas fa-lock"></span>
                  </div>
               </div>
            </div>

            <div class="icheck-dark mb-3">
               <input type="checkbox" id="remember">
               <label for="remember">
                  Show Password
               </label>
            </div>

            <div class="row mb-3">
               <div class="col-12">
                  <button type="submit" class="btn btn-dark btn-block">Change password</button>
               </div>
               <!-- /.col -->
            </div>
         </form>

      </div>
      <!-- /.login-card-body -->
   </div>
</div>
<!-- /.login-box -->