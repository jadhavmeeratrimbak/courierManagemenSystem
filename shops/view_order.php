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
<script>
function order_delete(val)
    {
     var r = confirm("Confirm to Delete order....!");
      if (r == true) {
        txt = "You pressed OK!";
      window.location.href="order_delete.php?id="+val;

      } else {
        txt = "You pressed Cancel!";
      } 
    }
</script>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Courier Master</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css">

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
  <script>
    function order_fun(val) 
    {
      var r = confirm("Confirm to send order....!");
      if (r == true) {
        txt = "You pressed OK!";
      window.location.href="send_ord.php?id="+val;

      } else {
        txt = "You pressed Cancel!";
      }
    }

    function order_delete(val)
    {
     var r = confirm("Confirm to Delete order....!");
      if (r == true) {
        txt = "You pressed OK!";
      window.location.href="order_delete.php?id="+val;

      } else {
        txt = "You pressed Cancel!";
      } 
    }
</script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <?php
include('sidebar.php');
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table table-responsive" >
               <table id="example1" class="table table-bordered table-striped" style="background-color: #ccffdd">
                <thead style="background-color: #007bff; color: #fff">
                <tr>
                  <th>Sr.No</th>
                  <th>Order.No</th>
                  <th>Product</th>
                  <th>Customer</th>

                  <th>Qunatity</th>
                  <th>Status</th>
                  <th>Send</th>


                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $sr=1;
                $or1=mysql_query("select * from order_info where SHOP_ID='".$_SESSION['shop']."'");
                while($or=mysql_fetch_row($or1))
                {
                   $or_product_q=mysql_query("select * from sh_product WHERE ID='".$or[1]."'");
                   $or_product_row=mysql_fetch_row($or_product_q);
               
                   $or_customer_q=mysql_query("select * from customer WHERE ID='".$or[2]."'");
                   $or_customer_row=mysql_fetch_row($or_customer_q);
   
                  echo"
                <tr>
                  <td>$sr</td>
                  <td style='color:green'><b>ORDER$or[0]</b></td>
                  <td>$or_product_row[1]</td>
                  <td>$or_customer_row[1]</td>
                  <td>$or[3]</td>";

                  if($or[6]=='no')
                  {
                  echo"<td style='color:orange'><b>Pending</b></td>";

                  }

                  else if($or[6]=='Accepted')
                  {
                  echo"<td style='color:blue'><b>Accepted</b></td>";

                  }

                  else if($or[6]=='Cancelled')
                  {
                  echo"<td style='color:red'><b>Cancelled</b></td>";

                  }


                  if($or[5]=='no')
                  {
                     echo"<td style='width:10px'>
                      <button type='button' onclick='order_fun($or[0])' class='btn btn-block btn-outline-warning btn-flat btn-xs'>Send</button>
                  </td>";
                  }
                  else
                  {
                     echo"<td style='width:10px'>
                      <button type='button' onclick='order_fun($or[0])' class='btn btn-block btn-primary btn-flat btn-xs' disabled>Sent</button>
                  </td>";
                  }
                 

                  echo"<td style='width:10px'>
                       <button class='btn btn-block btn-outline-danger btn-flat btn-xs'onclick='order_delete($or[0])'>Delete</button>
                  </td>
                </tr>";
                $sr++;
                }
                
                ?>

                </tbody>
                
              </table>
            </div>
            <!-- /.card-body -->
          </div>
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
<script src="../admin/plugins/jquery/jquery.min.js"></script>
<script src="../admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="../admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../admin/plugins/chart.js/Chart.min.js"></script>
<script src="../admin/plugins/sparklines/sparkline.js"></script>
<script src="../admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="../admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="../admin/plugins/moment/moment.min.js"></script>
<script src="../admin/plugins/daterangepicker/daterangepicker.js"></script>
<script src="../admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="../admin/plugins/summernote/summernote-bs4.min.js"></script>
<script src="../admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="../admin/dist/js/adminlte.js"></script>
<script src="../admin/dist/js/pages/dashboard.js"></script>
<script src="../admin/dist/js/demo.js"></script>
<script src="../admin/plugins/datatables/jquery.dataTables.js"></script>
<script src="../admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>