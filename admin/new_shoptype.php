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
        <div class="row">
          
          <div class="col-md-3">
          </div>
          <div class="col-md-6">
           
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">New Shop Type</h3>
              </div>
              
              <form role="form" action="new_shoptype.php" method="POST">
                <div class="card-body">
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Type</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Type" name="type">
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
mysql_connect("localhost","root","")or die("server error");
mysql_select_db("cr_2020db")or die("database error");
if(isset($_POST['save']))
{
  $type1=$_POST['type'];

  if(mysql_query("insert into shop_type values('','".$type1."')"))
  {
    echo'
    <script>
    alert("Inserted Successfully");
    window.location.href="new_shoptype.php";
    </script>
    ';
  }
  else
  {
    echo'
    <script>
    alert("Try Again");
    window.location.href="new_shoptype.php";
    </script>
    ';
  }
}
?>
