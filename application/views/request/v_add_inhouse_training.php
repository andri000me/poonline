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
                                            <input name="nomor" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="">Kategori Pelatihan</label>
                                            <select name="kategori_pelatihan" id="" class="custom-select">
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
                                            <input name="judul" class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Metode Penyelenggaraan</label>
                                            <select class="custom-select" name="metode_penyelenggaraan" id="">
                                                <option value="">Pilih salah satu</option>
                                                <?php foreach ($metode as $data) { ?>
                                                    <option value="<?php echo $data->metode; ?>"><?php echo $data->metode; ?> </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
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
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Jenis Kompetensi</label>
                                            <select class="custom-select" name="jenis_kompetensi" id="">
                                                <option value="">Pilih salah satu</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
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
                                                <input name="tanggal_mulai" type="date" class="form-control">
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
                                                <input name="tanggal_selesai" type="date" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Provinsi</label>
                                            <select class="custom-select" name="provinsi" id="provinsi" required>
                                                <option value="">Pilih Provinsi</option>
                                                 <?php
                                                    foreach ($provinsi as $prov) {
                                                    ?>
                                                    <option <?php echo $provinsi_selected == $prov->id_provinsi ? 'selected="selected"' : '' ?>
                                                        value="<?php echo $prov->id_provinsi ?>"><?php echo $prov->nama_provinsi ?></option>
                                                    <?php
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Kota/Kabupaten</label>
                                            <select class="custom-select" name="kota" id="kota" required>
                                                <option value="">No selected</option>
                                                <?php
                                                foreach ($kota as $kot) {
                                                    ?>
                                                    <option <?php echo $kota_selected == $kot->kota_id_provinsi ? 'selected="selected"' : '' ?>
                                                        class="<?php echo $kot->kota_id_provinsi ?>" value="<?php echo $kot->id_kota ?>"><?php echo $kot->nama_kota ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Tempat</label>
                                            <input name="tempat" class="form-control" type="text" placeholder="Tempat Lokasi Training" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Vendor Penyelenggara</label>
                                            <select class="custom-select" name="vendor_penyelenggara" id="vendor_penyelenggara" required>
                                                <option value="">Pilih salah satu</option>
                                                <?php
                                                    foreach ($vendor_name as $vend) {
                                                    ?>
                                                    <option <?php echo $vendor_selected == $vend->vendor_name ? 'selected="selected"' : '' ?>
                                                        value="<?php echo $vend->vendor_name ?>"><?php echo $vend->vendor_name ?></option>
                                                    <?php
                                                    }
                                                ?>      
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">No. Telp Vendor</label>
                                            <select class="custom-select" name="contact" id="contact" required>
                                                <?php
                                                foreach ($contact as $kot) {
                                                    ?>
                                                    <option <?php echo $contact_selected == $kot->vendor_name ? 'selected="selected"' : '' ?>
                                                        class="<?php echo $kot->vendor_name ?>" value="<?php echo $kot->contact ?>"><?php echo $kot->contact ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="">Alamat Vendor</label>
                                            <select class="custom-select" name="address" id="address" required>
                                                <?php
                                                foreach ($address as $kot) {
                                                    ?>
                                                    <option <?php echo $address_selected == $kot->vendor_name ? 'selected="selected"' : '' ?>
                                                        class="<?php echo $kot->vendor_name ?>" value="<?php echo $kot->address ?>"><?php echo $kot->address ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Metode Pemilihan Vendor</label>
                                            <select name="pemilihan_vendor" id="" class="form-control">
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
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">TOR/KAK</label>
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
                                                <input name="" type="text" class="form-control" id="tb_pelatihan" >
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
                                                <input type="text" class="form-control" id="a.kurs" onkeyup="pelatihan()">
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
                                                <input name="" type="text" class="form-control" id="a.konversi" onkeyup="pelatihan()">
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
                                                <input name="" type="text" class="form-control" id="tb_akomodasi" >
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
                                                <input type="text" class="form-control" id="b.kurs" onkeyup="akomodasi()">
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
                                                <input name="" type="text" class="form-control" id="b.konversi" onkeyup="akomodasi()">
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
                                                <input name="" type="text" class="form-control" id="tb_sppd" >
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
                                                <input type="text" class="form-control" id="c.kurs" onkeyup="sppd()">
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
                                                <input name="" type="text" class="form-control" id="c.konversi" onkeyup="sppd()">
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
<script src="<?php echo base_url('assets/jquery-1.10.2.min.js') ?>"></script>
<script src="<?php echo base_url('assets/jquery.chained.min.js') ?>"></script>
<script>
    $("#kota").chained("#provinsi");
    $("#contact").chained("#vendor_penyelenggara")
    $("#address").chained("#vendor_penyelenggara")
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
