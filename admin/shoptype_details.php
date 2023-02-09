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

mysql_connect("localhost","root","")or die("server error");
mysql_select_db("cr_2020db")or die("database error");
?>
<head>
<script>
function shoptype_delete(val)
    {
     var r = confirm("Confirm to Delete order....!");
      if (r == true) {
        txt = "You pressed OK!";
      window.location.href="shoptype_delete.php?id="+val;

      } else {
        txt = "You pressed Cancel!";
      } 
    }
</script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Courier Master</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">

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
    <div class="card">
            <div class="card-header">
              <h3 class="card-title">Shop Type Details</h3>
            </div>
            
            <div class="card-body table table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead style="background-color: #007bff; color: #fff">
                <tr>
                  <th>Sr.No</th>
                  <th>Shop type</th>
                  <th>Update</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $sr=1;
                $sh1=mysql_query("select * from shop_type");
                while($sh=mysql_fetch_row($sh1))
                {
                  echo"
                <tr>
                  <td>$sr</td>
                  <td>$sh[1]</td>
                  <td style='width:10px'>
                    <a href='shoptype_update.php?id=".$sh[0]."'>
                      <button type='button' class='btn btn-block btn-outline-info btn-flat btn-xs'>Update</button>
                    </a>
                  </td>
                  <td style='width:10px'>
                   
                      <button type='button' class='btn btn-block btn-outline-danger btn-flat btn-xs' onclick='shoptype_delete($sh[0])'>Delete</button>
                    
                  </td>
                </tr>";
                $sr++;
                }
                
                ?>

                </tbody>
                
              </table>
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
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
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