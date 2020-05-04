<?php $this->load->view('template/header'); ?>
  <title>Create In-House Training</title>
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
	<!-- Form Data Pelatihan-->
	<section class="content">
		<div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form role="form" action="<?php echo base_url(). 'Inhouse_training/create_training'; ?>" method="post">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"><i class="nav-icon fas fa-briefcase">  Data Pelatihan</i></h3>
                            </div>
                            <div class="card-body">
                                <input name="pengirim_ro" type="hidden" value="<?php echo $this->session->userdata('username')?>">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="">Nomor</label>
                                            <input name="nomor" class="form-control" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="">Kategori Pelatihan</label>
                                            <select name="kategori_pelatihan" id="" class="custom-select" required>
                                                <option value="">Pilih salah satu</option>
                                                <option value="TC">Teknikal</option>
                                                <option value="MG">Managerial</option>
                                                <option value="CL">Culture</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="">Judul Pelatihan</label>
                                            <input name="judul" class="form-control" type="text" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Metode Penyelenggaraan</label>
                                            <select class="custom-select" name="metode_penyelenggaraan" id="" required>
                                                <option value="">Pilih salah satu</option>
												<?php foreach ($metode as $data) { ?>
													<option value="<?php echo $data->metode; ?>"><?php echo $data->metode; ?> </option>
												<?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="">Kompetensi Bidang</label>
                                            <select class="custom-select" name="kompetensi_bidang" id="" required>
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
                                                <input name="tanggal_mulai" type="date" class="form-control" required>
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
                                                <input name="tanggal_selesai" type="date" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Provinsi</label>
                                            <select class="custom-select" name="provinsi" id="" required>
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
                                            <select class="custom-select" name="kota" id="" required>
                                                <option value="">Pilih Kota/kabupaten</option>
                                                <?php foreach ($kota as $_kota) { ?>
                                                <option value="<?php echo $_kota->kota; ?>"><?php echo $_kota->kota; ?> </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="">Tempat</label>
                                            <input name="tempat" class="form-control" type="text" placeholder="Tempat Lokasi Training" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Vendor Penyelenggara</label>
                                            <select class="custom-select" name="vendor_penyelenggara" id="" required>
                                                <option value="">Pilih salah satu</option>
                                                <?php foreach ($nama_vendor as $data) { ?>
                                                <option value="<?php echo $data->vendor_name; ?>"><?php echo $data->vendor_name; ?> </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Metode Pemilihan Vendor</label>
                                            <select name="metode_pemilihan_vendor" id="" class="form-control" required>
                                                <option value="">Pilih salah satu</option>
                                                <?php foreach ($pemilihan as $data) { ?>
                                                <option value="<?php echo $data->metode; ?>"><?php echo $data->metode; ?> </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="">Jumlah Peserta</label>
                                            <input name="jumlah_peserta" class="form-control" type="number" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">TOR/KAK</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
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
                            </div>
                        </div>
                        
                        <div class="card">
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
                                        <!-- <?php $n=1;
                                            foreach ($data as $data) {
                                                if ($data->active=='1')$status='Active';
                                                elseif ($data->active=='0')$status='Inactive';
                                        ?>
                                        <tr>
                                            <td width="5%"><?php echo $n; ?></td>
                                            <td width="20%"><?php echo $data->username; ?></td>
                                            <td width="20%"><?php echo $data->role; ?></td>
                                            <td width="20%"><?php echo $data->koneksi; ?></td>
                                            <td width="10%"><?php echo $status; ?></td>
                                            <td>
                                                <?php if ($data->active=='0') { ?>
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

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"><i class="nav-icon fas fa-user-shield">  Data PIC User </i></h3>
                            </div>
                            <div class="card-body">
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
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"><i class="nav-icon fas fa-wallet">  Rincian Biaya Pelatihan</i></h3>
                            </div>
                            <div class="card-body">
                                <h7>Biaya Pelatihan</h7>
                                <hr>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Total Biaya</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3">Rp.</span>
                                                </div>
                                                <input name="tb_pelatihan" type="text" class="form-control" id="tb_pelatihan" >
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
                                                <input name="kurs_pelatihan" type="text" class="form-control" id="a.kurs" onkeyup="pelatihan()" required>
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
                                                <input name="konversi_pelatihan" type="text" class="form-control" id="a.konversi" onkeyup="pelatihan()" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h7>Biaya Akomodasi</h7>
                                <hr>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Total Biaya</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3">Rp.</span>
                                                </div>
                                                <input name="tb_akomodasi" type="text" class="form-control" id="tb_akomodasi" >
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
                                                <input name="kurs_akomodasi" type="text" class="form-control" id="b.kurs" onkeyup="akomodasi()" required>
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
                                                <input name="konversi_akomodasi" type="text" class="form-control" id="b.konversi" onkeyup="akomodasi()" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h7>Biaya SPPD</h7>
                                <hr>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Total Biaya</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3">Rp.</span>
                                                </div>
                                                <input name="tb_sppd" type="number" class="form-control" id="tb_sppd" >
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
                                                <input name="kurs_sppd" type="text" class="form-control" id="c.kurs" onkeyup="sppd()" required>
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
                                                <input name="konversi_sppd" type="text" class="form-control" id="c.konversi" onkeyup="sppd()" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
