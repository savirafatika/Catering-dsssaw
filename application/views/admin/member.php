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
                        <h1 class="m-0 text-dark">Member Management</h1>
                     </div><!-- /.col -->
                  </div><!-- /.row -->
               </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
            <div class="flash-data-danger" data-flashdanger="<?= $this->session->flashdata('message-danger'); ?>"></div>

            <div class="row">
               <div class="col-lg-12" style="height: min-content;">
                  <!-- card table -->
                  <div class="card">
                     <div class="card-header mt-1">
                        <h3 class="card-title">List Member</h3>
                        <div class="card-tools">
                           <button type="button" class="btn btn-tool float-right" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                        </div>
                     </div>
                     <!-- /.card-header -->
                     <div class="card-body">
                        <table id="nobtn" class="table table-bordered table-striped">
                           <thead>
                              <tr>
                                 <th>No</th>
                                 <th>Pictures</th>
                                 <th>Name</th>
                                 <th>Email</th>
                                 <th>Address</th>
                                 <th>Phone</th>
                                 <th>Active</th>
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php $i = 1; ?>
                              <?php foreach ($member as $m) : ?>
                                 <tr>
                                    <th><?= $i; ?></th>
                                    <td>
                                       <img src="<?= base_url('assets/img/profile/') . $m['image']; ?>" alt="profile picture" style="width: 50px; height: 50px;" class="img-circle img-fluid">
                                    </td>
                                    <td><?= $m['name']; ?></td>
                                    <td><?= $m['email']; ?></td>
                                    <td><?= $m['address']; ?></td>
                                    <td><?= $m['phone']; ?></td>
                                    <td style="color: white;">
                                       <?php
                                       if ($m['is_active'] == 1) {
                                          echo '<a class="badge badge-success">ON</a>';
                                       } else {
                                          echo '<a class="badge badge-secondary">OFF</a>';
                                       }
                                       ?>
                                    </td>
                                    <td>
                                       <a class="btn btn-xs" style="background-color: #3c8dbc; color:white;" data-toggle="modal" data-target="#EditMemberModal<?= $m['id']; ?>"><i class="fas fa-edit mr-1"></i>Edit</a>
                                       <a href="<?= base_url(); ?>admin/hapus_member/<?= $m['id']; ?>" class="btn btn-xs button-delete" style="background-color: #ff851b;"><i class="fas fa-eraser mr-1"></i>Delete</a>
                                    </td>
                                 </tr>
                                 <?php $i++; ?>
                              <?php endforeach; ?>
                           </tbody>
                        </table>
                     </div>
                     <!-- /.card-body -->
                  </div>
                  <!-- /.card table -->
               </div>
            </div>


         </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
   </div>

   <!-- Modal Edit Member -->
   <?php foreach ($member as $m) : ?>
      <div class="modal fade" id="EditMemberModal<?= $m['id']; ?>">
         <div class="modal-dialog modal-sm">
            <div class="modal-content">
               <div class="modal-header">
                  <h4 class="modal-title">Change Active or Not!</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <form action="<?= base_url('admin/member'); ?>" method="POST">
                  <div class="modal-body">
                     <input type="hidden" name="id_user" value="<?= $m['id']; ?>">
                     <div class="row">
                        <div class="col-md-4">
                           <img src="<?= base_url('assets/img/profile/') . $m['image']; ?>" alt="profile picture" style="width: 50px; height: 50px;" class="img-circle img-fluid">
                        </div>
                        <div class="col-md-8">
                           <p><?= $m['name']; ?></p>
                        </div>
                     </div>
                     <div class=" form-group mt-3">
                        <label for="menu">Active ?</label>
                        <div class="form-group">
                           <select class="form-control select2bs4" style="width: 100%;" name="is_active" id="is_active">
                              <option selected="selected" value="<?= $m['is_active']; ?>">
                                 Now =
                                 <?php
                                 if ($m['is_active'] == 1) {
                                    echo 'ON';
                                 } else {
                                    echo 'OFF';
                                 }
                                 ?>
                              </option>
                              <option value="1">ON</option>
                              <option value="0">OFF</option>
                           </select>
                        </div>
                        <?= form_error('menu_id', '<small class="text-danger pl-3">', '</small>'); ?>
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