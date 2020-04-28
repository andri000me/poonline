  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-light elevation-4" style="background-color: #273b7a;">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url();?>assets/Logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">RO Online</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <?php 
            if($this->session->role == 'HCM') $this->load->view('template/sidebar_menu/sidebar_hcm');
            else if($this->session->role == 'Perkasa') $this->load->view('template/sidebar_menu/sidebar_perkasa');
          ?>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>