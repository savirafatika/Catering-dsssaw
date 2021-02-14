<div class="wrapper">

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header ml-3">
         <div class="container-fluid">
            <div class="row mb-2">
               <h4 class="m-0 text-dark">Choose the package you needs</h4>
            </div><!-- /.row -->
         </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
      <div class="flash-data-danger" data-flashdanger="<?= $this->session->flashdata('message-danger'); ?>"></div>


      <!-- Main content -->
      <section class="content">
         <div class="container-fluid">
            <div class="callout callout-info alert">
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               <h5><i class="fas fa-info"></i> Note:</h5>
               - Select the criteria option below, the table will display the menu package data that the system has recommended according to the selected criteria. <br>
               - Search data from select options is single, multiple filters cannot. This means that the data is displayed only according to one choice, select an option. <br>
               - Budget Amount category: Cheap < Rp. 101.000, Usual Rp. 101.000 - Rp. 150.000, Expensive> Rp. 150.000. <br>
                  - Calories Per Serving: Little < 600 kal, Enough 600 - 800kal, Many> 800kal
            </div>

            <div class="row">
               <!-- jumlah Anggaran -->
               <div class="col-lg-3 col-md-6 col-sm-12">
                  <div class=" form-group">
                     <select class="form-control select2bs4" name="k2" id="k2">
                        <option>- Budget Amount -</option>
                        <?php foreach ($C2 as $k2) : ?>
                           <option value="<?= $k2['weight']; ?>"><?= $k2['sub']; ?></option>
                        <?php endforeach; ?>
                     </select>
                  </div>
               </div>
               <!-- /.jumlah anggaran -->
               <!-- masa kadaluarsa -->
               <div class="col-lg-3 col-md-6 col-sm-12">
                  <div class=" form-group">
                     <select class="form-control select2bs4" name="k4" id="k4">
                        <option>- Expired Time -</option>
                        <?php foreach ($C4 as $k4) : ?>
                           <option value="<?= $k4['weight']; ?>"><?= $k4['sub']; ?></option>
                        <?php endforeach; ?>
                     </select>
                  </div>
               </div>
               <!-- /.masa kadaluarsa -->
               <!-- bahan makanan -->
               <div class="col-lg-3 col-md-6 col-sm-12">
                  <div class="form-group">
                     <select class="form-control select2bs4" name="k5" id="k5">
                        <option>- Food Material -</option>
                        <?php foreach ($C5 as $k5) : ?>
                           <option value="<?= $k5['weight']; ?>"><?= $k5['sub']; ?></option>
                        <?php endforeach; ?>
                     </select>
                  </div>
               </div>
               <!-- /.bahan makanan -->
               <!-- kalori/sajian -->
               <div class="col-lg-3 col-md-6 col-sm-12">
                  <div class="form-group">
                     <select class="form-control select2bs4" name="k6" id="k6">
                        <option>- Calories Per Serving -</option>
                        <?php foreach ($C6 as $k6) : ?>
                           <option value="<?= $k6['weight']; ?>"><?= $k6['sub']; ?></option>
                        <?php endforeach; ?>
                     </select>
                  </div>
               </div>
               <!-- /.kalori/sajian -->
            </div>

            <div class="row">
               <!-- Decision Matrix -->
               <div class="col-lg-12" style="height: min-content;">
                  <div class="card">
                     <div class="card-header mt-1">
                        <h3 class="card-title">All Category Ranked</h3>
                        <div class="card-tools float-right">
                           <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                           <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                        </div>
                     </div>
                     <!-- /.card-header -->
                     <div class="card-body">
                        <table id="rec" class="table table-bordered table-striped">
                           <thead style="text-align: center;">
                              <tr>
                                 <th>Ranked</th>
                                 <th>Image</th>
                                 <th>Alternatif</th>
                                 <th>Category</th>
                                 <th>Price</th>
                                 <th>Event</th>
                                 <th>Type</th>
                                 <th>Description</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php $i = 1; ?>
                              <?php foreach ($result as $r) : ?>
                                 <tr>
                                    <th><?= $i; ?></th>
                                    <td>
                                       <img src="<?= base_url('assets/img/menu/') . $r['mp_image']; ?>" alt="profile picture" style="width: 150px; height: 100px;">
                                    </td>
                                    <td><?= $r['mp_name']; ?></td>
                                    <td style="color: white;">
                                       <?php
                                       if ($r['mp_category'] == 'Weight') {
                                          echo '<a class="badge" style="background-color: #605ca8;">Weight</a>';
                                       } else if ($r['mp_category'] == 'Medium') {
                                          echo '<a class="badge" style="background-color: #39cccc;">Medium</a>';
                                       } else if ($r['mp_category'] == 'Light') {
                                          echo '<a class="badge" style="background-color: #e83e8c;">Light</a>';
                                       }
                                       ?>
                                    </td>
                                    <td><?= number_format($r['mp_price'], 2, ",", "."); ?></td>
                                    <td><?= $r['mp_event']; ?></td>
                                    <td><?= $r['p_type']; ?></td>
                                    <td><?= $r['mp_desc']; ?></td>
                                 </tr>
                                 <?php $i++; ?>
                              <?php endforeach; ?>
                           </tbody>
                        </table>
                     </div>
                     <!-- /.card-body -->
                  </div>
               </div>
               <!-- /.Decision Matrix -->
            </div>
         </div>

   </div><!-- /.container-fluid -->
   </section>
   <!-- /.content -->
</div>