   <?php
   $this->db->select('*');
   $this->db->from('menu_package');
   $this->db->order_by('id_mp', 'desc');
   $cr = $this->db->get('')->row_array();
   ?>
   <?php
   if ($mat_row['c4'] == "20") {
      $cr4 = "Shorter";
   } elseif ($mat_row['c4'] == "10") {
      $cr4 = "Average";
   } elseif ($mat_row['c4'] == "3") {
      $cr4 = "Long";
   }

   if ($mat_row['c5'] == "20") {
      $cr5 = "Organic";
   } elseif ($mat_row['c5'] == "10") {
      $cr5 = "Non-Organic";
   } elseif ($mat_row['c5'] == "5") {
      $cr5 = "Instant";
   }

   if ($mat_row['c6'] == "15") {
      $cr6 = "Little";
   } elseif ($mat_row['c6'] == "7") {
      $cr6 = "Enough";
   } elseif ($mat_row['c6'] == "3") {
      $cr6 = "Many";
   }
   ?>
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
                        <!-- <h1 class="m-0 text-dark">Add New Alternative Value</h1> -->
                     </div><!-- /.row -->
                  </div><!-- /.container-fluid -->
               </div>
               <!-- /.content-header -->
               <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
               <div class="flash-data-danger" data-flashdanger="<?= $this->session->flashdata('message-danger'); ?>"></div>

               <div class="row">
                  <div class="col-lg-7" style="height: min-content;">
                     <!-- card add -->
                     <div class="card">
                        <div class="card-header mt-1">
                           <h3 class="card-title">Edit Alternative Value</h3>
                           <div class="card-tools">
                              <button type="button" class="btn btn-tool float-right" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                           </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                           <!-- form start -->
                           <form action="" method="POST">
                              <div class="card-body">
                                 <input type="hidden" name="id_mat" value="<?= $mat_row['id_mat']; ?>">
                                 <!-- C4 -->
                                 <div class=" form-group">
                                    <label for="k4">(C4) Masa Kadaluarsa</label>
                                    <select class="form-control select2bs4" name="k4" id="k4">
                                       <option value="<?= $mat_row['c4']; ?>"><?= $cr4; ?></option>
                                       <?php foreach ($C4 as $k4) : ?>
                                          <option value="<?= $k4['weight']; ?>"><?= $k4['sub']; ?></option>
                                       <?php endforeach; ?>
                                    </select>
                                    <?= form_error('k4', '<small class="text-danger pl-3" style="text-align: right;">', '</small>'); ?>
                                 </div>
                                 <!-- / C4 -->
                                 <!-- c5 -->
                                 <div class="form-group">
                                    <label for="k5">(C5) Bahan Makanan</label>
                                    <select class="form-control select2bs4" name="k5" id="k5">
                                       <option value="<?= $mat_row['c5']; ?>"><?= $cr5; ?></option>
                                       <?php foreach ($C5 as $k5) : ?>
                                          <option value="<?= $k5['weight']; ?>"><?= $k5['sub']; ?></option>
                                       <?php endforeach; ?>
                                    </select>
                                    <?= form_error('k5', '<small class="text-danger pl-3" style="text-align: right;">', '</small>'); ?>
                                 </div>
                                 <!-- / C5 -->
                                 <!-- C6 -->
                                 <div class="form-group">
                                    <label for="k6">(C6) Kalori Per Sajian</label>
                                    <select class="form-control select2bs4" name="k6" id="k6">
                                       <option value="<?= $mat_row['c6']; ?>"><?= $cr6; ?></option>
                                       <?php foreach ($C6 as $k6) : ?>
                                          <option value="<?= $k6['weight']; ?>"><?= $k6['sub']; ?></option>
                                       <?php endforeach; ?>
                                    </select>
                                    <?= form_error('k6', '<small class="text-danger pl-3" style="text-align: right;">', '</small>'); ?>
                                 </div>
                                 <!-- / C6 -->
                              </div>
                              <!-- /.card-body -->
                              <button type="submit" class="btn" style="background-color: #adb5bd;"><i class="fas fa-pen-alt mr-2"></i>Edit</button>
                           </form>
                           <!-- form close -->
                        </div>
                        <!-- /.card-body -->
                     </div>
                     <!-- /.card add -->
                  </div>
               </div>

            </div><!-- /.container-fluid -->
         </section>
         <!-- /.content -->
      </div>