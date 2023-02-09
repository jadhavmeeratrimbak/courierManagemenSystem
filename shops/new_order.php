<!DOCTYPE html>
<html>
<?php
mysql_connect("localhost","root","")or die("server error");
mysql_select_db("cr_2020db")or die("database error");
?>
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
  <script type="text/javascript">
    function get_charge(val)
    {
       $.ajax(
        {
          type:"POST",
          url:"charges_ajax.php",
          data:'pid='+val,
          success:function(data)
          {
              // $("#shop_name").html(data);
              document.getElementById('charges_id').value=data;
          }
        });
    }
  </script>
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
                <h3 class="card-title">Order</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="new_order.php" method="POST">
              
                <div class="card-body">

                <div class="row">
                    <div class="col-sm-6">
                      <label for="exampleInputPassword1">Product</label>
                      <select class="form-control" name="product" onchange="get_charge(this.value)">
                      <option>Select Product</option>
                      <?php
                      $type1=mysql_query("select * from sh_product where WHICH_SHOP='".$_SESSION['shop']."' ");
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
                       <label for="exampleInputPassword1">Select Customer</label>
                       <select class="form-control" name="customer">
                      <option>Select Customer</option>
                      <?php
                      $type1=mysql_query("select * from customer where WHICH_SHOP='".$_SESSION['shop']."'");
                      while($types=mysql_fetch_row($type1))
                      {
                        echo'
                        <option value='.$types[0].'>'.$types[1].'</option>
                        ';
                      }
                      ?>
                    </select>
                  </div>
                </div>
                <br>


                <div class="row">
                    <div class="col-sm-6">
                        <label for="exampleInputEmail1">Charges</label>
                      <input type="text" class="form-control" id="charges_id"  name="chr" readonly="" >
                    </div>
                    <div class="col-sm-6">
                       <label for="exampleInputEmail1">Quantity</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Quantity" name="quantity">
                  </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-6">
                         <label for="exampleInputEmail1">Delivery Address</label>
                         <textarea class="form-control" placeholder="Enter Address" name="daddress"></textarea>
                    </div>
                    <div class="col-sm-6">
                        <label for="exampleInputEmail1">Delivery Date</label>
                       <input type="date" class="form-control"   name="ddate">
                    </div>
                </div>
                
               
              


                
                  
                <div class="card-footer">
                  <button type="submit" name="save" class="btn btn-primary">Submit</button>
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
<script src="../admin/admin/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../admin/admin/dist/js/demo.js"></script>
</body>
</html>
<?php
mysql_connect("localhost","root","")or die("server error");
mysql_select_db("cr_2020db")or die("database error");

if(isset($_POST['save']))
{
  $product1=$_POST['product'];
  $customer1=$_POST['customer'];
  $quantity1=$_POST['quantity'];
  $chr=$_POST['chr'];
  $daddress=$_POST['daddress'];
  $ddate=$_POST['ddate'];


  if(mysql_query("insert into order_info values('','".$product1."','".$customer1."','".$quantity1."','".$_SESSION['shop']."','no','no','','','".$chr."','".$daddress."','".$ddate."','','')"))
  {
    echo'
    <script>
    alert(" Ordered Successfully");
    window.location.href="new_order.php";
    </script>
    ';
  }
  else
  {
    echo'
    <script>
    alert("Try Again");
    window.location.href="new_order.php";
    </script>
    ';
  }
}
?>