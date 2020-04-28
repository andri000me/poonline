<?php $this->load->view('template/header'); ?>
<title>Tambah User</title>
<?php $this->load->view('template/top-header'); ?>
<?php $this->load->view('template/sidebar_menu/sidebar-home'); ?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah User</h1>
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
            <form role="form" action="<?php echo base_url(). 'User/add_user'; ?>" method="post">
              <div class="card-body">
                <div class="form-group">
                  <label>Username</label>
                </div>
                <div class="form-group">
                  <label>Role</label>
                  <select type="role" class="form-control" name="role" required>
                    <option value="">Pilih Role</option>
                    <option value="Admin">Admin</option>
                    <option value="Maker">Maker</option>
                    <option value="Approver">Approver</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Koneksi</label>
                  <select type="koneksi" class="form-control" name="koneksi" required>
                    <option value="">Pilih Koneksi</option>
                    <option value="LDAP">LDAP</option>
                    <option value="Manual">Manual</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required>
                </div>
                <div class="form-group">
                  <label>Konfirmasi Password</label>
                  <input type="password" class="form-control" id="confirm_Password" name="confirm_password" placeholder="Masukkan Password" required>
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
                    document.getElementById("confirm_Password").setCustomValidity("Passwords Tidak Sama, Coba Lagi");
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
<?php 

$option = "";
$option .= "'".'<select class="form-control select2" name="nipg[]"" style="width: 100%;">';
foreach ($select as $key) {
  $key['EMP_NAME'] = str_replace("'", "", $key['EMP_NAME']);
  $option .= '<option value="'.$key['EMPLOYEE_NUMBER'].'-'.$key['EMP_NAME'].'">'.$key['EMP_NAME'].' ('.$key['EMPLOYEE_NUMBER'].')</option>';
}
$option .= '</select>'."'";
?>
<?php $this->load->view('template/footer'); ?>
</body>
</html>