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
                     <h1 class="m-0 text-dark">Add Criteria</h1>
                  </div><!-- /.row -->
               </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
            <div class="flash-data-danger" data-flashdanger="<?= $this->session->flashdata('message-danger'); ?>"></div>

            <!-- card add -->
            <div class="card col-md-7">
               <div class="card-header mt-1">
                  <h3 class="card-title">Add Data</h3>
                  <div class="card-tools">
                     <button type="button" class="btn btn-tool float-right" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                  </div>
               </div>
               <!-- /.card-header -->
               <div class="card-body">
                  <!-- form start -->
                  <?php echo form_open_multipart('dss/add_criteria'); ?>
                  <div class="card-body">
                     <!-- Id Criteria -->
                     <?php
                     $table = "criteria";
                     $field = "id_criteria";

                     $last_code = $this->dss->getCode($table, $field);
                     // mengambil 2 karakter dari belakang
                     $noUrut = (int) substr($last_code, -2, 2);
                     $noUrut++;
                     $str = "C";

                     $newCode = $str . sprintf('%02s', $noUrut);
                     ?>
                     <div class="form-group">
                        <label for="Id_Criteria">Criteria Code</label>
                        <input type="text" class="form-control" id="Code" name="Code" value="<?= $newCode; ?>" readonly>
                     </div>
                     <!-- / Id Criteria -->
                     <!-- Name Criteria -->
                     <div class="form-group">
                        <label for="Criteria">Criteria Name</label>
                        <input type="text" class="form-control" id="Criteria" name="Criteria" placeholder="size, expired, ..">
                        <?= form_error('Criteria', '<small class="text-danger pl-3" style="text-align: right;">', '</small>'); ?>
                     </div>
                     <!-- / Name Criteria -->
                     <!-- Event Criteria -->
                     <div class="form-group">
                        <label for="Type">Type</label>
                        <div class="form-group">
                           <select class="form-control select2bs4" name="Type" id="Type">
                              <option value="Benefit">Benefit</option>
                              <option value="Cost">Cost</option>
                           </select>
                        </div>
                        <?= form_error('Type', '<small class="text-danger pl-3">', '</small>'); ?>
                     </div>
                     <!-- / Event Criteria -->
                     <!-- Price Criteria -->
                     <div class="form-group">
                        <label for="Pref">Preference Weights</label>
                        <input type="text" class="form-control" id="Pref" name="Pref" placeholder="10, 30, 100 (in Percent) just write number">
                        <?= form_error('Pref', '<small class="text-danger pl-3">', '</small>'); ?>
                     </div>
                     <!-- / Price Criteria -->
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