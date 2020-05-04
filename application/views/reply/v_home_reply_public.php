<?php $this->load->view('template/header'); ?>
  <title>Reply Public Training</title>
<?php $this->load->view('template/navbar'); ?>
<?php $this->load->view('template/sidebar_menu/sidebar_main'); ?>
<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url().'admin/dist/calendar/css/bootstrap.min.css'; ?>">-->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Reply Public Training</h1>
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
						<table id="example" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Nomor RO</th>
									<th>Judul Pelatihan</th>
									<th>Kategori Pelatihan</th>
									<th>Tanggal Mulai</th>
									<th>Tanggal Selesai</th>
									<th>Lokasi</th>
									<th widht="250">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $n=1;
									foreach ($publik as $_publik) {
								?>
								<tr>
									<td width="5%"><?php echo $n; ?></td>
									<td width="20%"><?php echo $_publik->nomor_ro; ?></td>
									<td width="20%"><?php echo $_publik->judul; ?></td>
									<td width="20%"><?php echo $_publik->kategori_pelatihan; ?></td>
									<td width="20%"><?php echo $_publik->tanggal_mulai; ?></td>
									<td width="10%"><?php echo $_publik->tanggal_selesai; ?></td>
									<td width="20%"><?php echo $_publik->tempat; ?></td>
									<td>
										<a class="btn btn-success btn-sm" style="background-color:#1a9e38; border-color:#1a9e38;" href="" class="nav-link"><i class="fas fa-pencil-alt"></i>Edit</a>
										<a class="btn btn-success btn-sm btn-danger" style="background-color:#bd0011; border-color:#bd0011"; href="" class="nav-link"><i class="fas fa-trash-alt"></i>Hapus</a>
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