<?php $this->load->view('template/header'); ?>
  <title>Home Admin</title>
<?php $this->load->view('template/navbar'); ?>
<?php $this->load->view('template/sidebar_menu/sidebar_main'); ?>
<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url().'admin/dist/calendar/css/bootstrap.min.css'; ?>">-->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Home</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">

            <div class="card">
              <!-- <div class="card-header border-transparent">
                <h3 class="card-title"></h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div> -->
              <!-- /.card-header -->
              <div class="card-body p-0">
                <?php //var_dump($this->CI->session->userdata()); ?>
                <img src="<?php echo base_url();?>assets/admin.png" style="width:25%; margin: 5% 38% 1% 38%;"/>
                <p>
                  <h1 style="text-align:center;">Selamat Datang!</h1>
                  <h2><h2 style="text-align:center; margin-bottom: 5%;">Di Sistem Request Order Online</h2></h2>
                </p>
                
              </div>
              <!-- /.card-body -->
              <!-- <div class="card-footer clearfix">
              </div> -->
              <!-- /.card-footer -->
            </div>



          </section>
          <!-- /.Left col -->

          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <!-- <section class="col-lg-5 connectedSortable">

          </section> -->
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php $this->load->view('template/footer'); ?>
</body>
</html>
