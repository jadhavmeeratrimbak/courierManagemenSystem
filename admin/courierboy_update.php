<!DOCTYPE html>
<html>
<?php
mysql_connect("localhost","root","")or die("server error");
mysql_select_db("cr_2020db")or die("database error");
 $cid=$_GET['id'];
 $cb=mysql_query("select * from courier_boy where BOY_ID='".$cid."'");
 $cb1=mysql_fetch_row($cb);
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
        <div class="row">
          <!-- left column -->
          <div class="col-md-2">
          </div>
          <div class="col-md-7">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">New Courier Boy</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="courierboy_update.php?id=<?php echo $cid?>" method="POST" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" name="name"  value="<?php echo $cb1[1]?>">
                    c
                  </div>

                  <div class="row">
                    <div class="col-sm-4">
                       <label for="exampleInputPassword1">Contact</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter email" name="contact" value="<?php echo $cb1[2]?>">
                    </div>
                    <div class="col-sm-8">
                       <label for="exampleInputPassword1">Email</label>
                        <input type="mail" class="form-control" id="exampleInputPassword1" placeholder="Enter email" name="email" value="<?php echo $cb1[3]?>">
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-sm-4">
                       <label for="exampleInputPassword1">Adhar No</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Adhar" name="adhar_no" value="<?php echo $cb1[4]?>">
                    </div>
                    <div class="col-sm-8">
                       <label for="exampleInputPassword1">Address</label>
                      <textarea class="form-control" name="address"><?php echo $cb1[5]?>"</textarea>
                    </div>
                  </div>
                  <br>

                  <div class="row">
                    <div class="col-sm-4">
                      <label for="exampleInputPassword1">Education</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Education" name="education" value="<?php echo $cb1[6]?>">
                    </div>
                    <div class="col-sm-8">
                       <label for="exampleInputPassword1">Experience</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Experience" name="experience" value="<?php echo $cb1[7]?>">
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-sm-4">
                      <label for="exampleInputPassword1">Username</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Education" name="uname" value="<?php echo $cb1[8]?>">
                    </div>
                    <div class="col-sm-8">
                       <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Experience" name="pass" value="<?php echo $cb1[9]?>">
                    </div>
                  </div>
                  <br>
<!-- 
                   <div class="row">
                    <div class="col-sm-4">
                      <label for="exampleInputPassword1">Photo</label>
                      <input type="file" class="form-control" id="exampleInputPassword1" name="image">
                    </div>
                  </div> -->
                 
                  
                </div>
                  
                </div>
              



                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="save">Submit</button>
                </div>
              </form>
            </div>
           

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          
          <!--/.col (right) -->
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
<?php
mysql_connect("localhost","root","")or die("server error");
mysql_select_db("cr_2020db")or die("database error");
if(isset($_POST['save']))
{
  
  $name1=$_POST['name'];
  $contact1=$_POST['contact'];
  $email1=$_POST['email'];
  $adhar_no1=$_POST['adhar_no'];
  $address1=$_POST['address'];
  $education1=$_POST['education'];
  $experience1=$_POST['experience'];
  $uname=$_POST['uname'];
  $pass=$_POST['pass'];
  $cid=$_POST['cid'];



  if(mysql_query("update courier_boy set BOY_NAME='".$name1."',BOY_CONTACT='".$contact1."',BOY_EMAIL='".$email1."',BOY_ADHAR_NO='".$adhar_no1."',BOY_ADDRESS='".$address1."',BOY_EDUCTOIN='".$education1."',BOY_EXPERIENCE='".$experience1."',BOY_UNAME='".$uname."',BOY_PASS='".$pass."' where BOY_ID='".$cid."' "))
  {
    echo'
    <script>
    alert("Record Updated");
    window.location.href="courierboy_details.php";
    </script>
    ';
  }
  else
  {
    echo'
    <script>
    alert("Try Again");
    window.location.href="courierboy_details.php";
    </script>
    ';
  }
}
// }
// }
// }
?>

