<div class="wrapper">

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header ml-3">
         <div class="container-fluid">
            <div class="row mb-2">
               <h4 class="m-0 text-dark">All Data Ordered</h4>
            </div><!-- /.row -->
         </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
      <div class="flash-data-danger" data-flashdanger="<?= $this->session->flashdata('message-danger'); ?>"></div>
      <!-- Main content -->
      <section class="content">
         <div class="container-fluid">
            <!-- table -->
            <div class="col-lg-12" style="height: min-content;">
               <div class="card">
                  <div class="card-header mt-1">
                     <h3 class="card-title">Sales Report</h3>
                     <div class="card-tools float-right">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                     </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                     <table id="order" class="table table-bordered table-striped">
                        <thead style="text-align: center">
                           <tr>
                              <th>No</th>
                              <th>Invoice</th>
                              <th>Date Order</th>
                              <th>Product Name</th>
                              <th>Qty</th>
                              <th>Subtotal</th>
                              <th>Amount Due</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php $i = 1; ?>
                           <?php foreach ($Order as $o) : ?>
                              <tr>
                                 <th><?= $i; ?></th>
                                 <td><?= $o['no_invoice']; ?></td>
                                 <td><?= $o['date_ordered']; ?></td>
                                 <td><?= $o['mp_name']; ?></td>
                                 <td><?= $o['qty']; ?></td>
                                 <td>Rp. <?= number_format($o['bill'], 2, ",", "."); ?></td>
                                 <td><?= date("d F Y", strtotime('+1 days', strtotime($o['date_ordered']))); ?></td>
                              </tr>
                              <?php $i++; ?>
                           <?php endforeach; ?>
                        </tbody>
                        <tr>
                           <td colspan="4" align="right">Total Income</td>
                           <td><?= $qty['qty']; ?></td>
                           <td colspan="3">Rp. <?= number_format($ttl['bill'], 2, ",", "."); ?></td>
                        </tr>
                     </table>
                  </div>
                  <!-- /.card-body -->
               </div>
            </div>
            <!-- /.table -->

         </div>
         <!-- /.card-body -->

   </div>
   <!-- /.card -->
</div>

</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>