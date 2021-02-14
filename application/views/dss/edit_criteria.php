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
                     <h1 class="m-0 text-dark">Edit Criteria</h1>
                  </div><!-- /.row -->
               </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
            <div class="flash-data-danger" data-flashdanger="<?= $this->session->flashdata('message-danger'); ?>"></div>

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
                        <input type="hidden" name="id_criteria" value="<?= $cr_row['id_criteria']; ?>">
                        <!-- Name MP -->
                        <div class="form-group">
                           <label for="Criteria">Criteria Name</label>
                           <input type="text" class="form-control" id="Criteria" name="Criteria" value="<?= $cr_row['c_name']; ?>">
                           <?= form_error('Criteria', '<small class="text-danger pl-3" style="text-align: right;">', '</small>'); ?>
                        </div>
                        <!-- / Name MP -->
                        <!-- Category -->
                        <div class="form-group">
                           <label for="Type">Type</label>
                           <div class="form-group">
                              <select class="form-control select2bs4" name="Type" id="Type">
                                 <option value="<?= $cr_row['type']; ?>"><?= $cr_row['type']; ?></option>
                                 <option value="Benefit">Benefit</option>
                                 <option value="Cost">Cost</option>
                              </select>
                           </div>
                           <?= form_error('Type', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <!-- / Category -->
                        <!-- Desc MP -->
                        <div class="form-group">
                           <label for="Pref">Preference Weights</label>
                           <input type="text" class="form-control" id="Pref" name="Pref" value="<?= $cr_row['pref']; ?>">
                           <?= form_error('Pref', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <!-- / Desc MP -->
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