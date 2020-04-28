 <!-- edited by zulhan -->
<?php $this->load->view('template/header'); ?>
  <title>Metode Penyelenggaraan</title>
<?php $this->load->view('template/navbar'); ?>
<?php $this->load->view('template/sidebar_menu/sidebar_main'); ?>
<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url().'admin/dist/calendar/css/bootstrap.min.css'; ?>">-->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3>Metode Peyelenggaraan Training</h3>
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
						<!-- <div class="card-header">
						<h3 class="card-title">DataTable with default features</h3>
						</div> -->
						<!-- /.card-header -->
						<div class="card-body">
						<a class="btn btn-info" style="background-color:#273b7a; border-color:#273b7a;margin-bottom:20pt "; href="<?php echo base_url().'Metode_penyelenggaraan/add_metode_penyelenggaraan' ?>" class="nav-link">
							<i class="fas fa-folder-plus "></i> Tambahkan Metode Penyelenggaraan
						</a>
						<a class="btn btn-primary" style="margin-bottom:20pt "; href="<?php echo base_url().'Vendors' ?>" class="nav-link">
							<i class="fas fa-users "></i>  Vendor
						</a>
						<a class="btn btn-success" style="margin-bottom:20pt "; href="<?php echo base_url().'P_vendor' ?>" class="nav-link">
							<i class="fas fa-hands-helping "></i>  Metode Penunjukan Vendor
						</a>
						<table id="example" class="table table-bordered table-striped">
							<thead>
								<tr>
									
									<th width="15">No</th>
									<th width="60">Metode Peyelenggaraan</th>
									<th widht="10">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $n=1;
									foreach ($data as $data){
								?>
								<tr>
									<td width="15"><?php echo $n; ?></td>
									<td width="60%"><?php echo $data->metode; ?></td>
									<td>
										<?php ?>
											<div class="btn-group">
												<a class="btn btn-info btn-sm" href="<?php echo base_url().'Metode_penyelenggaraan/edit_metode_penyelenggaraan/'.$data->id; ?>" class="nav-link" ><i class="fas fa-pencil-alt"></i>  Edit</a>
												<a class="btn btn-danger btn-sm" href="<?php echo base_url().'Metode_penyelenggaraan/delete_metode_penyelenggaraan/'.$data->id; ?>" class="nav-link"><i class="fas fa-trash"></i>  Delete</a>
											</div>
										<?php?>
									</td>
								</tr>	
								<?php $n++ ;}?>
							</tbody>
						</table>
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