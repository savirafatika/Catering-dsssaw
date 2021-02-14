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
                     <div class="col-sm-6">
                        <h3 class="m-0 text-dark">Simple Additive Weighting</h3>
                     </div><!-- /.col -->
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="mr-2"><a href="<?= base_url('dss/add_av'); ?>" class="btn btn-primary mb-3"><i class="fas fa-plus mr-2"></i>New Alternative Value</a></li>
                           <li><a href="<?= base_url('dss/ranked'); ?>" class="btn btn-info mb-3"><i class="fas fa-infinity mr-2"></i>Show Result</a></li>
                        </ol>
                     </div><!-- /.col -->
                  </div><!-- /.row -->
               </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
            <div class="flash-data-danger" data-flashdanger="<?= $this->session->flashdata('message-danger'); ?>"></div>

            <div class="callout callout-info alert">
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               <h5><i class="fas fa-info"></i> Note:</h5>
               - Show Final Score in <i class="fas fa-wrench ml-1 mr-1"></i> (Toggle Button) dan click "Ranking" to process the ranking. <br>
               - <i style="color: red;">Clear Result</i> will be delete all data ranked. And <i style="color: red;">Delete All</i> will be delete all data matrix <i style="color: darkgreen;">(X), (R), (P).</i><br>
            </div>

            <div class="row">
               <!-- Decision Matrix -->
               <div class="col-lg-12" style="height: min-content;">
                  <div class="card">
                     <div class="card-header mt-1">
                        <h3 class="card-title">Decision Matrix <i style="color: darkgreen;">(X)</i></h3>
                        <div class="card-tools float-right">
                           <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                           <div class="btn-group">
                              <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                 <i class="fas fa-wrench"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-right" role="menu">
                                 <a href="#" class="dropdown-item" data-toggle="modal" data-target="#exampleModalLong">Show Final Score</a>
                                 <a href="<?= base_url('dss/hapusemua_result'); ?>" class="dropdown-item button-deleteall" style="color: red;">Clear Results</a>
                                 <a href="<?= base_url('dss/hapusemua_matrix'); ?>" class="dropdown-item button-deleteall" style="color: red;">Delete All</a>
                              </div>
                           </div>
                           <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                        </div>
                     </div>
                     <!-- /.card-header -->
                     <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                           <thead style="text-align: center;">
                              <tr>
                                 <th rowspan="2">No</th>
                                 <th rowspan="2">Alternatif</th>
                                 <th colspan="6">Criteria</th>
                                 <th rowspan="2">Action</th>
                              </tr>
                              <tr>
                                 <?php foreach ($cr as $c) : ?>
                                    <th><?= $c['id_criteria']; ?></th>
                                 <?php endforeach; ?>
                              </tr>
                           </thead>
                           <tbody>
                              <?php $i = 1; ?>
                              <?php foreach ($matriks as $m) : ?>
                                 <tr>
                                    <th><?= $i; ?></th>
                                    <td><?= $m['mp_name']; ?></td>
                                    <td><?= $m['c1']; ?></td>
                                    <td><?= $m['c2']; ?></td>
                                    <td><?= $m['c3']; ?></td>
                                    <td><?= $m['c4']; ?></td>
                                    <td><?= $m['c5']; ?></td>
                                    <td><?= $m['c6']; ?></td>
                                    <td align="center">
                                       <a href="<?= base_url(); ?>dss/edit_matrix/<?= $m['id_mat']; ?>" class="btn btn-xs" style="background-color: #3c8dbc; color:white;"><i class="fas fa-edit mr-1"></i>Edit</a>
                                       <a href="<?= base_url(); ?>dss/hapus_matrix/<?= $m['id_mat']; ?>" class="btn btn-xs button-delete" style="background-color: #ff851b;"><i class="fas fa-eraser mr-1"></i>Delete</a>
                                    </td>
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

               <!-- Normalization Matrix -->
               <div class="col-lg-12" style="height: min-content;">
                  <div class="card">
                     <div class="card-header mt-1">
                        <h3 class="card-title">Normalization Matrix <i style="color: darkgreen;">(R)</i></h3>
                        <div class="card-tools float-right">
                           <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                           <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                        </div>
                     </div>
                     <!-- /.card-header -->
                     <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                           <thead style="text-align: center">
                              <tr>
                                 <th rowspan="2">No</th>
                                 <th rowspan="2">Alternatif</th>
                                 <th colspan="6">Criteria</th>
                              </tr>
                              <tr>
                                 <?php foreach ($cr as $c) : ?>
                                    <th><?= $c['id_criteria']; ?></th>
                                 <?php endforeach; ?>
                              </tr>
                           </thead>
                           <tbody>
                              <?php $i = 1; ?>
                              <?php foreach ($matriks as $m) : ?>
                                 <tr>
                                    <th><?= $i; ?></th>
                                    <td><?= $m['mp_name']; ?></td>
                                    <td><?= round($m['c1'] / intval($max1['C1']), 2); ?></td>
                                    <td><?= round(intval($min2['C2']) / $m['c2'], 2); ?></td>
                                    <td><?= round($m['c3'] / intval($max3['C3']), 2); ?></td>
                                    <td><?= round(intval($min4['C4']) / $m['c4'], 2); ?></td>
                                    <td><?= round($m['c5'] / intval($max5['C5']), 2); ?></td>
                                    <td><?= round(intval($min6['C6']) / $m['c6'], 2); ?></td>
                                 </tr>
                                 <?php $i++; ?>
                              <?php endforeach; ?>
                           </tbody>
                        </table>
                     </div>
                     <!-- /.card-body -->
                  </div>
               </div>
               <!-- /.Normalization Matrix -->

               <!-- Preference Value -->
               <div class="col-lg-12" style="height: min-content;">
                  <div class="card">
                     <div class="card-header mt-1">
                        <h3 class="card-title">Preference Value <i style="color: darkgreen;">(P)</i></h3>
                        <div class="card-tools float-right">
                           <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                           <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                        </div>
                     </div>
                     <!-- /.card-header -->
                     <div class="card-body">
                        <table id="example3" class="table table-bordered table-striped">
                           <thead style="text-align: center">
                              <tr>
                                 <th rowspan="2">No</th>
                                 <th rowspan="2">Alternatif</th>
                                 <th colspan="6">Criteria</th>
                                 <th rowspan="2">Final Score</th>
                              </tr>
                              <tr>
                                 <?php foreach ($cr as $c) : ?>
                                    <th><?= $c['id_criteria']; ?></th>
                                 <?php endforeach; ?>
                              </tr>
                           </thead>
                           <tbody>
                              <?php $i = 1; ?>
                              <?php foreach ($matriks as $m) : ?>
                                 <tr>
                                    <th><?= $i; ?></th>
                                    <td><?= $m['mp_name']; ?></td>
                                    <?php $jml1 = round(($m['c1'] / intval($max1['C1'])) * intval($b1['pref']), 2); ?>
                                    <td><?= $jml1; ?></td>
                                    <?php $jml2 = round((intval($min2['C2']) / $m['c2']) * intval($b2['pref']), 2); ?>
                                    <td><?= $jml2; ?></td>
                                    <?php $jml3 = round(($m['c3'] / intval($max3['C3'])) * intval($b3['pref']), 2); ?>
                                    <td><?= $jml3; ?></td>
                                    <?php $jml4 = round((intval($min4['C4']) / $m['c4']) * intval($b4['pref']), 2); ?>
                                    <td><?= $jml4; ?></td>
                                    <?php $jml5 = round(($m['c5'] / intval($max5['C5'])) * intval($b5['pref']), 2); ?>
                                    <td><?= $jml5; ?></td>
                                    <?php $jml6 = round((intval($min6['C6']) / $m['c6']) * intval($b6['pref']), 2); ?>
                                    <td><?= $jml6; ?></td>
                                    <?php
                                    $data = [$jml1, $jml2, $jml3, $jml4, $jml5, $jml6];
                                    $total = array_sum($data);
                                    ?>
                                    <td><?= $total; ?></td>
                                 </tr>
                                 <?php $i++; ?>
                              <?php endforeach; ?>
                           </tbody>
                        </table>
                     </div>
                     <!-- /.card-body -->
                  </div>
               </div>
               <!-- /.Preference Value -->
            </div>

         </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
   </div>

   <!-- modal tampil hasil akhir -->
   <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header popopheader">
               <h4 class="modal-title">Save to Rangking</h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <form action="<?= base_url('dss/rangking'); ?>" method="POST">
               <div class="modal-body-fs container">
                  <table id="fs" class="table table-hover table-bordered table-striped">
                     <thead style="text-align: center">
                        <tr>
                           <th rowspan="2">No</th>
                           <th rowspan="2">Alternatif</th>
                           <th colspan="6">Final Score</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($matriks as $m) : ?>
                           <tr>
                              <th><?= $i; ?></th>
                              <td><?= $m['mp_name']; ?></td>
                              <?php
                              $jml1 = round(($m['c1'] / intval($max1['C1'])) * intval($b1['pref']), 2);
                              $jml2 = round((intval($min2['C2']) / $m['c2']) * intval($b2['pref']), 2);
                              $jml3 = round(($m['c3'] / intval($max3['C3'])) * intval($b3['pref']), 2);
                              $jml4 = round((intval($min4['C4']) / $m['c4']) * intval($b4['pref']), 2);
                              $jml5 = round(($m['c5'] / intval($max5['C5'])) * intval($b5['pref']), 2);
                              $jml6 = round((intval($min6['C6']) / $m['c6']) * intval($b6['pref']), 2);
                              $data = [$jml1, $jml2, $jml3, $jml4, $jml5, $jml6];
                              $total = array_sum($data);
                              ?>
                              <td><?= $total; ?></td>
                           </tr>
                           <input type="hidden" name="Score[]" value="<?= $total; ?>">
                           <input type="hidden" name="matId[]" value="<?= $m['id_mat']; ?>">
                           <input type="hidden" name="mpId[]" value="<?= $m['idv_mp']; ?>">
                           <?php $i++; ?>
                        <?php endforeach; ?>
                     </tbody>
                  </table>
               </div>
               <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Rangking</button>
               </div>
            </form>
         </div>
         <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
   </div>
   <!-- /.modal -->