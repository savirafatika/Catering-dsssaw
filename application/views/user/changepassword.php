<div class="wrapper">

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header ml-3">
         <div class="container-fluid">
            <div class="row mb-2">
               <h4 class="m-0 text-dark">Fill this form to update your password</h4>
            </div><!-- /.row -->
         </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
      <div class="flash-data-danger" data-flashdanger="<?= $this->session->flashdata('message-danger'); ?>"></div>
      <!-- Main content -->
      <section class="content">
         <div class="container-fluid">

            <div class="col-md-6 col-sm-12">

               <!-- form start -->
               <?php echo form_open_multipart('user/changepassword'); ?>
               <div class="card-body">
                  <div class="form-group">
                     <div class="input-group mb-3">
                        <div class="input-group-prepend">
                           <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Current Password">
                     </div>
                     <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                     <div class="input-group mb-3">
                        <div class="input-group-prepend">
                           <span class="input-group-text"><i class="fas fa-unlock"></i></span>
                        </div>
                        <input type="password" class="form-control" id="new_password1" name="new_password1" placeholder="New Password">
                     </div>
                     <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                     <div class="input-group mb-3">
                        <div class="input-group-prepend">
                           <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        </div>
                        <input type="password" class="form-control" id="new_password2" name="new_password2" placeholder="Repeat Password">
                     </div>
                     <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="row">
                     <!-- button -->
                     <div class="col-md-9">
                        <button type="submit" class="btn mt-2" style="background-color: #adb5bd;"><i class="fas fa-pen-alt mr-2"></i>Change</button>
                     </div>
                     <div class="icheck-dark col-md-3">
                        <input type="checkbox" id="remember">
                        <label for="remember">
                           Show Password
                        </label>
                     </div>

                  </div>

               </div>
               <!-- /.card-body -->
               </form>
            </div>
            <!-- /.card -->
         </div>

   </div><!-- /.container-fluid -->
   </section>
   <!-- /.content -->
</div>