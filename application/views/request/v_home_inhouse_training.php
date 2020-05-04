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
            <h1>In-House Trainig</h1>
          </div>
        </div>
      </div>
    </section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card card-tabs">
					<div class="card-header p-0 pt-1">
						<ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Main Table</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Save Draft</a>
							</li>
						</ul>
					</div>
					<div class="card-body">
						<div class="tab-content" id="custom-tabs-one-tabContent">
						<div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
						
							<a class="btn btn-info" style="background-color:#273b7a; border-color:#273b7a; margin-bottom:20pt "; href="<?php echo base_url().'Inhouse_training/create_training' ?>" class="nav-link">
								<i class="fas fa-plus-square"></i>Create Request
							</a>
							<table id="example" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th widht="20">No</th>
										<th>RO</th>
										<th>Kategori</th>
										<th>Judul Pelatihan</th>
										<th>Mulai</th>
										<th>Selesai</th>
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
										<td width="5%"><?php echo $data->nomor_ro; ?></td>
										<td width="10%"><?php echo $data->kategori_pelatihan; ?></td>
										<td width="30%"><?php echo $data->judul; ?></td>
										<td width="10%"><?php echo $data->tanggal_mulai; ?></td>
										<td width="10%"><?php echo $data->tanggal_selesai; ?></td>
										<td width="10%"><?php echo $data->pengirim_ro; ?></td>
										<td>
											<?php if ($data->active=='0') { ?>
													<form role="form" action="<?php echo base_url(). 'User/activateUser'; ?>" method="post">
														<a class="btn btn-success btn-sm" style="background-color:#1a9e38; border-color:#1a9e38;" href="<?php echo base_url().'Inhouse_training/edit_inhouse_training/'.$data->id; ?>" class="nav-link"><i class="fas fa-pencil-alt"></i>Edit</a>
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
											<?php }?>
										</td>
									</tr>
									<?php $n++;}?>
								</tbody>
							</table>
						</div>
						<!-- /.card-mian-body -->
						<div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
									<div class="card-body">
										<a class="btn btn-info" style="background-color:#273b7a; border-color:#273b7a; margin-bottom:20pt "; href="<?php echo base_url().'inhouse_training/create_training' ?>" class="nav-link">
											<i class="fas fa-plus-square"></i>Create Request</a>
										<table id="example1" class="table table-bordered table-striped">
											<thead>
												<tr>
													<th widht="20">No</th>
													<th>RO</th>
													<th>Kategori</th>
													<th>Judul Pelatihan</th>
													<th>Mulai</th>
													<th>Selesai</th>
													<th>PIC User</th>
													<th widht="10">Action</th>
												</tr>
											</thead>
											<tbody>
												<!-- <?php $n=1;
													foreach ($submit as $data) {
														if ($data->active=='1')$status='Active';
														elseif ($data->active=='0')$status='Inactive';
												?>
												<tr>
													<td width="5%"><?php echo $n; ?></td>
													<td width="5%"><?php echo $data->nomor_ro; ?></td>
													<td width="10%"><?php echo $data->kategori_pelatihan; ?></td>
													<td width="30%"><?php echo $data->judul_pelatihan; ?></td>
													<td width="10%"><?php echo $data->tanggal_mulai; ?></td>
													<td width="10%"><?php echo $data->tanggal_selesai; ?></td>
													<td width="10%"><?php echo $data->pengirim_ro; ?></td>
													<td> -->
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
														<?php }?>
													</td>
												</tr>
												<?php $n++;}?> -->
											</tbody>
										</table>
									</div>

								</div>
								</div>
							</div>
							<!-- /.card -->
							</div>
						</div>
					</div>
					<div class="card">
						<!-- /.card-header -->

						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
			</div>
		</div>
	</section>
</div>

<?php $this->load->view('template/footer'); ?>
<script>
	var table = document.getElementsByTagName('Table');
</script>
</body>
</html>
