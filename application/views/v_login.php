<?php $this->load->view('template/header'); ?>
<title>PO Online</title>
</head>


<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <img src="<?php echo base_url();?>assets//pgn.png" style="width:30%;"/>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Welcome!</p>

      <form action="<?php echo base_url().'Login' ?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Username" required>
          <?php echo form_error('username'); ?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" required>
          <?php echo form_error('password'); ?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat" name="login" value="login" style="border-radius:11px">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<?php if ($this->session->flashdata('sukses')) { ?>        
        <script type="text/javascript">
            alert("<?php echo $this->session->flashdata('sukses'); ?>");
        </script>
<?php } ?>

<?php $this->load->view('template/footer'); ?>
</body>
</html>