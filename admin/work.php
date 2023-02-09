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
        <div class="row">
          <!-- left column -->
          <div class="col-md-3">
          </div>
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Work Assigned</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="work.php" method="POST">
                <div class="card-body">
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1"> Order</label>
                    <select class="form-control" name="orid">
                          <option>Select Order</option>
                          <?php
                          $or1=mysql_query("select * from order_info where ACCEPT1='accepted'");
                          while($or=mysql_fetch_row($or1))
                          {
                            $pname=mysql_fetch_row(mysql_query("select * from sh_product where ID='".$or[1]."'"));

                            if($or[12]==0)
                            {
                               echo'

                            <option value='.$or[0].'>ORD - '.$or[0].' &nbsp; - <b style="color:orange">'. $pname[1].'</b></td>

                            </option>
                            ';
                            }
                            else
                            {
                              echo'

                            <option style="color:red" value='.$or[0].'>ORD - '.$or[0].' &nbsp; - <b style="color:red">'. $pname[1].'</b></td>

                            </option>
                            ';
                            }
                           
                          }
                          ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Select Courierboy</label>
                   <select class="form-control" name="cid">
                          <option>Select Courierboy</option>
                          <?php
                        $cb1=mysql_query("select * from courier_boy");
                          while($cb=mysql_fetch_row($cb1))
                          {
                            echo'
                            <option value='.$cb[0].'>'.$cb[1].'</option>
                            ';
                          }  
                          ?>
                    </select>
                  </div>
                </div>
               

                <div class="card-footer">
                  <button type="submit" name="save" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
           
          </div>
         
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    
            </div>
            
          </section>
         
        </div>
       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  
  <?php
  include('footer.php');
  ?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    
  </aside>
  <!-- /.control-sidebar -->
</div>

<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

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
<?php
mysql_connect("localhost","root","")or die("server error");
mysql_select_db("cr_2020db")or die("database error");
if(isset($_POST['save']))
{
  $ORD_ID=$_POST['orid'];
  $BOY_ID=$_POST['cid'];

  if(mysql_query("update order_info set work_assign_id='".$BOY_ID."' where ID='".$ORD_ID."'"))
  {
    echo'
    <script>
    alert("Work Assinged  Successfully");
    window.location.href="work.php";
    </script>
    ';
  }
  else
  {
    echo'
    <script>
    alert("Try Again");
    window.location.href="work.php";
    </script>
    ';
  }
}
?>