<?php $this->load->view('template/header'); ?>
  <title>Add Kompetensi Bidang      </title>
<?php $this->load->view('template/navbar'); ?>
<?php $this->load->view('template/sidebar_menu/sidebar_main'); ?>
<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url().'admin/dist/calendar/css/bootstrap.min.css'; ?>">-->

<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah Kompetensi Bidang</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <form role="form" action="<?php echo base_url(). 'Kompetensi_bidang/add_bidang'; ?>" method="post">
              <div class="card-body">
                <a class="btn btn-success" style="margin-bottom:20pt "; href="<?php echo base_url().'Kompetensi_bidang/import' ?>" class="nav-link">
                    <i class="fas fa-file-import "></i>  Import
                  </a>
                <div class="form-group">    
                    <label>Kompetensi Bidang</label>
                    <input type="text" class="form-control" name="bidang" placeholder="Masukkan Kompetensi Bidang" required>
                </div>
              </div>
              <div class="card-footer clearfix">
                <button type="submit" id="submit" name="submit" value="submit" class="btn btn-info float-right" style="background-color:#273b7a; border-color:#273b7a";>Save</button>
                <button type="button" class="btn btn-default float-right" onClick="javascript:history.back()">Back</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php $this->load->view('template/footer'); ?>

</body>
</html>