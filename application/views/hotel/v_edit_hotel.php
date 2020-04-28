 <!-- add by zulhan -->
<?php $this->load->view('template/header'); ?>
  <title>Edit Hotel</title>
<?php $this->load->view('template/navbar'); ?>
<?php $this->load->view('template/sidebar_menu/sidebar_main'); ?>
<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url().'admin/dist/calendar/css/bootstrap.min.css'; ?>">-->

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data Hotel</h1>
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
              <form role="form" action="<?php echo base_url(). 'Hotel/edit_hotel'; ?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label>Hotel Name</label>
                    <input type="hidden" name="id" value="<?php echo $data[0]->id ?>">
                    <input type="text" class="form-control" name="name" value="<?php echo $data[0]->name ?>" required>
                  </div>
                  <div class="form-group">
                    <label>Marketing</label>
                    <input type="text" class="form-control" name="marketing" value="<?php echo $data[0]->marketing ?>" required>
                  </div>
                  <div class="form-group">
                    <label>Contact Number</label>
                    <input type="text" class="form-control" name="contact" value="<?php echo $data[0]->contact ?>" required>
                  </div>
                  <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address" value="<?php echo $data[0]->address ?>" required>
                  </div>
                  <div class="form-group">
                    <label>City</label>
                    <select name="category" id="" class="custom-select">
                      <option value=""><?php echo $data[0]->city ?></option>
                      <option value="">Bandung</option>
                      <option value="">etc</option>
                    </select>
                  </div>
                  <div class="form-group">    
                    <label>Room Rate</label>
                    <input type="text" class="form-control" name="roomrate" alue="<?php echo $data[0]->roomrate ?>" required>
                </div>
                <div class="form-group">    
                    <label>Description Room Rate</label>
                    <input type="text" class="form-control" name="description_room" alue="<?php echo $data[0]->description_room ?>" required>
                </div>
                <div class="form-group">    
                    <label>Meeting Package</label>
                    <input type="text" class="form-control" name="meeting" alue="<?php echo $data[0]->meeting ?>" required>
                </div>
                <div class="form-group">    
                    <label>Description Meeting Packagae</label>
                    <input type="text" class="form-control" name="description_meeting" alue="<?php echo $data[0]->description_meeting ?>" required>
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
