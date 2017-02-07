<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>UIadmin</title>
	<!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

<script type="text/javascript" src="<?php echo base_url(); ?>JS/jquery-2.1.4.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>JS/functions.js"></script>

<!--------------------------------------------------------------------------->
<!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url();?>Theme/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>Theme/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url();?>Theme/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url();?>Theme/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo base_url();?>Theme/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url();?>Theme/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url();?>Theme/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url();?>Theme/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo base_url();?>Theme/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    
    <link rel="stylesheet" href="<?php echo base_url();?>css/nico.css">
<!--------------------------------------------------------------------------->

<script type="text/javascript">
	
$( document ).ready(function() {

});
	
</script>

</head>
<body>
<!--------------------------------------------------------------------------->
<body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
    <div class="wrapper">

      <header class="main-header">
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="pull-right logoImg">
            <img src="http://image.noelshack.com/fichiers/2015/40/1443709079-logopetitformat.png">
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">TABLEAU DE BORD</li>
      <li><a href="#"><i class="fa fa-book"></i> <span>Clients</span></a></li>
      <li onclick="GetTypes()"><a href="#"><i class="fa fa-book"></i> <span>GetTypes</span></a></li>
      <li onclick="ShowAddClient()"><a href="#"><i class="fa fa-book"></i><span>ShowAddClient</span></a></li>
      <li  onclick="GetEntity()"><a href="#"><i class="fa fa-book"></i> <span>GetEntity</span></a></li>
      <li onclick="GetPacks()"><a href="#"><i class="fa fa-book"></i> <span>GetPacks</span></a></li>-->
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
 	<center><h1>Administration MoovinDijon</h1></center><br />
          <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-book"></i> <span>Clients</span></a></li>
      <li onclick="GetTypes()"><a href="#"><i class="fa fa-book"></i> <span>GetTypes</span></a></li>
      <li onclick="ShowAddClient()"><a href="#"><i class="fa fa-book"></i> <span>ShowAddClient</span></a></li>
      <li  onclick="GetEntity()"><a href="#"><i class="fa fa-book"></i> <span>GetEntity</span></a></li>
      <li onclick="GetPacks()"><a href="#"><i class="fa fa-book"></i> <span>GetPacks</span></a></li>-->
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
<!-------------------------------------------------------------------------->
  <h1>Administration MoovinDijon</h1>

  <div id="divData">

  </div>
<!--------------------------------------------------------------------------> 
</section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
         <strong>Copyright &copy; 2015-2016 STBE - Moov'in Dijon - </strong> All rights reserved.
      </footer>

      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url();?>Theme/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url();?>Theme/bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="<?php echo base_url();?>Theme/plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url();?>Theme/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="<?php echo base_url();?>Theme/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url();?>Theme/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url();?>Theme/plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="<?php echo base_url();?>Theme/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="<?php echo base_url();?>Theme/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo base_url();?>Theme/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="<?php echo base_url();?>Theme/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>Theme/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url();?>Theme/dist/js/app.min.js"></script>
<!-------------------------------------------------------------------------->

</body>
</html>