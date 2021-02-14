<div class="wrapper">

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
      <!-- Main content -->
      <section class="content">
         <div class="container-fluid">
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
            <div class="flash-data-danger" data-flashdanger="<?= $this->session->flashdata('message-danger'); ?>"></div>

            <div class="row">
               <!-- .container-fluid mt-3 -->
               <div class="container-fluid mt-3">
                  <h3>Menu Package</h3>
                  <div class="row">
                     <!-- slider -->
                     <div class="col-md-6 mt-2">
                        <div class="card">
                           <div class="card-header">
                              <h3 class="card-title">#3 Top Menu Package</h3>
                           </div>
                           <!-- /.card-header -->
                           <div class="card-body">
                              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                 <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                 </ol>
                                 <div class="carousel-inner">
                                    <div class="carousel-item active">
                                       <img class="d-block w-100" style="height: 320px;" src="https://placehold.it/900x500/F1A621/ffffff&text=All+Category" alt="Second slide">
                                    </div>
                                    <?php foreach ($Slider as $s) : ?>
                                       <div class="carousel-item">
                                          <img class="d-block w-100" style="height: 320px;" src="<?= base_url('assets/img/menu/') . $s['mp_image']; ?>">
                                       </div>
                                    <?php endforeach; ?>
                                 </div>
                                 <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                 </a>
                                 <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                 </a>
                              </div>
                           </div>
                           <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                     </div>
                     <!-- /.slider -->
                     <!-- special sharing -->
                     <div class="col-md-6 mt-2">
                        <div class="card" style="height: 406px;">
                           <div class="card-header">
                              <h3 class="card-title">Special Sharing Menu Package</h3>
                           </div>
                           <!-- /.card-header -->
                           <div class="card-body">
                              <ol>
                                 <?php foreach ($Sharing as $sh) : ?>
                                    <li style="margin-bottom: 2%;"><?= $sh['mp_name']; ?> / <i style="color: darkblue;">Rp. <?= number_format($sh['mp_price'], 2, ",", "."); ?></i>
                                       <ul>
                                          <li><?= $sh['mp_desc']; ?></li>
                                       </ul>
                                    </li>
                                 <?php endforeach; ?>
                              </ol>
                           </div>
                           <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                     </div>
                     <!-- /.special sharing -->
                  </div>
                  <h3 class="mt-2">Category</h3>
                  <div class="row">
                     <div class="col-12">
                        <!-- Custom Tabs -->
                        <div class="card">
                           <div class="card-header d-flex p-0">
                              <ul class="nav nav-pills ml-auto p-2">
                                 <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Rice Box</a></li>
                                 <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Snack Box</a></li>
                                 <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Dessert Box</a></li>
                                 <li class="nav-item"><a class="nav-link" href="#tab_4" data-toggle="tab">Sharing</a></li>
                                 <li class="nav-item"><a class="nav-link" href="#tab_5" data-toggle="tab">Buffet</a></li>
                              </ul>
                           </div><!-- /.card-header -->
                           <div class="card-body">
                              <div class="tab-content">
                                 <div class="tab-pane active" id="tab_1">
                                    <div class="row">
                                       <?php foreach ($RB as $rb) : ?>
                                          <div class="col-md-3">
                                             <div class="card">
                                                <div class="card-body">
                                                   <img class="d-block w-100" style="height: 180px;" src="<?= base_url('assets/img/menu/') . $rb['mp_image']; ?>">
                                                </div>
                                                <!-- /.card-body -->
                                                <div class="card-footer">
                                                   <?= $rb['mp_name']; ?> / <i style="color: darkblue;">Rp. <?= number_format($rb['mp_price'], 2, ",", "."); ?></i>
                                                </div>
                                             </div>
                                          </div>
                                       <?php endforeach; ?>
                                    </div>
                                 </div>
                                 <!-- /.tab-pane -->
                                 <div class="tab-pane" id="tab_2">
                                    <div class="row">
                                       <?php foreach ($SB as $sb) : ?>
                                          <div class="col-md-3">
                                             <div class="card">
                                                <div class="card-body">
                                                   <img class="d-block w-100" style="height: 180px;" src="<?= base_url('assets/img/menu/') . $sb['mp_image']; ?>">
                                                </div>
                                                <!-- /.card-body -->
                                                <div class="card-footer">
                                                   <?= $sb['mp_name']; ?> / <i style="color: darkblue;">Rp. <?= number_format($sb['mp_price'], 2, ",", "."); ?></i>
                                                </div>
                                             </div>
                                          </div>
                                       <?php endforeach; ?>
                                    </div>
                                 </div>
                                 <!-- /.tab-pane -->
                                 <div class="tab-pane" id="tab_3">
                                    <div class="row">
                                       <?php foreach ($DB as $db) : ?>
                                          <div class="col-md-3">
                                             <div class="card">
                                                <div class="card-body">
                                                   <img class="d-block w-100" style="height: 180px;" src="<?= base_url('assets/img/menu/') . $db['mp_image']; ?>">
                                                </div>
                                                <!-- /.card-body -->
                                                <div class="card-footer">
                                                   <?= $db['mp_name']; ?> / <i style="color: darkblue;">Rp. <?= number_format($db['mp_price'], 2, ",", "."); ?></i>
                                                </div>
                                             </div>
                                          </div>
                                       <?php endforeach; ?>
                                    </div>
                                 </div>
                                 <!-- /.tab-pane -->
                                 <div class="tab-pane" id="tab_4">
                                    <div class="row">
                                       <?php foreach ($SH as $shr) : ?>
                                          <div class="col-md-3">
                                             <div class="card">
                                                <div class="card-body">
                                                   <img class="d-block w-100" style="height: 180px;" src="<?= base_url('assets/img/menu/') . $shr['mp_image']; ?>">
                                                </div>
                                                <!-- /.card-body -->
                                                <div class="card-footer">
                                                   <?= $shr['mp_name']; ?> / <i style="color: darkblue;">Rp. <?= number_format($shr['mp_price'], 2, ",", "."); ?></i>
                                                </div>
                                             </div>
                                          </div>
                                       <?php endforeach; ?>
                                    </div>
                                 </div>
                                 <!-- /.tab-pane -->
                                 <div class="tab-pane" id="tab_5">
                                    <div class="row">
                                       <?php foreach ($B as $b) : ?>
                                          <div class="col-md-3">
                                             <div class="card">
                                                <div class="card-body">
                                                   <img class="d-block w-100" style="height: 180px;" src="<?= base_url('assets/img/menu/') . $b['mp_image']; ?>">
                                                </div>
                                                <!-- /.card-body -->
                                                <div class="card-footer">
                                                   <?= $b['mp_name']; ?> / <i style="color: darkblue;">Rp. <?= number_format($b['mp_price'], 2, ",", "."); ?></i>
                                                </div>
                                             </div>
                                          </div>
                                       <?php endforeach; ?>
                                    </div>
                                 </div>
                                 <!-- /.tab-pane -->
                              </div>
                              <!-- /.tab-content -->
                           </div><!-- /.card-body -->
                        </div>
                        <!-- ./card -->
                     </div>

                  </div>
               </div>
               <!-- /.container-fluid mt-3 -->
            </div>

         </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
   </div>