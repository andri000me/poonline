<!-- add by zulhan -->
<?php $this->load->view('template/header'); ?>
  <title>Tambah Hotel      </title>
<?php $this->load->view('template/navbar'); ?>
<?php $this->load->view('template/sidebar_menu/sidebar_main'); ?>
<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url().'admin/dist/calendar/css/bootstrap.min.css'; ?>">-->

<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah Hotel Baru</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <form role="form" action="<?php echo base_url(). 'Hotel/add_hotel'; ?>" method="post">
              <div class="card-body">
                <div class="form-group">    
                    <label>Hotel Name</label>
                    <input type="text" class="form-control" name="name" placeholder="please insert the Hotel name correctly" required> 
                </div>
                <div class="form-group">    
                    <label>Marketing</label>
                    <input type="text" class="form-control" name="marketing" placeholder="please insert the marketing data correctly" required>
                </div>
                <div class="form-group">    
                    <label>Contact Number</label>
                    <input type="text" class="form-control" name="contact" placeholder="please insert the contact number correctly" required>
                </div>
                <div class="form-group">    
                    <label>Address</label>
                    <input type="text" class="form-control" name="address" placeholder="please insert the address correctly" required>
                </div>
                <div class="form-group">    
                  <label>City</label>
                    <select class="custom-select" name="kota" id="">
                      <option value="">Pilih Kota</option>
                        <!-- <?php foreach ($kota as $_kota) { ?>
                          <option value="<?php echo $_kota->kota; ?>"><?php echo $_kota->kota; ?> </option>
                        <?php } ?> -->
                      <option value="">Bandung</option>
                    </select>
                </div>
                <div class="form-group">    
                    <label>Room Rate</label>
                    <input type="text" class="form-control" name="roomrate" placeholder="please insert the room rate correctly" required>
                </div>
                <div class="form-group">    
                    <label>Description Room Rate</label>
                    <input type="text" class="form-control" name="description_room" placeholder="please insert the Description correctly" required>
                </div>
                <div class="form-group">    
                    <label>Meeting Package</label>
                    <input type="text" class="form-control" name="meeting" placeholder="please insert the Meeting Package correctly" required>
                </div>
                <div class="form-group">    
                    <label>Description Meeting Packagae</label>
                    <input type="text" class="form-control" name="description_meeting" placeholder="please insert the Description correctly" required>
                </div>
              </div>
              <div class="card-footer clearfix">
                <button type="submit" id="submit" name="submit" value="submit" class="btn btn-info float-right" style="background-color:#273b7a; border-color:#273b7a";>Save</button>
                <button type="button" class="btn btn-default float-right" onClick="javascript:history.back()">Back</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php $this->load->view('template/footer'); ?>

</body>
</html>