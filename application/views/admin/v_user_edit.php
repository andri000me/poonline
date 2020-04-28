<?php $this->load->view('template/header'); ?>
  <title>Edit User</title>
<?php $this->load->view('template/navbar'); ?>
<?php $this->load->view('template/sidebar_menu/sidebar_main'); ?>
<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url().'admin/dist/calendar/css/bootstrap.min.css'; ?>">-->

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit User</h1>
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
              <form role="form" action="<?php echo base_url(). 'User/edit_user'; ?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="hidden" name="id" value="<?php echo $data[0]->id ?>">
                    <input type="username" class="form-control" name="username" placeholder="Masukkan Username" value="<?php echo $data[0]->username ?>" required>
                  </div>
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" value="<?php echo $data[0]->nama ?>" required>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Role</label>
                        <select type="role" class="form-control" name="role">
                          <?php
                          if($data[0]->role=="HCM"){
                            echo "<option selected>HCM</option>;
                                  <option>Perkasa</option>";
                          }else{
                            echo "<option>HCM</option>;
                                  <option selected>Perkasa</option>";
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Koneksi</label>
                        <select type="koneksi" class="form-control" id="koneksi" name="koneksi" onChange="changeKoneksi()">
                          <?php
                          if($data[0]->koneksi=="Manual"){
                            echo "<option selected>Manual</option>;
                                  <option>LDAP</option>";
                          }else{
                            echo "<option>Manual</option>;
                                  <option selected>LDAP</option>";  
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group" id="divpassword1" style="display: none;">
                    <label>Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" >
                  </div>
                  <div class="form-group" id="divpassword2"  style="display: none;">
                    <label>Konfirmasi Password</label>
                    <input type="password" class="form-control" id="confirm_Password" name="confirm_password" placeholder="Masukkan Password">
                  </div>
                </div>
                </div>
                <div class="card-footer clearfix">
                  <button type="submit" id="submit" name="submit" value="submit" class="btn btn-info float-right" style="background-color:#273b7a; border-color:#273b7a";>Save</button> 
                  <button type="button" class="btn btn-default float-right" onClick="javascript:history.back()">Back</button>
                </div>
              </form>
              <script type="text/javascript">
                  window.onload = function () {
                      document.getElementById("password").onchange = validatePassword;
                      document.getElementById("confirm_Password").onchange = validatePassword;
                  }
                  function validatePassword(){
                      var password=document.getElementById("password").value;
                      var confirm_Password=document.getElementById("confirm_Password").value;
                      if(password!=confirm_Password)
                          document.getElementById("confirm_Password").setCustomValidity("Password Tidak Sama, Coba Lagi");
                      else
                          document.getElementById("confirm_Password").setCustomValidity('');
                  }
              </script>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<?php $this->load->view('template/footer'); ?>

<script type="text/javascript">
    function changeKoneksi(){
      var koneksi = document.getElementById('koneksi').value;
      if (koneksi === 'LDAP') {
        document.getElementById('divpassword1').style.display = 'none';
        document.getElementById('divpassword2').style.display = 'none';
      }else{
        document.getElementById("password").required = true;
        document.getElementById("confirm_Password").required = true;
        document.getElementById('divpassword1').style.display = 'block' ;
        document.getElementById('divpassword2').style.display = 'block' ;
      }
    }
</script>
</body>
</html>
