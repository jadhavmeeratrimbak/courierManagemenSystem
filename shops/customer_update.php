<!DOCTYPE html>
<html>
<?php
session_start();
if(isset($_SESSION['shop']))
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
$cid=$_GET['id'];
 $cu=mysql_query("select * from customer where ID='".$cid."'");
 $cu1=mysql_fetch_row($cu);
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Courier Master</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../admin/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../admin/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../admin/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../admin/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  
  <?php
include('sidebar.php');
  ?>

  <div class="content-wrapper">
    
     <section class="content">
      <div class="container-fluid">
      <br>
        <div class="row">
          
          <div class="col-md-1">
          </div>
          <div class="col-md-8">
            
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Customer</h3>
              </div>
              
              <form role="form" action="customer_update.php?id=<?php echo $cid?>" method="POST">
                <div class="card-body">
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" name="name" value="<?php echo $cu1[1]?>">

                    <input type="hidden" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" name="cid" value="<?php echo $cu1[0]?>">
                  </div>

                  <div class="row">
                    <div class="col-sm-4">
                       <label for="exampleInputPassword1">Contact</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter Contact" name="contact" value="<?php echo $cu1[3]?>">
                    </div>
                    <div class="col-sm-8">
                       <label for="exampleInputPassword1">Email</label>
                        <input type="mail" class="form-control" id="exampleInputPassword1" placeholder="Enter email" name="email" value="<?php echo $cu1[4]?>">
                    </div>
                  </div>
                  <br>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Address</label>
                      <textarea class="form-control" name="address"><?php echo $cu1[5]?></textarea>
                  </div>
                

                  <div class="row">
                    <div class="col-sm-6">
                      <label for="exampleInputPassword1">Username</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Username" name="uname" value="<?php echo $cu1[6]?>">
                    </div>
                    <div class="col-sm-6">
                       <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" name="pass" value="<?php echo $cu1[7]?>">
                    </div>
                  </div>
                </div>
               
                <div class="card-footer">
                  <button type="submit" name="save" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

          </div>
          
        </div>
        
      </div>
    </section>
   
            </div>
            
          </section>
          
        </div>
        
      </div>
    </section>
   
  </div>

 
  <?php
  include('footer.php');
  ?>
  
  <aside class="control-sidebar control-sidebar-dark">
    
  </aside>

</div>


<!-- jQuery -->
<script src="../admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../admin/plugins/moment/moment.min.js"></script>
<script src="../admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../admin/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../admin/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../admin/dist/js/demo.js"></script>
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
  $address1=$_POST['address'];
  $uname=$_POST['uname'];
  $pass=$_POST['pass'];
  $cid=$_POST['cid'];


  if(mysql_query("update customer set CUS_NAME='".$name1."',CUS_CONTACT='".$contact1."',CUS_CONTACT='".$contact1."',CUS_EMAIL='".$email1."',CUS_ADDRESS='".$address1."',USERNAME='".$uname."',PASSWORD='".$pass."' where ID='".$cid."'"))
  {
    echo'
    <script>
    alert("Record Updated");
    window.location.href="view_customer.php";
    </script>
    ';
  }
  else
  {
    echo'
    <script>
    alert("Try Again");
    window.location.href="view_customer.php";
    </script>
    ';
  }
}
?>