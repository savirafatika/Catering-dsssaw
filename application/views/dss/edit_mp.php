<div class="wrapper">

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
      <!-- Main content -->
      <section class="content">
         <div class="container-fluid">
            <!-- Content Header (Page header) -->
            <div class="content-header">
               <div class="container-fluid">
                  <div class="row">
                     <h1 class="m-0 text-dark">Edit Menu Package</h1>
                  </div><!-- /.row -->
               </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
            <div class="flash-data-danger" data-flashdanger="<?= $this->session->flashdata('message-danger'); ?>"></div>

            <div class="row">
               <!-- card add -->
               <div class="card col-md-6">
                  <div class="card-header mt-1">
                     <h3 class="card-title">Edit Area</h3>
                     <div class="card-tools">
                        <button type="button" class="btn btn-tool float-right" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                     </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                     <!-- form start -->
                     <form action="" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                           <input type="hidden" name="id_mp" value="<?= $mp_row['id_mp']; ?>">
                           <!-- Category -->
                           <div class="form-group">
                              <label for="Category">Category</label>
                              <div class="form-group">
                                 <select class="form-control select2bs4" name="Category" id="Category">
                                    <option value="<?= $mp_row['mp_category']; ?>"><?= $mp_row['mp_category']; ?></option>
                                    <option value="Weight">Weight</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Light">Light</option>
                                 </select>
                              </div>
                              <?= form_error('Category', '<small class="text-danger pl-3">', '</small>'); ?>
                           </div>
                           <!-- / Category -->
                           <!-- Name MP -->
                           <div class="form-group">
                              <label for="Name">Menu Name</label>
                              <input type="text" class="form-control" id="Name" name="Name" value="<?= $mp_row['mp_name']; ?>">
                              <?= form_error('Name', '<small class="text-danger pl-3" style="text-align: right;">', '</small>'); ?>
                           </div>
                           <!-- / Name MP -->
                           <!-- Desc MP -->
                           <div class="form-group">
                              <label for="Desc">Description</label>
                              <textarea type="text" class="form-control" id="Desc" name="Desc"><?= $mp_row['mp_desc']; ?></textarea>
                              <?= form_error('Desc', '<small class="text-danger pl-3">', '</small>'); ?>
                           </div>
                           <!-- / Desc MP -->
                           <!-- Event MP -->
                           <div class="form-group">
                              <label for="Event">Event Theme</label>
                              <div class="form-group">
                                 <select class="form-control select2bs4" name="Event" id="Event">
                                    <option value="<?= $mp_row['mp_event']; ?>"><?= $mp_row['mp_event']; ?></option>
                                    <option value="Formal">Formal</option>
                                    <option value="Semi Formal">Semi Formal</option>
                                    <option value="Casual">Casual</option>
                                 </select>
                              </div>
                              <?= form_error('Event', '<small class="text-danger pl-3">', '</small>'); ?>
                           </div>
                           <!-- / Event MP -->
                           <!-- Price MP -->
                           <div class="form-group">
                              <label for="Event">Price</label>
                              <input type="text" class="form-control" id="Price" name="Price" value="<?= $mp_row['mp_price']; ?>">
                              <?= form_error('Price', '<small class="text-danger pl-3">', '</small>'); ?>
                           </div>
                           <!-- / Price MP -->
                           <!-- Type MP -->
                           <div class="form-group">
                              <label for="Type">Package Type</label>
                              <div class="form-group">
                                 <select class="form-control select2bs4" style="width: 100%;" name="Type" id="Type">
                                    <option value="<?= $mp_row['p_type']; ?>"><?= $mp_row['p_type']; ?></option>
                                    <option value="sharing">Sharing</option>
                                    <option value="rice box">Rice Box</option>
                                    <option value="snack box">Snack Box</option>
                                    <option value="dessert box">Dessert Box</option>
                                    <option value="buffet">Buffet</option>
                                 </select>
                              </div>
                              <?= form_error('Type', '<small class="text-danger pl-3">', '</small>'); ?>
                           </div>
                           <!-- / Type MP -->
                           <!-- Image MP -->
                           <div class="form-group">
                              <label for="Image">Image</label>
                              <div class="row">
                                 <div class="col-md-4">
                                    <img src="<?= base_url('assets/img/menu/') . $mp_row['mp_image']; ?>" class="img-thumbnail">
                                 </div>
                                 <div class="col-md-8">
                                    <div class="custom-file">
                                       <input type="file" class="custom-file-input" id="mp_image" name="mp_image">
                                       <label class="custom-file-label" for="image">Choose Image</label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- / Image MP -->
                        </div>
                        <!-- /.card-body -->
                        <button type="submit" class="btn" style="background-color: #adb5bd;"><i class="fas fa-pen-alt mr-2"></i>Edit</button>
                     </form>
                     <!-- form close -->
                  </div>
                  <!-- /.card-body -->
               </div>
               <!-- /.card add -->
            </div>

         </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
   </div>