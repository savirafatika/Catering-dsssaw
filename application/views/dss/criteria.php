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
                        <h1 class="m-0 text-dark">Criteria Support System</h1>
                     </div><!-- /.col -->
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="<?= base_url('dss/add_criteria'); ?>" class="btn btn-primary mb-3"><i class="fas fa-plus mr-2"></i>New Criteria</a></li>
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
               - The type of benefit attribute is profit, meaning that the higher the criteria value for the alternative the better.
               <br>- The cost attribute means that the lower the value the better.
               <br>- The preference weights represent the importance of the criteria in the decision support system.
            </div>

            <!-- card table -->
            <div class="card">
               <div class="card-header mt-1">
                  <h3 class="card-title">List Criteria (C)</h3>
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
                           <th>Criteria Name</th>
                           <th>Atribute Type</th>
                           <th>Preference Weights (%)</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php foreach ($criteria as $c) : ?>
                           <tr>
                              <th><?= $c['id_criteria']; ?></th>
                              <td><?= $c['c_name']; ?></td>
                              <td><?= $c['type']; ?></td>
                              <td><?= $c['pref']; ?></td>
                              <td>
                                 <a href="<?= base_url(); ?>dss/edit_criteria/<?= $c['id_criteria']; ?>" class="btn btn-xs" style="background-color: #3c8dbc; color:white;"><i class="fas fa-edit mr-1"></i>Edit</a>
                                 <a href="<?= base_url(); ?>dss/hapus_criteria/<?= $c['id_criteria']; ?>" class="btn btn-xs button-delete" style="background-color: #ff851b;"><i class="fas fa-eraser mr-1"></i>Delete</a>
                              </td>
                           </tr>
                        <?php endforeach; ?>
                     </tbody>
                  </table>
               </div>
               <!-- /.card-body -->
            </div>
            <!-- /.card table -->

         </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
   </div>