<!-- add by zulhan -->
<?php $this->load->view('template/header'); ?>
  <title>Import Data Hotel</title>
<?php $this->load->view('template/navbar'); ?>
<?php $this->load->view('template/sidebar_menu/sidebar_main'); ?>
<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url().'admin/dist/calendar/css/bootstrap.min.css'; ?>">-->
<script>
  $(document).ready(function(){
    $("#kosong").hide();
  });
</script>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Import Data Hotel</h1>
          </div>
        </div>
      </div>
    </section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div class="form-group">
								<?php echo $this->session->flashdata('notif') ?>
							        <form method="POST" action="<?php echo base_url() ?>Hotel/upload" enctype="multipart/form-data">
							            <div class="form-group">
							            	<a href="<?php echo base_url("excel/format_data_hotel.xlsx"); ?>">Download Format</a>
							            	<br>
							                <label for="exampleInputEmail1">UNGGAH FILE EXCEL</label>
							                <input type="file" name="userfile" class="form-control">
							            </div>
							            <button type="submit" class="btn btn-success">UPLOAD</button>
							        </form>
							    </div>
							</div>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
			</div>
		</div>
	</section>
</div>

<?php $this->load->view('template/footer'); ?>
</body>
</html>