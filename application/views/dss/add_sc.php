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
                     <h1 class="m-0 text-dark">Add Sub Criteria</h1>
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
                  <?php echo form_open_multipart('dss/add_sc'); ?>
                  <div class="card-body">
                     <!-- Id SCriteria -->
                     <?php
                     $table = "sub_criteria";
                     $field = "id_sc";

                     $last_code = $this->dss->getCode($table, $field);
                     // mengambil 2 karakter dari belakang
                     $noUrut = (int) substr($last_code, -2, 2);
                     $noUrut++;
                     $str = "SC";

                     $newCode = $str . sprintf('%02s', $noUrut);
                     ?>
                     <div class="form-group">
                        <label for="Id_SC">Code</label>
                        <input type="text" class="form-control" id="Code" name="Code" value="<?= $newCode; ?>" readonly>
                     </div>
                     <!-- / Id SCriteria -->
                     <!-- Name SCriteria -->
                     <div class="form-group">
                        <label for="Sub">Sub Criteria Name</label>
                        <input type="text" class="form-control" id="SCriteria" name="SCriteria" placeholder="low, high, cheap, expensive,  ..">
                        <?= form_error('SCriteria', '<small class="text-danger pl-3" style="text-align: right;">', '</small>'); ?>
                     </div>
                     <!-- / Name SCriteria -->
                     <!-- Weight Criteria -->
                     <div class="form-group">
                        <label for="Weight">Weights</label>
                        <input type="text" class="form-control" id="Weight" name="Weight" placeholder="10, 30 (max weight on preference weight Criteria) just write number">
                        <?= form_error('Weight', '<small class="text-danger pl-3">', '</small>'); ?>
                     </div>
                     <!-- / Weight Criteria -->
                     <!-- SCid -->
                     <div class="form-group">
                        <label for="SCid">Criteria</label>
                        <div class="form-group">
                           <select class="form-control select2bs4" name="SCid" id="SCid">
                              <?php foreach ($criteria as $c) : ?>
                                 <option value="<?= $c['id_criteria']; ?>"><?= $c['c_name']; ?></option>
                              <?php endforeach; ?>
                           </select>
                        </div>
                        <?= form_error('SCid', '<small class="text-danger pl-3">', '</small>'); ?>
                     </div>
                     <!-- / SCid -->
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