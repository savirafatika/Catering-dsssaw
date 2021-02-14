<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="<?= base_url('admin'); ?>" class="brand-link">
      <img src="<?= base_url('assets/img/logo/side_bar.png'); ?>" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Savira Catering</span>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-header">FEATURES</li>

            <!-- QUERY MENU -->
            <?php
            $role_id = $this->session->userdata('role_id');
            $queryMenu = "SELECT m.id_menu, m.menu, m.icons 
                           FROM user_menu m JOIN user_access_menu am 
                           ON m.id_menu = am.um_menu_id 
                           WHERE am.ur_role_id = $role_id 
                           ORDER BY am.um_menu_id ASC";

            $Qmenu = $this->db->query($queryMenu)->result_array();

            ?>

            <!-- LOOPING MENU -->
            <?php foreach ($Qmenu as $m) : ?>
               <?php if ($mn == $m['menu']) : ?>
                  <li class="nav-item has-treeview menu-open">
                     <a href="#" class="nav-link active">
                     <?php else : ?>
                  <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                     <?php endif; ?>

                     <i class="nav-icon <?= $m['icons']; ?>"></i>
                     <p>
                        <?= $m['menu']; ?>
                        <i class="fas fa-angle-left right"></i>
                     </p>
                     </a>
                     <!-- SIAPKAN SUB MENU -->
                     <?php
                     $menuId = $m['id_menu'];
                     $querySubMenu = "SELECT * FROM user_sub_menu sm JOIN user_menu m 
                                 ON sm.menu_id = m.id_menu 
                                 WHERE sm.menu_id = $menuId AND sm.active = 1";

                     $subMenu = $this->db->query($querySubMenu)->result_array();
                     ?>

                     <?php foreach ($subMenu as $sm) : ?>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <?php if ($title == $sm['title']) : ?>
                                 <a href="<?= base_url($sm['url']); ?>" class="nav-link active">
                                 <?php else : ?>
                                    <a href="<?= base_url($sm['url']); ?>" class="nav-link">
                                    <?php endif; ?>
                                    <i class="<?= $sm['icon']; ?> nav-icon"></i>
                                    <p><?= $sm['title']; ?></p>
                                    </a>
                           </li>
                        </ul>
                     <?php endforeach; ?>
                  </li>
               <?php endforeach; ?>

               <li class="nav-header">SETTINGS</li>
               <li class="nav-item has-treeview">
                  <a href="<?= base_url('auth/logout'); ?>" class="nav-link" id="button-logout">
                     <i class="fas fa-sign-out-alt nav-icon"></i>
                     <p>Sign Out</p>
                  </a>
               </li>
         </ul>
      </nav>
      <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
</aside>