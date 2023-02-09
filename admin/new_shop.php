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
  
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
 
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">

  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">

  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">

  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  
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
          <div class="col-md-2">
          </div>
          <div class="col-md-8">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">New Shop</h3>
              </div>
              
              <form role="form" action="new_shop.php" method="POST">
                <div class="card-body">

                 <div class="row">
                    <div class="col-sm-6">
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
                       
                    </div>
                    <div class="col-sm-6">
                       <label for="exampleInputPassword1">Shop Name</label>
                         <input type="mail" class="form-control" id="exampleInputEmail1" placeholder="Enter Shop Name" required="" name="name">
                    </div>
                  </div>

                 

                  <div class="form-group">
                    <label for="exampleInputEmail1">Owner</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Owner Name" name="owner" required="">
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                       <label for="exampleInputPassword1">Owner Adderss</label>
                        <textarea class="form-control" placeholder="Enter Owner Address"  name="owneraddr" required=""></textarea>
                    </div>
                    <div class="col-sm-6">
                       <label for="exampleInputPassword1">Shop Adderss</label>
                        <textarea class="form-control"  placeholder="Enter Shop Address" name="shopaddr" required=""></textarea>
                    </div>
                  </div>

                   <div class="row">
                    <div class="col-sm-6">
                       <label for="exampleInputPassword1">Contact</label>
                         <input type="tel" pattern="^\d{10}$"  class="form-control"  placeholder="Enter Contact" name="contact" required="">
                       
                    </div>
                    <div class="col-sm-6">
                       <label for="exampleInputPassword1">City</label>
                         <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter City" name="city" required="">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                       <label for="exampleInputPassword1">Username</label>
                         <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Username" name="uname" required="">
                       
                    </div>
                    <div class="col-sm-6">
                       <label for="exampleInputPassword1">Password</label>
                         <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" name="pass" required="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control" required="" placeholder="Enter Email Adderss" name="email">
                  </div>
                  
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="save">Submit</button>
                </div>
              </form>
            </div>
            

          </div>
          
        </div>

      </div>
    
    
  </div>
      

  <?php
  include('footer.php');
  ?>
  
  <aside class="control-sidebar control-sidebar-dark">
    
  </aside>
  
</div>

<script src="plugins/jquery/jquery.min.js"></script>

<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="plugins/chart.js/Chart.min.js"></script>

<script src="plugins/sparklines/sparkline.js"></script>

<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

<script src="plugins/jquery-knob/jquery.knob.min.js"></script>

<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>

<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<script src="plugins/summernote/summernote-bs4.min.js"></script>

<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="dist/js/adminlte.js"></script>

<script src="dist/js/pages/dashboard.js"></script>

<script src="dist/js/demo.js"></script>
</body>
</html>
<?php
if(isset($_POST['save']))
{
  $type1=$_POST['tid'];
  $name1=$_POST['name'];
  $owner1=$_POST['owner'];
  $owner_addr1=$_POST['owneraddr'];
  $shop_addr1=$_POST['shopaddr'];
  $contact1=$_POST['contact'];
  $city1=$_POST['city'];
  $username1=$_POST['uname'];
  $password1=$_POST['pass'];
  $email1=$_POST['email'];
  

  if(mysql_query("insert into shop values('','".$type1."','".$name1."','".$owner1."','".$owner_addr1."','".$shop_addr1."','".$contact1."','".$city1."','".$username1."','".$password1."','".$email1."')"))
  {
    echo'
    <script>
    alert("New Shop Added Successfully");
    window.location.href="new_shop.php";
    </script>
    ';
  }
  else
  {
    echo'
    <script>
    alert("Try Again");
    window.location.href="new_shop.php";
    </script>
    ';
  }
}
?>