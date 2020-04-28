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
                    <form action="">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"><i class="nav-icon fas fa-briefcase">  Data Pelatihan</i></h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="">Kategori Training</label>
                                            <select name="" id="" class="custom-select">
                                                <option value="">Pilih salah satu</option>
                                                <option value="">TC, Teknikal</option>
                                                <option value="">MG, Managerial</option>
                                                <option value="">CL, Culture</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Jenis Training</label>
                                            <select name="" id="" class="custom-select" disabled>
                                                <option value="">Pilih salah satu</option>
                                                <option value="">PT, Public Training</option>
                                                <option value="">IT, In-House Training</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Nomor RO</label>
                                            <input class="form-control" type="text" disabled> 
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="">Judul Pelatihan</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Metode Penyelenggaraan</label>
                                            <select class="custom-select" name="" id="">
                                                <option value="">Pilih salah satu</option>
                                                <option value="">Swakelola</option>
                                                <option value="">Perkasa</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="">Kompetensi Bidang</label>
                                            <select class="custom-select" name="" id="">
                                                <option value="">Pilih salah satu</option>
                                                <option class="form-control" value="">Perancangan Sistem Infrastruktur Penyaluran Gas</option>
                                                <option class="form-control" value="">Upstream Economics</option>
                                                <option class="form-control" value="">Manajemen Sistem</option>
                                                <option class="form-control" value="">Building Organizational Talent</option>
                                                <option class="form-control" value="">Pengembangan Produk</option>
                                                <option class="form-control" value="">Pengelolaan Pembelajaran dan Pengembangan</option> 
                                                <option class="form-control" value="">Manajemen Asesmen</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Tanggal Mulai - Tanggal Selesai</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="far fa-calendar-alt"></i>
                                                </span>
                                                </div>
                                                <input type="text" class="form-control float-right" id="reservation">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Kota</label>
                                            <input class="form-control" type="text" placeholder="Kota Lokasi Training" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Tempat</label>
                                            <input class="form-control" type="text" placeholder="Tempat Lokasi Training" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Vendor Peneyelengara</label>
                                            <input class="form-control" type="text" placeholder="Dynamic Content">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="">Jumlah Peserta</label>
                                            <input class="form-control" type="number">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="">Catatan</label>
                                            <textarea class="form-control" name="" id="" cols=20 rows="1"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Form Usulan Pelatihan Publik</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Form Usulan Pelatihan Publik</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
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
                                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
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
                                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
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
                                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
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
                                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
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
                                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
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
                                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
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
                                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
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
                                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="btn-group float-right">
                                    <button type="button" class="btn btn-default float-right" onClick="javascript:history.back()">Back</button>
                                    <button type="submit" class="btn btn-success" style="background-color:#1a9e38; border-color:#1a9e38;">Save Draft</button>
                                    <button type="submit" class="btn btn-primary" style="background-color:#273b7a; border-color:#273b7a">Submit</button>
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
</body>



