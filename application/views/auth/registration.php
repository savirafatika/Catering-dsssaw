<div class="register-box">
   <div class="card">
      <div class="card-body register-card-body">
         <center>
            <a href="<?= base_url('home'); ?>"><img src="<?= base_url('assets/img/logo/logo_bnw.png'); ?>" style="width: 40%; height: 40%;"></a><br><br>
         </center>
         <p class="login-box-msg">Register a new membership</p>

         <form action="<?= base_url('auth/registration'); ?>" method="post">
            <div class="row">

               <!-- FUll Name -->
               <div class="mb-3 col-md-6 col-sm-12">
                  <div class="col-sm-12">
                     <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="input-group">
                     <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" value="<?= set_value('name'); ?>">
                     <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fas fa-user"></span>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- Emaiil -->
               <div class="mb-3 col-md-6 col-sm-12">
                  <div class="col-sm-12">
                     <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="input-group">
                     <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                     <!-- value = untuk mempopulasi ulang formnya -->
                     <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fas fa-envelope"></span>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- Address -->
               <div class="mb-3 col-md-6 col-sm-12">
                  <div class="col-sm-12">
                     <?= form_error('address', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="input-group">
                     <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="<?= set_value('address'); ?>">
                     <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fas fa-map-marker-alt"></span>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- Phone Number -->
               <div class="mb-3 col-md-6 col-sm-12">
                  <div class="col-sm-12">
                     <?= form_error('phone', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="input-group">
                     <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone Number" value="<?= set_value('phone'); ?>">
                     <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fas fa-phone-alt"></span>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-sm-12">
                  <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
               </div>

               <div class="mb-3 col-md-6 col-sm-12">
                  <div class="input-group">
                     <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
                     <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fas fa-lock"></span>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="mb-3 col-md-6 col-sm-12">
                  <div class="input-group">
                     <input type="password" class="form-control" id="password2" name="password2" placeholder="Repeat Password">
                     <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fas fa-lock"></span>
                        </div>
                     </div>
                  </div>
               </div>

            </div>

            <div class="row">
               <div class="col-sm-6 mb-2">
                  <div class="icheck-dark">
                     <input type="checkbox" id="remember">
                     <label for="remember">
                        Show Password
                     </label>
                  </div>
               </div>
               <!-- /.col -->
               <div class="col-sm-6">
                  <button type="submit" class="btn btn-dark btn-block">Register</button>
               </div>
               <!-- /.col -->
            </div>
         </form>

         <div class="social-auth-links text-center mt-3">
            <p>- OR -</p>
         </div>

         <div class="container" style="text-align: center;">
            <a href="<?= base_url('auth/forgotpassword'); ?>">I forgot my password</a><br>
            <a href="<?= base_url('auth'); ?>" class="text-center">I already have a membership</a>
         </div>
      </div>
      <!-- /.form-box -->
   </div><!-- /.card -->
</div>
<!-- /.register-box -->