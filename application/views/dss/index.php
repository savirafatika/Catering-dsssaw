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
                        <h1 class="m-0 text-dark">Menu and Package Data</h1>
                     </div><!-- /.col -->
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="<?= base_url('dss/add_mp'); ?>" class="btn btn-primary mb-3"><i class="fas fa-plus mr-2"></i>New Menu Package</a></li>
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
                        <h3 class="card-title">List Menu and Package</h3>
                        <div class="card-tools">
                           <button type="button" class="btn btn-tool float-right" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                        </div>
                     </div>
                     <!-- /.card-header -->
                     <div class="card-body">
                        <table id="dtbl4nobtn" class="table table-bordered table-striped">
                           <thead>
                              <tr>
                                 <th>No</th>
                                 <th>Image</th>
                                 <th>Category</th>
                                 <th>Name</th>
                                 <th>Description</th>
                                 <th>Event Theme</th>
                                 <th>Price</th>
                                 <th>Type</th>
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php $i = 1; ?>
                              <?php foreach ($mp as $m) : ?>
                                 <tr>
                                    <th><?= $i; ?></th>
                                    <td>
                                       <img src="<?= base_url('assets/img/menu/') . $m['mp_image']; ?>" alt="profile picture" style="width: 150px; height: 100px;">
                                    </td>
                                    <td style="color: white;">
                                       <?php
                                       if ($m['mp_category'] == 'Weight') {
                                          echo '<a class="badge" style="background-color: #605ca8;">Weight</a>';
                                       } else if ($m['mp_category'] == 'Medium') {
                                          echo '<a class="badge" style="background-color: #39cccc;">Medium</a>';
                                       } else if ($m['mp_category'] == 'Light') {
                                          echo '<a class="badge" style="background-color: #e83e8c;">Light</a>';
                                       }
                                       ?>
                                    </td>
                                    <td><?= $m['mp_name']; ?></td>
                                    <td><?= $m['mp_desc']; ?></td>
                                    <td><?= $m['mp_event']; ?></td>
                                    <td><?= number_format($m['mp_price'], 2, ",", "."); ?></td>
                                    <td><?= $m['p_type']; ?></td>
                                    <td>
                                       <a href="<?= base_url(); ?>dss/edit_mp/<?= $m['id_mp']; ?>" class="btn btn-xs" style="background-color: #3c8dbc; color:white;"><i class="fas fa-edit mr-1"></i>Edit</a>
                                       <a href="<?= base_url(); ?>dss/hapus_mp/<?= $m['id_mp']; ?>" class="btn btn-xs button-delete" style="background-color: #ff851b;"><i class="fas fa-eraser mr-1"></i>Delete</a>
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