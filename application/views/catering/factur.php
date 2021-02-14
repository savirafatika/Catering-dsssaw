   <div class="wrapper">
      <section class="content">
         <div class="container-fluid">
            <!-- Main content -->
            <section class="invoice">
               <!-- title row -->
               <div class="row">
                  <div class="col-12">
                     <h3 class="page-header">
                        <img src="<?= base_url('assets/img/logo/logo_nav.png'); ?>" style="width: 7%; height: 7%;"> <i>Proof of Valid Online Ordering</i>
                        <small class="float-right">Date: <?= date('d F Y'); ?></small>
                     </h3>
                  </div>
                  <!-- /.col -->
               </div>
               <!-- info row -->
               <div class="row invoice-info">
                  <div class="col-sm-4 invoice-col">
                     From
                     <address>
                        <strong>Savira Catering.</strong><br>
                        Malangan 1 No.432, Kota Magelang<br>
                        Central Java, ID 56125<br>
                        Phone: (+62) 813 9201 7999<br>
                        Email: catering.svr@gmail.com
                     </address>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 invoice-col">
                     To
                     <address>
                        <strong><?= $user['name']; ?></strong><br>
                        <?= $user['address']; ?><br>
                        Email: <?= $user['email']; ?>
                     </address>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 invoice-col">
                     <b>Invoice #<?= date('dmy'); ?></b><br>
                     <br>
                     <b>Order ID:</b> <?php foreach ($Order as $o) : ?><?= $o['no_invoice']; ?>. <?php endforeach; ?><br>
                  <b>Order Quantity:</b> <?php
                                          $id = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
                                          $this->db->select('*');
                                          $this->db->from('order');
                                          $this->db->where('user_id', $id['id']);
                                          echo $this->db->count_all_results();
                                          ?>
                  </div>
                  <!-- /.col -->
               </div>
               <!-- /.row -->

               <!-- Table row -->
               <div class="row">
                  <div class="col-12 table-responsive">
                     <table class="table table-striped">
                        <thead>
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
                                 <td><?= date('d F Y', strtotime('+1 days', strtotime($o['date_ordered']))); ?></td>
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
                  <!-- /.col -->
               </div>
               <!-- /.row -->

               <div class="row">
                  <!-- accepted payments column -->
                  <div class="col-6">
                     <p class="lead">Notes :</p>
                     <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                        - This is valid proof that you have placed your order online. <br>
                        - You can make a payment and confirm with us via the mobile number above. <br>
                        - If you have questions, please contact us via the contact provided.
                     </p>
                  </div>
               </div>
               <!-- /.row -->
            </section>
            <!-- /.content -->
         </div>
      </section>
   </div>
   <!-- ./wrapper -->

   <script type="text/javascript">
      window.addEventListener("load", window.print());
   </script>
   </body>

   </html>