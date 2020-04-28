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
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th widht="20">No</th>
									<th>Nomor RO</th>
									<th widht="100pt">Judul</th>
									<th>Jenis Pelatihan</th>
									<th>Tanggal Mulai</th>
									<th>Metode Penunjukan Vendor</th>
									<th widht="10">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $n=1;
									foreach ($publik as $_publik) {
								?>
								<tr>
									<td width="5%"><?php echo $n; ?></td>
									<td width="20%"><?php echo $_publik->nomor_ro; ?></td>
									<td width="20%"><?php echo $_publik->judul_pelatihan; ?></td>
									<td width="20%"><?php echo $_publik->kompetensi_bidang; ?></td>
									<td width="20%"><?php echo $_publik->tanggal_mulai; ?></td>
									<td width="20%"><?php echo $_publik->metode_penyelenggaraan; ?></td>

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