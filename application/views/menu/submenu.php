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
                     <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Side Bar Sub Menu Management</h1>
                     </div><!-- /.col -->
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="<?= base_url('menu/add_submenu'); ?>" class="btn btn-primary mb-3"><i class="fas fa-plus mr-2"></i>New Submenu</a></li>
                        </ol>
                     </div><!-- /.col -->
                  </div><!-- /.row -->
               </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
            <div class="flash-data-danger" data-flashdanger="<?= $this->session->flashdata('message-danger'); ?>"></div>

            <div class="row">
               <div class="col-lg-12" style="height: min-content;">
                  <!-- card table -->
                  <div class="card">
                     <div class="card-header mt-1">
                        <h3 class="card-title">List Sub Menu</h3>
                        <div class="card-tools">
                           <button type="button" class="btn btn-tool float-right" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                        </div>
                     </div>
                     <!-- /.card-header -->
                     <div class="card-body">
                        <table id="nobtn" class="table table-bordered table-striped">
                           <thead>
                              <tr>
                                 <th>No</th>
                                 <th>Title</th>
                                 <th>Menu</th>
                                 <th>Url</th>
                                 <th>Icon</th>
                                 <th>Active</th>
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php $i = 1; ?>
                              <?php foreach ($subMenu as $sm) : ?>
                                 <tr>
                                    <th><?= $i; ?></th>
                                    <td><?= $sm['title']; ?></td>
                                    <td><?= $sm['menu']; ?></td>
                                    <td><?= $sm['url']; ?></td>
                                    <td><?= $sm['icon']; ?></td>
                                    <td style="color: white;">
                                       <?php
                                       if ($sm['active'] == 1) {
                                          echo '<a class="badge badge-success">ON</a>';
                                       } else {
                                          echo '<a class="badge badge-secondary">OFF</a>';
                                       }
                                       ?>
                                    </td>
                                    <td>
                                       <a href="<?= base_url(); ?>menu/edit_submenu/<?= $sm['id_sm']; ?>" class="btn btn-xs" style="background-color: #3c8dbc; color:white;"><i class="fas fa-edit mr-1"></i>Edit</a>
                                       <a href="<?= base_url(); ?>menu/hapus_submenu/<?= $sm['id_sm']; ?>" class="btn btn-xs button-delete" style="background-color: #ff851b;"><i class="fas fa-eraser mr-1"></i>Delete</a>
                                    </td>
                                 </tr>
                                 <?php $i++; ?>
                              <?php endforeach; ?>
                           </tbody>
                        </table>
                     </div>
                     <!-- /.card-body -->
                  </div>
                  <!-- /.card table -->
               </div>
            </div>


         </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
   </div>