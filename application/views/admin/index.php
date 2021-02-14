<div class="wrapper">

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
      <!-- Main content -->
      <section class="content">
         <div class="container-fluid">
            <div class="log" data-log="<?= $this->session->flashdata('log'); ?>"></div>
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
            <div class="flash-data-danger" data-flashdanger="<?= $this->session->flashdata('message-danger'); ?>"></div>
            <!-- Small boxes (Stat box) -->
            <div class="row mt-3">
               <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-info">
                     <div class="inner">
                        <h3>
                           <?php
                           $this->db->from('criteria');
                           echo $this->db->count_all_results();
                           ?>
                        </h3>
                        <p>DSS Criteria</p>
                     </div>
                     <div class="icon">
                        <i class="ion ion-bookmark"></i>
                     </div>
                     <a href="<?= base_url('dss/criteria'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
               </div>
               <!-- ./col -->
               <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-success">
                     <div class="inner">
                        <h3>
                           <?php
                           $this->db->from('menu_package');
                           echo $this->db->count_all_results();
                           ?>
                        </h3>
                        <p>Food Menu Packages</p>
                     </div>
                     <div class="icon">
                        <i class="ion ion-pizza"></i>
                     </div>
                     <a href="<?= base_url('dss'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
               </div>
               <!-- ./col -->
               <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-warning">
                     <div class="inner">
                        <h3>
                           <?php
                           $this->db->from('user');
                           $this->db->where('role_id', 2);
                           echo $this->db->count_all_results();
                           ?>
                        </h3>
                        <p>User Registrations</p>
                     </div>
                     <div class="icon">
                        <i class="ion ion-person-add"></i>
                     </div>
                     <a href="<?= base_url('admin/member'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
               </div>
               <!-- ./col -->
               <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-danger">
                     <div class="inner">
                        <h3>
                           <?php
                           $this->db->from('user_sub_menu');
                           echo $this->db->count_all_results();
                           ?>
                        </h3>
                        <p>Side Bar Sub Menu</p>
                     </div>
                     <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                     </div>
                     <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
               </div>
               <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- col -->
            <div class="row">
               <!-- col left -->
               <!-- col -->
               <div class="col-lg-6">
                  <div class="card">
                     <div class="card-header border-0">
                        <h3 class="card-title">5 Latest Orders</h3>
                     </div>
                     <div class="card-body table-responsive p-0">
                        <table class="table table-striped table-valign-middle">
                           <thead>
                              <tr>
                                 <th>Menu Package</th>
                                 <th>Price</th>
                                 <th>Type</th>
                                 <th>Qty</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php foreach ($Order as $o) : ?>
                                 <tr>
                                    <td>
                                       <img src="<?= base_url('assets/img/menu/') . $o['mp_image']; ?>" alt="mp" class="img-size-32 mr-2" style="width: 70px; height: 60px;">
                                       <?= $o['mp_name']; ?>
                                    </td>
                                    <td>Rp <?= number_format($o['bill'], 2, ",", "."); ?></td>
                                    <td>
                                       <span><?= $o['p_type']; ?></span>
                                    </td>
                                    <td>
                                       <a href="#" class="text-muted">
                                          <?= $o['qty']; ?>
                                       </a>
                                    </td>
                                 </tr>
                              <?php endforeach; ?>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <!-- /.card -->
               </div>
               <!-- /col -->
               <!-- /col left -->
               <!-- col right -->
               <div class="col-lg-6">
                  <div class="card">
                     <div class="card-header border-0">
                        <h3 class="card-title">Recently 3 Added DSS App</h3>
                     </div>
                     <div class="card-body">
                        <?php foreach ($rct as $r) : ?>
                           <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                              <p class="text-success text-xl">
                                 <img src="<?= base_url('assets/img/menu/') . $r['mp_image']; ?>" style="width: 120px; height: 110px;">
                              </p>
                              <p class="d-flex flex-column text-right">
                                 <span class="font-weight-bold">
                                    Score : <?= $r['score']; ?>
                                 </span>
                                 <span class="text-muted"><?= $r['mp_name']; ?></span>
                              </p>
                           </div>
                        <?php endforeach; ?>
                        <!-- /.d-flex -->
                     </div>
                  </div>
               </div>
               <!-- /col right -->
            </div>
            <!-- /.col -->
         </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
   </div>