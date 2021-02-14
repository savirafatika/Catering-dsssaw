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
                        <h1 class="m-0 text-dark">Security Settings</h1>
                     </div><!-- /.col -->
                  </div><!-- /.row -->
               </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
            <div class="flash-data-danger" data-flashdanger="<?= $this->session->flashdata('message-danger'); ?>"></div>

            <!-- card table -->
            <div class="card">
               <div class="card-header mt-1">
                  <h3 class="card-title">Role : <?= $role['role']; ?></h3>
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
                           <th>Menu</th>
                           <th>Access</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($menu as $m) : ?>
                           <tr>
                              <th><?= $i; ?></th>
                              <td><?= $m['menu']; ?></td>
                              <td>
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" <?= check_access($role['id_role'], $m['id_menu']); ?> data-role="<?= $role['id_role']; ?>" data-menu="<?= $m['id_menu']; ?>">
                                 </div>
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

         </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
   </div>