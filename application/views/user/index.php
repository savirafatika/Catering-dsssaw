<div class="wrapper">

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">

      <!-- Main content -->
      <section class="content">
         <div class="container-fluid">

            <!-- Content Header (Page header) -->
            <div class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <h1 class="m-0 text-dark">Your Data</h1>
                  </div><!-- /.row -->
               </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <div class="log" data-log="<?= $this->session->flashdata('log'); ?>"></div>
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
            <div class="flash-data-danger" data-flashdanger="<?= $this->session->flashdata('message-danger'); ?>"></div>

            <div class="d-flex align-items-stretch">
               <div class="card bg-light">
                  <div class="card-body">
                     <div class="row">
                        <div class="col-7 mt-3">
                           <h2 class="lead"><b><?= $user['name']; ?></b></h2>
                           <ul class="ml-4 mb-0 fa-ul text-muted">
                              <li><span class="fa-li"><i class="fas fa-envelope"></i></span> <?= $user['email']; ?></li>
                              <li><span class="fa-li"><i class="fas fa-map-marker-alt"></i></span> <?= $user['address']; ?></li>
                              <li><span class="fa-li"><i class="fas fa-phone-alt"></i></span><?= $user['phone']; ?></li>
                           </ul>
                        </div>
                        <div class="col-5 mt-4 text-center">
                           <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" style="width: 130px; height: 130px;" class="img-circle img-fluid">
                        </div>
                     </div>
                  </div>
                  <div class="card-footer">
                     <div class="text-right">
                        Member since <?= date('d F Y', $user['since']); ?>
                     </div>
                  </div>
               </div>
            </div>

         </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
   </div>