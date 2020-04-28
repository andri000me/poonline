<!-- edited by zulhan -->
<?php $this->load->view('template/header'); ?>
  <title>Edit Cost Structure</title>
<?php $this->load->view('template/navbar'); ?>
<?php $this->load->view('template/sidebar_menu/sidebar_main'); ?>
<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url().'admin/dist/calendar/css/bootstrap.min.css'; ?>">-->

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Cost Structure</h1>
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
              <form role="form" action="<?php echo base_url(). 'Cost_structure/edit_cost_structure'; ?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label>ID Cost Structure</label>
                    <input type="number" class="form-control" name="id_cost_structure" placeholder="" value="<?php echo $data[0]->id_cost_structure ?>" required>
                  </div>
                  <div class="form-group">
                    <label>Detail</label>
                    <input type="text" class="form-control" name="detail" placeholder="Masukan Detail Informasi Cost Structure" value="<?php echo $data[0]->detail ?>" required>
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
