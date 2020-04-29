<?php $this->load->view('template/header'); ?>
  <title>In-House Training</title>
<?php $this->load->view('template/navbar'); ?>
<?php $this->load->view('template/sidebar_menu/sidebar_main'); ?>
<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url().'admin/dist/calendar/css/bootstrap.min.css'; ?>">-->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>In-House Training</h1>
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
							<a class="btn btn-info" style="background-color:#273b7a; border-color:#273b7a; margin-bottom:20pt "; href="<?php echo base_url().'Inhouse_training/create_training' ?>" class="nav-link">
								<i class="fas fa-plus-square"></i>Create Request
							</a>
							<table id="example" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th widht="20">No</th>
										<th>Nomor RO</th>
										<th>Kategori Pelatihan</th>
										<th>Judul Pelatihan</th>
										<th>Tanggal Mulai</th>
										<th>Tanggal Selesai</th>
										<th>PIC User</th>
										<th widht="10">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $n=1;
										foreach ($submit as $data) {
											if ($data->active=='1')$status='Active';
											elseif ($data->active=='0')$status='Inactive';
									?>
									<tr>
										<td width="5%"><?php echo $n; ?></td>
										<td width="20%"><?php echo $data->nomor_ro; ?></td>
										<td width="20%"><?php echo $data->kategori_pelatihan; ?></td>
										<td width="20%"><?php echo $data->judul_pelatihan; ?></td>
										<td width="10%"><?php echo $data->tanggal_mulai; ?></td>
										<td width="10%"><?php echo $data->tanggal_selesai; ?></td>
										<td width="10%"><?php echo $data->pengirim_ro; ?></td>
										<td>
											<!-- <?php if ($data->active=='0') { ?>
													<form role="form" action="<?php echo base_url(). 'User/activateUser'; ?>" method="post">
														<a class="btn btn-success btn-sm" style="background-color:#1a9e38; border-color:#1a9e38;" href="<?php echo base_url().'User/edit_user/'.$data->id; ?>" class="nav-link"><i class="fas fa-pencil-alt"></i>Edit</a>
													<input type="hidden" name="id" value="<?php echo $data->id; ?>">
													<input type="hidden" name="value" value="1">
													<button class="btn btn-sm btn-danger" type="submit" name="submit"><i class="fa fa-eye"></i> Active</a></button>
												</form>
											<?php }else if ($data->active=='1') { ?>
												<form role="form" action="<?php echo base_url(). 'User/activateUser'; ?>" method="post">
													<a class="btn btn-success btn-sm" style="background-color:#1a9e38; border-color:#1a9e38;" href="<?php echo base_url().'User/edit_user/'.$data->id; ?>" class="nav-link"><i class="fas fa-pencil-alt"></i>Edit</a>
													<input type="hidden" name="id" value="<?php echo $data->id; ?>">
													<input type="hidden" name="value" value="0">
													<button class="btn btn-sm btn-danger" type="submit" name="submit" style="background-color:#bd0011; border-color:#bd0011";><i class="fa fa-eye-slash"></i> Inactive</a></button>
												</form>
											<?php }?> -->
										</td>
									</tr>
									<?php $n++;}?>
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