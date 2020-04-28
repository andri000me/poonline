<!-- edited by zulhan -->
<?php $this->load->view('template/header'); ?>
  <title>Cost Structure</title>
<?php $this->load->view('template/navbar'); ?>
<?php $this->load->view('template/sidebar_menu/sidebar_main'); ?>
<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url().'admin/dist/calendar/css/bootstrap.min.css'; ?>">-->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manajemen Cost Structure</h1>
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
						<a class="btn btn-info" style="background-color:#273b7a; border-color:#273b7a; margin-bottom:20pt "; href="<?php echo base_url().'Cost_structure/add_cost_structure' ?>" class="nav-link">
							<i class="fas fa-clipboard-list "></i> Tambahkan Cost Structure Baru
						</a>
						<table id="example" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th widht="20">No</th>
									<th>ID Cost Structure</th>
									<th>Detail</th>
									<th widht="10">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $n=1;
									foreach ($data as $data){
								?>
								<tr>
									<td width="5%"><?php echo $n; ?></td>
									<td width="30%"><?php echo $data->id_cost_structure; ?></td>
									<td width="30%" ><?php echo $data->detail; ?></td>
									<td>
										<?php ?>
											<div class="btn-group">
												<a class="btn btn-info btn-sm" href="<?php echo base_url().'Cost_structure/edit_cost_structure/'.$data->id_cost_structure; ?>" class="nav-link" ><i class="fas fa-pencil-alt"></i>  Edit</a>
												<a class="btn btn-danger btn-sm" href="<?php echo base_url().'Cost_structure/delete_cost_structure/'.$data->id_cost_structure; ?>" class="nav-link"><i class="fas fa-trash"></i>  Delete</a>
											</div>
										<?php?>
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