<!DOCTYPE html>
<html>
<?php
mysql_connect("localhost","root","")or die("server error");
mysql_select_db("cr_2020db")or die("database error");
session_start();
if(isset($_SESSION['admin']))
{

}
else
{
    echo '
 <script>
   window.location.href="../login.php";
    </script>
    ';
}
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Courier Master</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
 
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php
include('sidebar.php');
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content">
      <div class="container-fluid">
      <br>
        <h5 class="mb-2"><b>Courier Master</b></h5>
        <hr>
         <div class="row">
          <div class="col-md-6 col-sm-6 col-12">
            <div class="info-box bg-info">
              <span class="info-box-icon"><i class="nav-icon fas fa fa-truck "></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Vehicle Type</span>
                <span class="info-box-number">
                  <?php
                  $vc=mysql_num_rows(mysql_query("select * from vehicle_type "));
                  echo $vc;
                  ?>
                </span>

                <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
                
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-6 col-sm-6 col-12">
            <div class="info-box bg-success">
              <span class="info-box-icon"><i class="nav-icon fas fa fa-truck"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Vehicle</span>
                <span class="info-box-number">
                  <?php
                  $vc1=mysql_num_rows(mysql_query("select * from vehicle "));
                  echo $vc1;
                  ?>
                </span>

                <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
                
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-6 col-sm-6 col-12">
            <div class="info-box bg-danger">
              <span class="info-box-icon"><i class="nav-icon fas fa-store"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Shop Type</span>
                <span class="info-box-number">
                   <?php
                  $sh=mysql_num_rows(mysql_query("select * from shop_type "));
                  echo $sh;
                  ?>
                </span>

                <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
               
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-6 col-sm-6 col-12">
            <div class="info-box bg-primary">
              <span class="info-box-icon"><i class="nav-icon fas fa-store"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Shop</span>
                <span class="info-box-number">
                   <?php
                  $sh1=mysql_num_rows(mysql_query("select * from shop"));
                  echo $sh1;
                  ?>
                </span>

                <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
                
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        

        <div class="col-md-6 col-sm-6 col-12">
            <div class="info-box bg-warning">
              <span class="info-box-icon"><i class="nav-icon fas fa-user"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Courier boy</span>
                <span class="info-box-number">
                   <?php
                  $cb=mysql_num_rows(mysql_query("select * from courier_boy"));
                  echo $cb;
                  ?>
                </span>

                <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
                
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
       

       <div class="col-md-6 col-sm-6 col-12">
            <div class="info-box bg-black">
              <span class="info-box-icon"><i class="nav-icon fas fa-user"></i></span>

              <div class="info-box-content">
                <span class="info-box-text"><a href="work.php">Assign Accepted Order</a></span>
                <span class="info-box-number">   </span>

                <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
                
                
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
         </div>
      </div>
       


        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->

    <!-- Main content -->
              <!-- /.card-body -->
             
              <!-- /.card-footer-->
            </div>
            <!--/.direct-chat -->

            <!-- TO DO List -->
           
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
        
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
  <?php
  include('footer.php');
  ?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
