<div class="wrapper">

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header ml-3">
         <div class="container-fluid">
            <div class="row mb-2">
               <h4 class="m-0 text-dark">Order menu package</h4>
            </div><!-- /.row -->
         </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
      <div class="flash-data-danger" data-flashdanger="<?= $this->session->flashdata('message-danger'); ?>"></div>
      <!-- Main content -->
      <section class="content">
         <div class="container-fluid">

            <!-- form start -->
            <?php echo form_open_multipart('catering/ordering'); ?>
            <div class="card-body">
               <!-- form order -->
               <div class="row">
                  <?php
                  $table = "order";
                  $field = "no_invoice";

                  $today = date('ymd');
                  $prefix = "INV" . $today;
                  $last_code = $this->dss->getCode($table, $field);
                  // mengambil 2 karakter dari belakang
                  $noUrut = (int) substr($last_code, -4, 4);
                  $noUrut++;

                  $newCode = $prefix . sprintf('%04s', $noUrut);
                  ?>
                  <input type="hidden" name="invoice" value="<?= $newCode; ?>">
                  <input type="hidden" name="bill" id="bill" value="<?= $MP_row['mp_price']; ?>">
                  <input type="hidden" name="userid" value="<?= $user['id']; ?>">
                  <!-- MP -->
                  <div class="form-group">
                     <label for="menu">Menu Package</label>
                     <select class="form-control select2bs4" name="menu" id="mp_id">
                        <?php foreach ($MP as $mp) : ?>
                           <option price="<?= $mp['mp_price']; ?>" value="<?= $mp['id_mp']; ?>"><?= $mp['mp_name']; ?> / Rp. <?= number_format($mp['mp_price'], 2, ",", "."); ?></i></option>
                        <?php endforeach; ?>
                     </select>
                     <?= form_error('menu', '<small class="text-danger pl-3" style="text-align: right;">', '</small>'); ?>
                  </div>
                  <!-- /.MP -->
                  <!-- QTY -->
                  <div class="form-group">
                     <label for="qty">QTY</label>
                     <input type="number" class="form-control" name="qty" placeholder="1, 2, ..">
                     <?= form_error('qty', '<small class="text-danger pl-3" style="text-align: right;">', '</small>'); ?>
                  </div>
                  <!-- /.QTY -->
                  <!-- button -->
                  <div class="mt-4 ml-1">
                     <button type="submit" class="btn btn-primary mt-2"><i class="fab fa-shopify mr-2"></i>Place Order</button>
                  </div>
                  <!-- /.button -->
               </div>
               <!-- /.form order -->
            </div>
            </form>

            <!-- table -->
            <div class="col-lg-12" style="height: min-content;">
               <div class="card">
                  <div class="card-header mt-1">
                     <h3 class="card-title"><a href="<?= base_url('catering/factur'); ?>" class="btn btn-sm btn-success"><i class="fas fa-download mr-2"></i>Factur</a></h3>
                     <div class="card-tools float-right">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                     </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                     <table id="nobtn" class="table table-bordered table-striped">
                        <thead style="text-align: center">
                           <tr>
                              <th>No</th>
                              <th>Invoice</th>
                              <th>Date Order</th>
                              <th>Product Name</th>
                              <th>Qty</th>
                              <th>Subtotal</th>
                              <th>Amount Due</th>
                              <th>Action</th>
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
                                 <td><?= date('d F Y', strtotime('+1 days', strtotime($o['date_ordered']))); ?></td>
                                 <td align="center">
                                    <a href="" data-toggle="modal" data-target="#EditModal<?= $o['no_invoice']; ?>" class="btn btn-xs" style="background-color: #3c8dbc; color:white;"><i class="fas fa-edit mr-1"></i>Edit</a>
                                    <a href="<?= base_url(); ?>catering/hapus_order/<?= $o['no_invoice']; ?>" class="btn btn-xs button-delete" style="background-color: #ff851b;"><i class="fas fa-eraser mr-1"></i>Delete</a>
                                 </td>
                              </tr>
                              <?php $i++; ?>
                           <?php endforeach; ?>
                        </tbody>
                        <tr>
                           <td colspan="4" align="right">Total</td>
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

<!-- Modal Edit -->
<?php foreach ($Order as $m) : ?>
   <div class="modal fade" id="EditModal<?= $m['no_invoice']; ?>">
      <div class="modal-dialog modal-sm">
         <div class="modal-content">
            <div class="modal-header">
               <h4 class="modal-title">Change Quantity</h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <form action="<?= base_url('catering/edit_order'); ?>" method="POST">
               <div class="modal-body">
                  <input type="hidden" name="no_invoice" value="<?= $m['no_invoice']; ?>">
                  <input type="hidden" name="price" value="<?= $m['mp_price']; ?>">
                  <div class=" form-group mt-3">
                     <label for="menu">Quantity</label>
                     <div class="form-group">
                        <input type="number" class="form-control" name="jml" value="<?= $m['qty']; ?>">
                     </div>
                     <?= form_error('jml', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>

               </div>
               <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Change</button>
               </div>
            </form>
         </div>
         <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
   </div>
<?php endforeach; ?>
<!-- /.modal -->