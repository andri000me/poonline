<!-- add by zulhan -->
<?php $this->load->view('template/header'); ?>
  <title>Hotel</title>
<?php $this->load->view('template/navbar'); ?>
<?php $this->load->view('template/sidebar_menu/sidebar_main'); ?>
<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url().'admin/dist/calendar/css/bootstrap.min.css'; ?>">-->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Hotel</h1>
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
						<a class="btn btn-info" style="background-color:#273b7a; border-color:#273b7a; margin-bottom:20pt "; href="<?php echo base_url().'Hotel/add_hotel' ?>" class="nav-link">
							<i class="fas fa-plus "></i>  Add New
						</a>
						<a class="btn btn-success" style="margin-bottom:20pt "; href="<?php echo base_url().'Hotel/import' ?>" class="nav-link">
							<i class="fas fa-file-import "></i>  Import
						</a>
						<table id="example" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th widht="5">No</th>
									<th>Hotel Name</th>
									<th>Marketing</th>
									<th>Contact</th>
									<th>Address</th>
									<th>City</th>
									<th>Roomrate</th>
									<th>Description</th>
									<th>Meeting Package</th>
									<th>Description</th>
									<th widht="10">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $n=1;
									foreach ($data as $data){
								?>
								<tr>
									<td width="5%"><?php echo $n; ?></td>
									<td width="30%"><?php echo $data->name; ?></td>
									<td width="30%" ><?php echo $data->marketing; ?></td>
									<td width="10%" ><?php echo $data->contact; ?></td>
									<td width="10%" ><?php echo $data->address; ?></td>
									<td width="10%" ><?php echo $data->city; ?></td>
									<td width="10%" ><?php echo $data->roomrate; ?></td>
									<td width="10%" ><?php echo $data->description_room; ?></td>
									<td width="10%" ><?php echo $data->meeting; ?></td>
									<td width="10%" ><?php echo $data->description_meeting; ?></td>
									<td>
										<?php ?>
											<div class="btn-group">
												<a class="btn btn-info btn-sm" href="<?php echo base_url().'Hotel/edit_hotel/'.$data->id; ?>" class="nav-link" ><i class="fas fa-pencil-alt"></i>  Edit</a>
												<a class="btn btn-danger btn-sm" href="<?php echo base_url().'Hotel/delete_hotel/'.$data->id; ?>" class="nav-link"><i class="fas fa-trash"></i>  Delete</a>
											</div>
										<?php?>
									</td>
								</tr>	
								<?php $n++;}?>
							</tbody>
						</table>
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