<!DOCTYPE html>
<html>
<?php
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
<?php
mysql_connect("localhost","root","")or die("server error");
mysql_select_db("cr_2020db")or die("database error");
 $sid=$_POST['id'];
 $sh=mysql_query("select * from shop where SHOP_ID='".$sid."'");
 $sh1=mysql_fetch_row($sh);
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
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">New Shop</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="shop_update.php?id=<?php echo $sid?>" method="POST">
                <div class="card-body">

                 <div class="row">
                   <!--  <div class="col-sm-6">
                       <label for="exampleInputPassword1">Type</label>
                        <select class="form-control" name="tid">
                          <option>Select Type</option>
                          <?php
                          $type1=mysql_query("select * from shop_type");
                          while($types=mysql_fetch_row($type1))
                          {
                            echo'
                            <option value='.$types[0].'>'.$types[1].'</option>
                            ';
                          }
                          ?>
                    </select>
                       
                    </div> -->
                    <div class="col-sm-6">
                       <label for="exampleInputPassword1">Shop Name</label>
                         <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Shop Name" name="name" value="<?php echo $sh1[2]?>">
                    </div>
                  </div>

                 

                  <div class="form-group">
                    <label for="exampleInputEmail1">Owner</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Owner Name" name="owner" value="<?php echo $sh1[3]?>">
                    <input type="hidden" class="form-control"  name="shop_id" value="<?php echo $sh1[0]?>">

                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                       <label for="exampleInputPassword1">Owner Adderss</label>
                        <textarea class="form-control" placeholder="Enter Owner Address"  name="owneraddr"><?php echo $sh1[4]?></textarea>
                    </div>
                    <div class="col-sm-6">
                       <label for="exampleInputPassword1">Shop Adderss</label>
                        <textarea class="form-control"  placeholder="Enter Shop Address" name="shopaddr"><?php echo $sh1[5]?></textarea>
                    </div>
                  </div>

                   <div class="row">
                    <div class="col-sm-6">
                       <label for="exampleInputPassword1">Contact</label>
                         <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter Contact" name="contact" value="<?php echo $sh1[6]?>">
                       
                    </div>
                    <div class="col-sm-6">
                       <label for="exampleInputPassword1">City</label>
                         <input type="text" class="form-control" value="<?php echo $sh1[7]?>" id="exampleInputPassword1" placeholder="Enter City" name="city">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                       <label for="exampleInputPassword1">Username</label>
                         <input type="text" class="form-control" value="<?php echo $sh1[8]?>" id="exampleInputPassword1" placeholder="Enter Username" name="uname">
                       
                    </div>
                    <div class="col-sm-6">
                       <label for="exampleInputPassword1">Password</label>
                         <input type="text" class="form-control" value="<?php echo $sh1[9]?>" id="exampleInputPassword1" placeholder="Enter Password" name="pass">
                    </div>
                  </div>
                  

                 
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control" value="<?php echo $sh1[10]?>" id="exampleInputPassword1" placeholder="Enter Email Adderss" name="email">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="save">Submit</button>
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
if(isset($_POST['save']))
{
  // $type1=$_POST['tid'];
  $name1=$_POST['name'];
  $owner1=$_POST['owner'];
  $owner_addr1=$_POST['owneraddr'];
  $shop_addr1=$_POST['shopaddr'];
  $contact1=$_POST['contact'];
  $city1=$_POST['city'];
  $username1=$_POST['uname'];
  $password1=$_POST['pass'];
  $email1=$_POST['email'];

  $shop_id=$_POST['shop_id'];

  

  if(mysql_query("update shop set SHOP_NAME='".$name1."',SHOP_OWNER='".$owner1."',OWNER_ADDRESS ='".$owner_addr1."',SHOP_ADDRESS='".$shop_addr1."', SHOP_CONTACT ='".$contact1."',SHOP_CITY='".$city1."', USERNAME ='".$username1."',PASSWORD='".$password1."', SHOP_EMAIL ='".$email1."' where SHOP_ID='".$shop_id."' "))
  {
    echo'
    <script>
    alert("Record Updated");
    window.location.href="shop_details.php";
    </script>
    ';
  }
  else
  {
    echo'
    <script>
    alert("Try Again");
    window.location.href="shop_details.php";
    </script>
    ';
  }
}
?>