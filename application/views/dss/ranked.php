<div class="wrapper">

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
      <!-- Main content -->
      <section class="content">
         <div class="container-fluid">
            <!-- Content Header (Page header) -->
            <div class="content-header">
            </div>
            <!-- /.content-header -->
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
            <div class="flash-data-danger" data-flashdanger="<?= $this->session->flashdata('message-danger'); ?>"></div>

            <div class="row">
               <!-- Decision Matrix -->
               <div class="col-lg-12" style="height: min-content;">
                  <div class="card">
                     <div class="card-header mt-1">
                        <h3 class="card-title">The Result of Ranked</h3>
                        <div class="card-tools float-right">
                           <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                           <div class="btn-group">
                              <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                 <i class="fas fa-wrench"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-right" role="menu">
                                 <a href="<?= base_url('dss/hapusemua_result'); ?>" class="dropdown-item button-deleteall" style="color: red;">Clear Results</a>
                              </div>
                           </div>
                           <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                        </div>
                     </div>
                     <!-- /.card-header -->
                     <div class="card-body">
                        <table id="dtbl4" class="table table-bordered table-striped">
                           <thead style="text-align: center;">
                              <tr>
                                 <th>Ranked</th>
                                 <th>Image</th>
                                 <th>Alternatif</th>
                                 <th>Score</th>
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
                                    <td><?= $r['score']; ?></td>
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

         </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
   </div>