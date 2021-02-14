<div class="wrapper">

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
      <!-- Main content -->
      <section class="content">
         <div class="container-fluid">
            <!-- Content Header (Page header) -->
            <div class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <h1 class="m-0 text-dark">Side Bar Sub Menu Management</h1>
                  </div><!-- /.row -->
               </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
            <div class="flash-data-danger" data-flashdanger="<?= $this->session->flashdata('message-danger'); ?>"></div>

            <!-- card add -->
            <div class="card col-md-6">
               <div class="card-header mt-1">
                  <h3 class="card-title">Add Sub Menu</h3>
                  <div class="card-tools">
                     <button type="button" class="btn btn-tool float-right" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                  </div>
               </div>
               <!-- /.card-header -->
               <div class="card-body">
                  <!-- form start -->
                  <form action="<?= base_url('menu/add_submenu'); ?>" method="POST">
                     <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Sub Menu Title">
                        <?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
                     </div>
                     <div class="form-group">
                        <label for="menu">Menu</label>
                        <select name="menu_id" id="menu_id" class="form-control">
                           <option value="">Select Sub Menu</option>
                           <?php foreach ($menu as $m) : ?>
                              <option value="<?= $m['id_menu']; ?>"><?= $m['menu']; ?></option>
                           <?php endforeach; ?>
                        </select>
                        <?= form_error('menu_id', '<small class="text-danger pl-3">', '</small>'); ?>
                     </div>
                     <div class="form-group">
                        <label for="url">Url</label>
                        <input type="text" class="form-control" id="url" name="url" placeholder="Sub Menu url">
                        <?= form_error('url', '<small class="text-danger pl-3">', '</small>'); ?>
                     </div>
                     <div class="form-group">
                        <label for="icon">Icon</label>
                        <input type="text" class="form-control" id="icon" name="icon" placeholder="Sub Menu icon">
                        <?= form_error('icon', '<small class="text-danger pl-3">', '</small>'); ?>
                     </div>
                     <div class="row form-group">
                        <div class="form-check col-md-3 ml-2">
                           <input class="form-check-input" type="radio" value="1" name="is_active" id="is_active" checked>
                           <label class="form-check-label">Active</label>
                        </div>
                        <div class="form-check col-md-3">
                           <input class="form-check-input" type="radio" value="0" name="is_active" id="is_active">
                           <label class="form-check-label">Not Active</label>
                        </div>
                     </div>

                     <!-- /.card-body -->
                     <button type="submit" class="btn" style="background-color: #adb5bd;"><i class="fas fa-plus mr-2"></i>Add</button>
                  </form>
                  <!-- form close -->
               </div>
               <!-- /.card-body -->
            </div>
            <!-- /.card add -->

         </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
   </div>