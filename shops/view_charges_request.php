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
  <script type="text/javascript">
      function Accept_order(val)
      {
        $.ajax(
        {
          type:"POST",
          url:"accept_ajax.php",
          data:'pro_id='+val,
          success:function(data)
          {
             location.href = "view_charges_request.php";
              // $("#shop_name").html(data);
             // document.getElementById('shop_name').value=data;
          }
        });
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
            <div class="card-body table table-responsive">
               <table id="example1" class="table table-bordered table-striped">
                <thead style="background-color: #007bff; color: #fff">
                <tr>
                  <th>Sr.No</th>
                  <th>Product</th>
                  <th style='text-align:center'>Charges</th>
                  <th style='text-align:center'>Accept</th>

                </tr>
                </thead>
                <tbody>
                <?php
                $sr=1;
                $pr1=mysql_query("select * from sh_product where WHICH_SHOP='".$_SESSION['shop']."'");
                while($pr=mysql_fetch_row($pr1))
                {
                  echo"
                <tr>
                  <td>$sr</td>
                  <td>$pr[1]</td>
                  <td style='text-align:center'>$pr[3]</td>
                  <td style='text-align:center'>
                    <a>";
                    if($pr[4]=='pending')
                    {
                       echo"<input type='button' class='btn btn-danger btn-xs' name='save' value='&nbsp; &nbsp; Accept &nbsp;' onclick='Accept_order($pr[0])'>";

                    }
                    else
                    {
                       echo"<input type='button' class='btn btn-success btn-xs' name='save' value='Accepted' >";

                    }
                   

                   echo" </a>

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
