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
          <div class="col-md-7">
            
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">New Courier Boy</h3>
              </div>
              
              <form role="form" action="new_courierboy.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" name="name" required="">
                  </div>

                  <div class="row">
                    <div class="col-sm-4">
                       <label for="exampleInputPassword1">Contact</label>
                        <input type="tel" pattern="^\d{10}$" class="form-control" id="exampleInputPassword1" required="" placeholder="Enter Contact" name="contact">
                    </div>
                    <div class="col-sm-8">
                       <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleInputPassword1" required="" placeholder="Enter email" name="email">
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-sm-4">
                       <label for="exampleInputPassword1">Adhar No</label>
                        <input type="tel" pattern="^\d{14}$" class="form-control" id="exampleInputPassword1" required="" placeholder="Enter Adhar" name="adhar_no">
                    </div>
                    <div class="col-sm-8">
                       <label for="exampleInputPassword1">Address</label>
                      <textarea class="form-control" required="" placeholder="Enter Address"  name="address"></textarea>
                    </div>
                  </div>
                  <br>

                  <div class="row">
                    <div class="col-sm-4">
                      <label for="exampleInputPassword1">Education</label>
                      <input type="text" required="" class="form-control" id="exampleInputPassword1" placeholder="Enter Education" name="education">
                    </div>
                    <div class="col-sm-8">
                       <label for="exampleInputPassword1">Experience</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Experience" name="experience" required="">
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-sm-4">
                      <label for="exampleInputPassword1">Username</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" required="" placeholder="Enter Username" name="uname">
                    </div>
                    <div class="col-sm-8">
                       <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" required="" placeholder="Enter Password" name="pass">
                    </div>
                  </div>
                  <br>

                   <div class="row">
                    <div class="col-sm-4">
                      <label for="exampleInputPassword1">Photo</label>
                      <input type="file" class="form-control" id="exampleInputPassword1" name="image">
                    </div>
                  </div>
                 
                  
                </div>
                  
                </div>
              



                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="save">Submit</button>
                </div>
              </form>
            </div>
           

          </div>
          
        </div>
        
      </div><
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

<script src="plugins/jquery/jquery.min.js"></script>
<
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>

<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="plugins/chart.js/Chart.min.js"></script>

<script src="plugins/sparklines/sparkline.js"></script>

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

$max_id=1;
 $max1=mysql_query("select MAX(BOY_ID) from courier_boy");
$max=mysql_fetch_row($max1);

      if($max[0])
      {
        $max=$max[0];
        $max_id=$max+1;
      }
      else 
      {
       $max_id=1;
       } 
      $file_exists=array("jpg","jpeg","png","gif","bmp","pdf");//file extenssions supported for upload 

        
        $upload_exists = end (explode('.', $_FILES["image"]["name"]));//find extension of file 
        if(($upload_exists==null )||($upload_exists==""))//file is none or of 0kb
        {
            
            echo"<script>alert('uncompatible file'); </script>";
        }
        else
        {
            if((($_FILES['image']['size']<2000000) || in_array($upload_exists,$file_exists)))//file size & file extension support
            {
             $newname="$max_id"."_cus."."png";//name of file name to be saved
                $targetfile='upload/'.$newname;//location of folder with target file name 
                if($_FILES['image']['error']>0)//check if any error in file 
                {
                    echo"<script>alert('image 2 large  or pdf large size should b less than 2 mb');</script>";
                }
                else
                {
                    //upload file to location set above
                    move_uploaded_file($_FILES['image']['tmp_name'],$targetfile);//end img code



  if(mysql_query("insert into courier_boy values('','".$name1."','".$contact1."','".$email1."','".$adhar_no1."','".$address1."','".$education1."','".$experience1."','".$uname."','".$pass."','".$targetfile."')"))
  {
    echo'
    <script>
    alert("Courier Boy Added Successfully");
    window.location.href="new_courierboy.php";
    </script>
    ';
  }
  else
  {
    echo'
    <script>
    alert("Try Again");
    window.location.href="new_courierboy.php";
    </script>
    ';
  }
}
}
}
}
?>