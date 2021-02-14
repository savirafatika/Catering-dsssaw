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
                  <h3 class="card-title">Edit Sub Menu</h3>
                  <div class="card-tools">
                     <button type="button" class="btn btn-tool float-right" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                  </div>
               </div>
               <!-- /.card-header -->
               <div class="card-body">
                  <!-- form start -->
                  <form action="" method="POST">
                     <div class="card-body">
                        <input type="hidden" name="id" value="<?= $submenumn['id_sm']; ?>">
                        <div class="form-group">
                           <label for="title">Title</label>
                           <input type="text" class="form-control" id="title" name="title" value="<?= $submenumn['title']; ?>">
                           <?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class=" form-group">
                           <label for="menu">Menu</label>
                           <div class="form-group">
                              <select class="form-control select2bs4" style="width: 100%;" name="menu_id" id="menu_id">
                                 <option selected="selected" value="<?= $submenurow['menu_id']; ?>">your choice = <?= $submenurow['menu']; ?></option>
                                 <?php foreach ($menu as $sm) : ?>
                                    <option value="<?= $sm['id_menu']; ?>"><?= $sm['menu']; ?></option>
                                 <?php endforeach; ?>
                              </select>
                           </div>
                           <?= form_error('menu_id', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                           <label for="url">Url</label>
                           <input type="text" class="form-control" id="url" name="url" value="<?= $submenumn['url']; ?>">
                           <?= form_error('url', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                           <label for="icon">Icon</label>
                           <input type="text" class="form-control" id="icon" name="icon" value="<?= $submenumn['icon']; ?>">
                           <?= form_error('icon', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="row form-group">
                           <div class="form-check col-md-3 ml-2">
                              <input class="form-check-input" type="radio" value="1" name="is_active" id="is_active" <?php if ($submenumn['active'] == 1) {
                                                                                                                        echo "checked";
                                                                                                                     } ?>>
                              <label class="form-check-label">Active</label>
                           </div>
                           <div class="form-check col-md-3">
                              <input class="form-check-input" type="radio" value="0" name="is_active" id="is_active" <?php if ($submenumn['active'] == 0) {
                                                                                                                        echo "checked";
                                                                                                                     } ?>>
                              <label class="form-check-label">Not Active</label>
                           </div>
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