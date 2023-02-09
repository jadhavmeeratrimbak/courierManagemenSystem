<!DOCTYPE html>
<html>
<?php
mysql_connect("localhost","root","")or die("server error");
mysql_select_db("cr_2020db")or die("database error");
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
  <script type="text/javascript">
    function type_get(val)
    {
      $.ajax(
        {
          type:"POST",
          url:"shop_ajax.php",
          data:'tid='+val,
          success:function(data)
          {
              $("#shop_name").html(data);
             // document.getElementById('shop_name').value=data;
          }
        });
    }

     function product_get(val)
    {
      // var shop_id=document.getElementById('shop_id');
      $.ajax(
        {
          type:"POST",
          url:"order_ajax.php",
          data:'sid='+val,
          success:function(data)
          {
              $("#a1").html(data);
             // document.getElementById('shop_name').value=data;
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
        <div class="row">

          <div class="col-md-6">
            <div class="row">
              <div class="col-sm-12 card card-primary">
                <div class="card-body">
                <div class="row">
                    <div class="col-sm-6 well"> 
                      <div class="form-group">
                      <label for="exampleInputEmail1">Type</label>
                      <select class="form-control" name="tid" onchange="type_get(this.value)">
                        <option> Select Type</option>
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
                    </div>

                    <div class="col-sm-6 well">
                        <div class="form-group">
                         <label for="exampleInputEmail1">Shop</label>
                          <select class="form-control" name="shop_id" id="shop_name" onchange="product_get(this.value)">
                          <option> Select Shop</option>
                          </select>
                        </div>
                     </div>  
                    </div>
                </div>
              </div>
            </div>
            <div class="row" >
              <div class="col-md-12" id="a1">
                 <img src="logo/s.jpg" class="product-image" alt="Product Image">
              </div>
            </div>
          </div>
          
          <div id="blue_table" class="col-sm-6 well">

          </div>
        </div>  
         
         
       
      </div><!-- /.container-fluid -->
    </section>
            </div>
          </form>  
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
if(isset($_GET['save']))
{
  $count=$_GET['count'];
  for($i=1;$i<=$count;$i++)
  {
  $pid=$_GET['product_id'.$i.''];
  $charges=$_GET['charges'.$i.''];
  
    if(mysql_query("update sh_product set CHARGES='".$charges."' where ID='".$pid."'"))
    {
      echo'
    <script>
    alert("Request Sent");
    window.location.href="new_chargesrq.php";
    </script>
    ';
    }
    else
    {
      echo'
    <script>
    alert("Try Again");
    window.location.href="new_chargesrq.php";
    </script>
    ';
    }
  }
 

 
}
?>