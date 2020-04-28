<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">  
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="<?php echo base_url();?>Admin /plugins/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>Admin/bootstrap/icheck-bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>Admin/dist/css/adminlte.min.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url();?>Admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>Admin/plugins/jqvmap/jqvmap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>Admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>Admin/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?php echo base_url();?>Admin/plugins/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="<?php echo base_url();?>Admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css">

  <!-- Kalender baru -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'Admin/dist/calendar/css/style.css'; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'Admin/dist/calendar/font-awesome/css/font-awesome.min.css'; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'Admin/dist/calendar/plugins/fullcalendar/fullcalendar.css'; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'Admin/dist/calendar/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css'; ?>">

  <!-- Datepicker -->
  <link rel="stylesheet" href="<?php echo base_url();?>Admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>Admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>Admin/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>Admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>Admin/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    
  <!-- Field Password User -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type='text/javascript'>
    $(window).load(function(){
    $("#koneksi").change(function() {
          console.log($("#koneksi option:selected").val());
          if ($("#koneksi option:selected").val() == 'LDAP') {
            $('#password').prop('hidden', 'true');
          } else {
            $('#password').prop('hidden', false);
          }
        });
    });
  </script>

  <!-- Realisasi Modals -->
  <link rel="stylesheet" href="<?php echo base_url();?>Admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>Admin/plugins/toastr/toastr.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

  <!-- <script src="<?php echo base_url();?>Admin/plugins/jspdf/jspdf.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>

  <!-- Export Excel-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

