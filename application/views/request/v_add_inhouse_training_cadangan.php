<?php $this->load->view('template/header'); ?>
  <title>Create Inhouse Training</title>
<?php $this->load->view('template/navbar'); ?>
<?php $this->load->view('template/sidebar_menu/sidebar_main'); ?>
<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url().'admin/dist/calendar/css/bootstrap.min.css'; ?>">-->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        </div>
      </div>
    </section>
	<!-- Main content -->
	<!-- Form Data Pelatihan-->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<form role="form">
						<div class="card">
							<div class="col-sm-6">
								<h4>In-House Training</h4>
							</div>
							<div class="card">
								<div class="card-header">
									<h3 class="card-title"><i class="nav-icon fas fa-briefcase">  Data Pelatihan</i></h3>
								</div>
								<div class="card-body">
									<!-- edited by zulhan -->
									<div class="row">
                                        <div class="col-md-2">
                                            <div class="form">
                                                <label>Nomor RO</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon3">IT001</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Kategori Pelatihan</label>
                                                <div class="col-md-12 dropdown">
                                                    <select class="custom_select form-control" name="" id="">
                                                        <option class="form-control" value="">Technical</option>
                                                        <option class="form-control" value="">Managerial</option>
                                                        <option class="form-control" value="">Cultural</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end -->
									<div class="row">
										<div class="col-md-8">
											<div class="form-group">
												<label for="">Judul Pelatihan</label>
												<input type="text" class="form-control" placeholder="">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-5">
											<div class="form-group">
												<label for="">Kompetensi Bidang</label>
												<div class="col-md-12 dropdown">
													<select class="custom-select" name="kompetensi_bidang" id="">
                                                	<option value="">Pilih salah satu</option>
												<?php foreach ($bidang as $_bidang) { ?>
													<option value="<?php echo $_bidang->bidang; ?>"><?php echo $_bidang->bidang; ?> </option>
												<?php } ?>
                                            </select>
												</div>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="">Jenis Kompetensi</label>
												<div class="col-md-12 dropdown">
													<select class="custom_select form-control" name="" id="">
														<option class="form-control" value="">1</option>
														<option class="form-control" value="">2</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-3">
											<label for="">Tanggal Mulai</label>
											<input type="date" class="form-control">
										</div>
										<div class="col-md-3">
											<label for="">Tanggal Selesai</label>
											<input type="date" class="form-control">
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Provinsi</label>
                                            <select class="custom-select" name="provinsi" id="">
                                                <option value="">Pilih Provinsi</option>
                                                <?php foreach ($Provinsi as $_provinsi) { ?>
                                                <option value="<?php echo $_provinsi->provinsi; ?>"><?php echo $_provinsi->provinsi; ?> </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
									<div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Kota/Kabupaten</label>
                                            <select class="custom-select" name="kota" id="">
                                                <option value="">Pilih Kota/kabupaten</option>
                                                <?php foreach ($kota as $_kota) { ?>
                                                <option value="<?php echo $_kota->kota; ?>"><?php echo $_kota->kota; ?> </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label for="">Vendor Penyelenggara</label>
												<select class="custom-select" name="vendors" id="">
                                                <option value="">Pilih salah satu</option>
                                                <?php foreach ($nama_vendor as $_nama_vendor) { ?>
                                                <option value="<?php echo $_nama_vendor->nama_vendor; ?>"><?php echo $_nama_vendor->nama_vendor; ?> </option>
                                                <?php } ?>
                                            	</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label for="">Metode Pemilihan Vendor</label>
												<select class="custom-select" name="p_vendor" id="">
                                                <option value="">Pilih salah satu</option>
                                                <?php foreach ($metode as $_metode) { ?>
                                                <option value="<?php echo $_metode->metode; ?>"><?php echo $_metode->metode; ?> </option>
                                                <?php } ?>
                                            	</select>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<label for="">Jumlah Peserta</label>
												<input type="number" class="form-control" placeholder="">
											</div>
										</div>
										<div class="col-md-7">
											<div class="form-group">
												<label for="">Catatan</label>
												<input type="textarea" class="form-control" placeholder="catatan untuk data pelatihan">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="">TOR/KAK</label>
												<div class="custom-file">
                                                	<input type='file' name='files[]' multiple >
                                            	</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Form Data Pelatihan-->
							<!-- Form Peserta Pelatihan-->
							<div class="card">
								<div class="card-header">
								<h3 class="card-title"><i class="nav-icon fas fa-users">  Data Peserta</i></h3>
								</div>
							<div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Pegawai PGN</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Nama</label>
                                            <input type="text" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="">NIPG</label>
                                            <input type="text" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Nomor Handphone</label>
                                            <input type="text" class="form-control" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="email" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Satuan Kerja</label>
                                            <input type="text" class="form-control" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Direktorat</label>
                                            <input type="text" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Contructure</label>
                                            <select class="custom_select form-control" name="" id="">
                                                <option class="form-control" value="">90200 (Niaga LNG)</option>
                                                <option class="form-control" value="">90300 (Niaga)</option>
                                                <option class="form-control" value="">90400 (Distribusi)</option>
                                                <option class="form-control" value="">90500 (Transimis)</option>
                                                <option class="form-control" value="">90600 (Administrasi dan Umum)</option>
						                    </select>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">other</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Nama</label>
                                            <input type="text" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="">NIPG</label>
                                            <input type="text" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Nomor Handphone</label>
                                            <input type="text" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="email" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Satuan Kerja</label>
                                            <input type="text" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Direktorat</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Contructure</label>
                                            <select class="custom_select form-control" name="" id="">
                                                <option class="form-control" value="">90200 (Niaga LNG)</option>
                                                <option class="form-control" value="">90300 (Niaga)</option>
                                                <option class="form-control" value="">90400 (Distribusi)</option>
                                                <option class="form-control" value="">90500 (Transimis)</option>
                                                <option class="form-control" value="">90600 (Administrasi dan Umum)</option>
						                    </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
					        <!-- End Data Peserta-->
					        <!-- Data PIC User-->
					        <div class="card">
								<div class="card-header">
									<h3 class="card-title"><i class="nav-icon fas fa-user-shield">  Data PIC User </i></h3>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label for="">Nama</label>
												<input type="text" class="form-control" placeholder="" disabled>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<label for="">NIPG</label>
												<input type="number" class="form-control" placeholder="" disabled>
					                        </div>
					                    </div>
					                    <div class="col-md-2">
											<div class="form-group">
												<label for="">Nomor HP</label>
												<input type="text" class="form-control" placeholder="" disabled>
					                        </div>
					                    </div>
					                </div>
					                <div class="row">
					                	<div class="col-md-3">
											<div class="form-group">
												<label for="">Email</label>
												<input type="text" class="form-control" placeholder="" disabled>
					                        </div>
					                    </div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="">Satuan Kerja</label>
												<input type="text" class="form-control" placeholder="" disabled>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="">Direktorat</label>
												<input type="text" class="form-control" placeholder="" disabled>
					                        </div>
					                    </div>
					                	<div class="col-md-2">
					                		<div class="form-group">
					                			<label for="">Contructure</label>
					                			<div class="col-md-12 dropdown">
					                				<select class="custom_select form-control" name="" id="">
					                                    <option class="form-control" value="">90200 (Niaga LNG)</option>
					                                    <option class="form-control" value="">90300 (Niaga)</option>
					                                    <option class="form-control" value="">90400 (Distribusi)</option>
					                                    <option class="form-control" value="">90500 (Transimis)</option>
					                                    <option class="form-control" value="">90600 (Administrasi dan Umum)</option>
				                                	</select>
				                            	</div>
				                        	</div>
				                    	</div>
				                    </div>
				                </div>
				            </div>
					        <!--End Data PIC User-->
		    				<!-- Form Biaya Pelatihan-->
							<div class="card">
								<div class="card-header">
									<h3 class="card-title"><i class="nav-icon fas fa-wallet">  Rincian Biaya Pelatihan</i></h3>
								</div>
								<div class="card-body">
									<h5>Biaya Pelatihan</h5><hr>
								<div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Total Biaya</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3">Rp.</span>
                                                </div>
                                                <input readonly type="text" value="0"class="form-control" id="tb_pelatihan" readonly >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="">KURS</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3">$.</span>
                                                </div>
                                                <input type="text" class="form-control" id="a.kurs" onkeyup="pelatihan();" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="">Konversi KURS</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control" id="a.konversi"onkeyup="pelatihan();">
                                            </div>
                                        </div>
                                    </div>
								<div class="card-body">
									<h5>Biaya Akomodasi</h5><hr>
								<div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Total Biaya</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3">Rp.</span>
                                                </div>
                                                <input readonly type="text" value="0"class="form-control" id="tb_akomodasi" readonly >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="">KURS</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3">$.</span>
                                                </div>
                                                <input type="text" class="form-control" id="b.kurs" onkeyup="akomodasi();" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="">Konversi KURS</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control" id="b.konversi"onkeyup="akomodasi();">
                                            </div>
                                        </div>
                                    </div>
								<div class="card-body">
									<h5>Biaya SPPD</h5>
									<hr>
								<div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Total Biaya</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3">Rp.</span>
                                                </div>
                                                <input readonly type="text" value="0"class="form-control" id="tb_sppd" readonly >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="">KURS</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3">$.</span>
                                                </div>
                                                <input type="text" class="form-control" id="c.kurs" onkeyup="sppd();" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="">Konversi KURS</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control" id="c.konversi"onkeyup="sppd();">
                                            </div>
                                        </div>
                                    </div>
								</div>
							</div>
						</div>
							<!--End Biaya Pelatihan-->
						</div>	
						<div class="card-footer">
                                <div class="btn-group float-right">
                                    <button type="button" class="btn btn-default float-right" onClick="javascript:history.back()">Back</button>
                                    <button type="save" class="btn btn-success" style="background-color:#1a9e38; border-color:#1a9e38;">Save Draft</button>
                                    <button type="submit" class="btn btn-primary" style="background-color:#273b7a; border-color:#273b7a">Submit</button>
                                </div>
                            </div>
					</div>
				</div>
			</div>
		</section>
</div>
<?php $this->load->view('template/footer'); ?>
<script>
function pelatihan() {
      var txtFirstNumberValue = document.getElementById('a.kurs').value;
      var txtSecondNumberValue = document.getElementById('a.konversi').value;
      var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('tb_pelatihan').value = result ;
      }
}
function akomodasi() {
      var txtFirstNumberValue = document.getElementById('b.kurs').value;
      var txtSecondNumberValue = document.getElementById('b.konversi').value;
      var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('tb_akomodasi').value = result ;
      }
}
function sppd() {
      var txtFirstNumberValue = document.getElementById('c.kurs').value;
      var txtSecondNumberValue = document.getElementById('c.konversi').value;
      var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('tb_sppd').value = result ;
      }
}
</script>
</body>