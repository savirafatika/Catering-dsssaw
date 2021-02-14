<div class="wrapper">

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header ml-3">
         <div class="container-fluid">
            <div class="row mb-2">
               <h4 class="m-0 text-dark">Fill this form to edit your data</h4>
            </div><!-- /.row -->
         </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
         <div class="container-fluid">

            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
            <div class="flash-data-danger" data-flashdanger="<?= $this->session->flashdata('message-danger'); ?>"></div>

            <div class="col-md-6 col-sm-12">
               <!-- form start -->
               <?php echo form_open_multipart('user/edit'); ?>
               <div class="card-body">
                  <div class="form-group">
                     <div class="input-group mb-3">
                        <div class="input-group-prepend">
                           <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                     </div>
                     <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                     <div class="input-group mb-3">
                        <div class="input-group-prepend">
                           <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>">
                     </div>
                     <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                     <div class="input-group mb-3">
                        <div class="input-group-prepend">
                           <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                        </div>
                        <textarea type="text" class="form-control" id="address" name="address"><?= $user['address']; ?></textarea>
                     </div>
                     <?= form_error('address', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                     <div class="input-group mb-3">
                        <div class="input-group-prepend">
                           <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                        </div>
                        <input type="text" class="form-control" id="phone" name="phone" value="<?= $user['phone']; ?>">
                     </div>
                     <?= form_error('phone', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <!-- image -->
                  <div class="form-group row">
                     <div class="row">
                        <div class="col-sm-3">
                           <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-9">
                           <div class="input-group">
                              <div class="custom-file">
                                 <input type="file" class="custom-file-input" id="image" name="image">
                                 <label class="custom-file-label" for="image">Choose file</label>
                              </div>
                              <div class="input-group-append">
                                 <button type="submit" class="btn input-group-text" style="justify-content: end;">Send <i class="fas fa-arrow-right ml-2"></i></button>
                              </div>
                           </div>
                        </div>
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