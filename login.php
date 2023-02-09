<!DOCTYPE html>
<html lang="en">
<?php
mysql_connect("localhost","root","")or die("server error");
mysql_select_db("cr_2020db")or die("database error");
?>
  <head>
    <title>Courier Master</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
	<?php
  	include('menubar.php');
 	?>

    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('logo/image1.jpg');" data-stellar-background-ratio="0.5">
      <div class=""></div>
      <div class="container">
    <section class="ftco-section contact-section" >
      <div class="container">
       
        <div class="row block-9 no-gutters" >
          <div class="col-lg-6 " style="background-color: #000; opacity: 0.5">

            <form  class=" p-5 contact-form" action="login.php" method="POST">
            	<legend>Login</legend>

              <div class="form-group">
                <input type="text" class="form-control" name="uname" placeholder="Username">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="pass" placeholder="Password">
              </div>
              
              <div class="form-group">
                <input type="submit" value="Submit" name="save" class="btn btn-success ">
              </div>
            </form>
          
          </div>

        
        </div>
      </div>
    </section>
      </div>
    </div>
    <?php
  	include('footer.php');
 	?>

  </body>
</html>

<?php
if(isset($_POST['save']))
{
	
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
    
    $res=mysql_query("select * from admin where UNAME='".$uname."' && PASS='".$pass."'");
    $row=mysql_fetch_row($res);


    $sh=mysql_query("select * from shop where USERNAME='".$uname."' && PASSWORD='".$pass."'");
    $sh1=mysql_fetch_row($sh);

    $cb=mysql_query("select * from courier_boy where  BOY_UNAME ='".$uname."' &&  BOY_PASS='".$pass."'");
    $cb1=mysql_fetch_row($cb);

    $cu=mysql_query("select * from customer where  USERNAME ='".$uname."' &&  PASSWORD='".$pass."'");
    $cu1=mysql_fetch_row($cu);

    

   if($num=mysql_num_rows($res)>0)
     {
     session_start();
     $_SESSION['admin']=$row[0];


    echo'
    <script>
    alert("Login Successfully");
   window.location.href="admin/index.php";
    </script>
    ';
    }
    else if($num2=mysql_num_rows($sh)>0)
     {
     session_start();
     $_SESSION['shop']=$sh1[0];

      echo'
      <script>
      alert("Login Successfully");
     window.location.href="shops/index.php";
      </script>
      ';
      }
     else if($num3=mysql_num_rows($cb)>0)
     {
     session_start();
     $_SESSION['courier_boy']=$cb1[0];

      echo'
      <script>
       alert("Login Successfully");
     window.location.href="courier_boy/index.php";
      </script>
      ';
      }

      else if($num4=mysql_num_rows($cu)>0)
     {
     session_start();
     $_SESSION['customer']=$cu1[0];

      echo'
      <script>
      alert("Login Sucessfully ");
     window.location.href="customer/index.php";
      </script>
      ';
      }
    
    else
    {
        echo'
    <script>
    alert("Wrong Username & Password ");
   window.location.href="login.php";
    </script>
    ';
    }
}
?>