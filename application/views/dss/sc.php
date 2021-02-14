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
                        <h1 class="m-0 text-dark">Sub Criteria Support System</h1>
                     </div><!-- /.col -->
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="<?= base_url('dss/add_sc'); ?>" class="btn btn-primary mb-3"><i class="fas fa-plus mr-2"></i>New Sub Criteria</a></li>
                        </ol>
                     </div><!-- /.col -->
                  </div><!-- /.row -->
               </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
            <div class="flash-data-danger" data-flashdanger="<?= $this->session->flashdata('message-danger'); ?>"></div>

            <div class="callout callout-info alert">
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               <h5><i class="fas fa-info"></i> Note:</h5>
               - Sub criteria become alternative assessment parameters on the criteria.
               <br>- The weight value has a maximum value limit according to the weighted preference criteria.
            </div>

            <div class="row">
               <div class="col-lg-12" style="height: min-content;">
                  <!-- card table -->
                  <div class="card">
                     <div class="card-header mt-1">
                        <h3 class="card-title">List Sub Criteria</h3>
                        <div class="card-tools">
                           <button type="button" class="btn btn-tool float-right" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                        </div>
                     </div>
                     <!-- /.card-header -->
                     <div class="card-body">
                        <table id="nobtn" class="table table-bordered table-striped">
                           <thead>
                              <tr>
                                 <th>Code</th>
                                 <th>Sub Criteria Name</th>
                                 <th>Weight</th>
                                 <th>Criteria</th>
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php foreach ($sc as $s) : ?>
                                 <tr>
                                    <th><?= $s['id_sc']; ?></th>
                                    <td><?= $s['sub']; ?></td>
                                    <td><?= $s['weight']; ?></td>
                                    <td><?= $s['c_name']; ?></td>
                                    <td>
                                       <a href="<?= base_url(); ?>dss/edit_sc/<?= $s['id_sc']; ?>" class="btn btn-xs" style="background-color: #3c8dbc; color:white;"><i class="fas fa-edit mr-1"></i>Edit</a>
                                       <a href="<?= base_url(); ?>dss/hapus_sc/<?= $s['id_sc']; ?>" class="btn btn-xs button-delete" style="background-color: #ff851b;"><i class="fas fa-eraser mr-1"></i>Delete</a>
                                    </td>
                                 </tr>
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