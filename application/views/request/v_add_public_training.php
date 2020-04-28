<?php $this->load->view('template/header'); ?>
  <title>Create Public Training</title>
<?php $this->load->view('template/navbar'); ?>
<?php $this->load->view('template/sidebar_menu/sidebar_main'); ?>
<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url().'admin/dist/calendar/css/bootstrap.min.css'; ?>">-->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
			<div class="col-sm-6">
				<h1>Public Training</h1>
                <h1></h1>
			</div>
        </div>
      </div>
    </section>
	<!-- Main content -->
	<!-- Form Data Pelatihan-->
	<section class="content">
		<div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form role="form" action="<?php echo base_url(). 'Public_training/create_training'; ?>" method="post">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"><i class="nav-icon fas fa-briefcase">  Data Pelatihan</i></h3>
                            </div>
                            <!-- edited by zulhan -->
                            <div class="card-body">
                                <input name="pengirim_ro" type="hidden" value="<?php echo $this->session->userdata('username')?>">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="">Nomor</label>
                                            <input name="nomor" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Kategori Pelatihan</label>
                                            <select class="custom-select" name="kategori_pelatihan" id="">
                                                <option class="form-control" value="TC">Technical</option>
                                                <option class="form-control" value="MG">Managerial</option>
                                                <option class="form-control" value="CL">Cultural</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="">Judul Pelatihan</label>
                                            <input class="form-control" type="text" name="judul">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Metode Penyelenggaraan</label>
                                            <select class="custom-select" name="metode_penyelenggaraan" id="">
                                                <option value="">Pilih salah satu</option>
												<?php foreach ($metode as $_metode) { ?>
													<option value="<?php echo $_metode->metode; ?>"><?php echo $_metode->metode; ?> </option>
												<?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="">Kompetensi Bidang</label>
                                            <select class="custom-select" name="kompetensi_bidang" id="">
                                                	<option value="">Pilih salah satu</option>
												<?php foreach ($bidang as $_bidang) { ?>
													<option value="<?php echo $_bidang->bidang; ?>"><?php echo $_bidang->bidang; ?> </option>
												<?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Tanggal Mulai</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                </div>
                                                <input name="tanggal_mulai" type="date" class="form-control datepicker">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Tanggal Selesai</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                </div>
                                                <input name="tanggal_selesai" type="date" class="form-control datepicker">
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Provinsi</label>
                                            <select class="custom-select" name="provinsi" id="">
                                                <option value="">Pilih Provinsi</option>
                                                <?php foreach ($provinsi as $_provinsi) { ?>
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
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="">Tempat</label>
                                            <input name="tempat" class="form-control" type="text" placeholder="Tempat Lokasi Training" >
                                        </div>
                                    </div>
                                </div>
                                <!-- edited by zulhan -->
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Vendor Peneyelenggara</label>
                                            <select class="custom-select" name="vendor_penyelenggara" id="">
                                                <option value="">Pilih salah satu</option>
                                                <?php foreach ($vendor_name as $_vendor_name) { ?>
                                                <option value="<?php echo $_vendor_name->vendor_name; ?>"><?php echo $_vendor_name->vendor_name; ?> </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">No. Telp Vendor</label>
                                            <input type="text" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Alamat Vendor</label>
                                            <input type="text" class="form-control" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Jumlah Peserta</label>
                                            <input name="jumlah_peserta" class="form-control" type="number">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="">Catatan</label>
                                            <textarea name="catatan" class="form-control" id="" cols=20 rows="1"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- edited by zulhan -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Form Usulan Pelatihan Publik</label>
                                            <div class="custom-file">
                                                <input type='file' name='files[]' multiple >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Brosur</label>
                                            <div class="custom-file">
                                                <input type='file' name='files[]' multiple >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end -->
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-header">

                            </div>
                            <div class="card-body">
                                <a class="btn btn-info" style="background-color:#273b7a; border-color:#273b7a; margin-bottom:20pt "; href="#" class="nav-link">
                                    <i class="fas fa-plus-square"></i>Tambah Peserta PGN
                                </a>
                                <a class="btn btn-info" style="background-color:#273b7a; border-color:#273b7a; margin-bottom:20pt "; href="#" class="nav-link">
                                    <i class="fas fa-plus-square"></i>Tambah Peserta Luar PGN
                                </a>
                                <table id="example" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>NIPG</th>
                                            <th>No. HP</th>
                                            <th>Email</th>
                                            <th>SatKer</th>
                                            <th>Direktorat</th>
                                            <th>Cost Structure</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer">
                                <div class="btn-group float-right">
                                    <button type="button" class="btn btn-default float-right" onClick="javascript:history.back()">Back</button>
                                    <button type="submit" name="save" value="save" class="btn btn-success" style="background-color:#1a9e38; border-color:#1a9e38;">Save Draft</button>
                                    <button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary" style="background-color:#273b7a; border-color:#273b7a">Submit</button>
                                </div>
                            </div>
                        </div>
                       
                    </form>
                </div>
            </div>
		</div>
	</section>
</div>
<?php $this->load->view('template/footer'); ?>
<script>
function pelatihan() {
      var txtFirstNumberValue = document.getElementById('kurs').value;
      var txtSecondNumberValue = document.getElementById('konversi').value;
      var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('tb_pelatihan').value = result ;
      }
}

</script>
</body>