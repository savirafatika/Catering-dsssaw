   <?php
   $this->db->select('*');
   $this->db->from('menu_package');
   $this->db->order_by('id_mp', 'desc');
   $cr = $this->db->get('')->row_array();
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
                           <h3 class="card-title">Add New Alternative Value</h3>
                           <div class="card-tools">
                              <button type="button" class="btn btn-tool float-right" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                           </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                           <!-- form start -->
                           <form action="<?= base_url('dss/add_av'); ?>" method="POST">
                              <div class="card-body">
                                 <!-- A -->
                                 <div class="form-group">
                                    <label for="Menu">Alternatif</label>
                                    <div class="form-group">
                                       <select class="form-control select2bs4" name="Menu" id="Menu">
                                          <?php foreach ($mpasc as $m) : ?>
                                             <option desc="<?= $m['mp_desc']; ?>" C1="<?= $m['mp_category']; ?>" C2="<?= $m['mp_price']; ?>" C3="<?= $m['mp_event']; ?>" value="<?= $m['id_mp']; ?>"><?= $m['mp_name']; ?></option>
                                          <?php endforeach; ?>
                                       </select>
                                    </div>
                                    <?= form_error('Menu', '<small class="text-danger pl-3" style="text-align: right;">', '</small>'); ?>
                                 </div>
                                 <!-- / A -->
                                 <!-- Desc -->
                                 <div class="form-group">
                                    <label for="k1">Description</label>
                                    <textarea class="form-control" id="des" cols="30" rows="2" readonly> <?= $cr['mp_desc']; ?></textarea>
                                 </div>
                                 <!-- / Desc -->
                                 <!-- C1 -->
                                 <div class="form-group">
                                    <?php
                                    if ($cr['mp_category'] == "Weight") {
                                       $w = 10;
                                    } elseif ($cr['mp_category'] == "Medium") {
                                       $w = 5;
                                    } elseif ($cr['mp_category'] == "Light") {
                                       $w = 1;
                                    }
                                    ?>
                                    <label for="k1">(C1) Jenis Paket</label>
                                    <input type="hidden" name="k1" id="c1" value="<?= $w; ?>">
                                    <input type="text" class="form-control" id="cr1" value="<?= $cr['mp_category']; ?>" readonly>
                                    <?= form_error('k1', '<small class="text-danger pl-3" style="text-align: right;">', '</small>'); ?>
                                 </div>
                                 <!-- / C1 -->
                                 <!-- C2 -->
                                 <div class="form-group">
                                    <?php
                                    if ($cr['mp_price'] <= 100000) {
                                       $p = 25;
                                    } elseif ($cr['mp_price'] >= 101000 && $cr['mp_price'] <= 150000) {
                                       $p = 20;
                                    } elseif ($cr['mp_price'] >= 151000) {
                                       $p = 10;
                                    }
                                    ?>
                                    <label for="k2">(C2) Jumlah Anggaran</label>
                                    <input type="hidden" name="k2" id="c2" value="<?= $p ?>">
                                    <input type="text" class="form-control" id="cr2" value="<?= $cr['mp_price'] ?>" readonly>
                                    <?= form_error('k2', '<small class="text-danger pl-3" style="text-align: right;">', '</small>'); ?>
                                 </div>
                                 <!-- / C2 -->
                                 <!-- C3 -->
                                 <div class="form-group">
                                    <?php
                                    if ($cr['mp_event'] == "Formal") {
                                       $ev = 10;
                                    } elseif ($cr['mp_event'] == "Semi Formal") {
                                       $ev = 7;
                                    } elseif ($cr['mp_event'] == "Casual") {
                                       $ev = 4;
                                    }
                                    ?>
                                    <label for="k3">(C3) Tema Acara</label>
                                    <input type="hidden" name="k3" id="c3" value="<?= $ev; ?>">
                                    <input type="text" class="form-control" id="cr3" value="<?= $cr['mp_event']; ?>" readonly>
                                    <?= form_error('k3', '<small class="text-danger pl-3" style="text-align: right;">', '</small>'); ?>
                                 </div>
                                 <!-- / C3 -->
                                 <!-- C4 -->
                                 <div class=" form-group">
                                    <label for="k4">(C4) Masa Kadaluarsa</label>
                                    <select class="form-control select2bs4" name="k4" id="k4">
                                       <?php foreach ($C4 as $k4) : ?>
                                          <?php
                                          if ($k4['sub'] == 'Shorter') {
                                             $ex = "< 12 jam";
                                          } elseif ($k4['sub'] == 'Average') {
                                             $ex = "12 - 36 jam";
                                          } elseif ($k4['sub'] == 'Long') {
                                             $ex = "> 36 jam";
                                          }
                                          ?>
                                          <option value="<?= $k4['weight']; ?>"><?= $k4['sub'] . " atau " . $ex; ?></option>
                                       <?php endforeach; ?>
                                    </select>
                                    <?= form_error('k4', '<small class="text-danger pl-3" style="text-align: right;">', '</small>'); ?>
                                 </div>
                                 <!-- / C4 -->
                                 <!-- c5 -->
                                 <div class="form-group">
                                    <label for="k5">(C5) Bahan Makanan</label>
                                    <select class="form-control select2bs4" name="k5" id="k5">
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
                                       <?php foreach ($C6 as $k6) : ?>
                                          <?php
                                          if ($k6['sub'] == 'Little') {
                                             $kal = "< 600 kal";
                                          } elseif ($k6['sub'] == 'Enough') {
                                             $kal = "600 - 800 kal";
                                          } elseif ($k6['sub'] == 'Many') {
                                             $kal = "> 800 kal";
                                          }
                                          ?>
                                          <option value="<?= $k6['weight']; ?>"><?= $k6['sub'] . " atau " . $kal; ?></option>
                                       <?php endforeach; ?>
                                    </select>
                                    <?= form_error('k6', '<small class="text-danger pl-3" style="text-align: right;">', '</small>'); ?>
                                 </div>
                                 <!-- / C6 -->
                              </div>
                              <!-- /.card-body -->
                              <button type="submit" class="btn" style="background-color: #adb5bd;"><i class="fas fa-plus mr-2"></i>Add</button>
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