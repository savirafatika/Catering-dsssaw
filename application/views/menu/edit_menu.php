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
                     <h1 class="m-0 text-dark">Side Bar Menu Management</h1>
                  </div><!-- /.row -->
               </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
            <div class="flash-data-danger" data-flashdanger="<?= $this->session->flashdata('message-danger'); ?>"></div>

            <!-- card add -->
            <div class="card col-md-6">
               <div class="card-header mt-1">
                  <h3 class="card-title">Edit Menu</h3>
                  <div class="card-tools">
                     <button type="button" class="btn btn-tool float-right" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                  </div>
               </div>
               <!-- /.card-header -->
               <div class="card-body">
                  <!-- form start -->
                  <form action="" method="POST">
                     <div class="card-body">
                        <input type="hidden" name="id" value="<?= $menumn['id_menu']; ?>">
                        <div class="form-group">
                           <label for="menu">Menu Name</label>
                           <input type="text" class="form-control" id="menu" name="menu" value="<?= $menumn['menu']; ?>">
                           <?= form_error('menu', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                           <label for="icons">icons Menu</label>
                           <input type="text" class="form-control" id="icons" name="icons" value="<?= $menumn['icons']; ?>">
                           <?= form_error('icons', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                     </div>
                     <!-- /.card-body -->
                     <button type="submit" class="btn" style="background-color: #adb5bd;"><i class="fas fa-pen-alt mr-2"></i>Edit</button>
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