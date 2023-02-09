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
    
    <div class="hero-wrap js-fullheight" style="background-image: url('logo/image8.webp');" data-stellar-background-ratio="0.8">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
          	<h2 class="subheading">Welcome To Courier Management</h2>
          	<h1>Delivery For Your 
						  <span
						     class="txt-rotate"
						     data-period="2000"
						     data-rotate='[ "Anywhere.", "Right.", "AnyTime.", "CourierDelivery." ]'></span>
						</h1>
            <!-- <h1 class="mb-4">Attorneys Fighting For Your Freedom</h1> -->
            <p class="mb-4">We Deliver on Time and that also Anywhere. Same day Express Courier Service........! </p>
           
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 d-flex">
    				 <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end" style="background-image:url(images/about.jpg);">
    					<!-- <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
    						<span class="icon-play"></span>
    					</a> -->
    				</div> 
    			</div>
    			<div class="col-md-6 pl-md-5">
    				<div class="row justify-content-start pt-3 pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<span class="subheading">Welcome to Courier Master</span>
		            <h2 class="mb-4">Good service and fast delivary</h2>
		            <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p> -->
		            <div class="tabulation-2 mt-4">
									<ul class="nav nav-pills nav-fill d-md-flex d-block">
									  <li class="nav-item mb-md-0 mb-2">
									    <a class="nav-link active py-2" data-toggle="tab" href="#home1">Our Mission</a>
									  </li>
									  <li class="nav-item px-lg-2 mb-md-0 mb-2">
									    <a class="nav-link py-2" data-toggle="tab" href="#home2">Our Vision</a>
									  </li>
									  <li class="nav-item">
									    <a class="nav-link py-2 mb-md-0 mb-2" data-toggle="tab" href="#home3">Our Value</a>
									  </li>
									</ul>
									<div class="tab-content bg-light rounded mt-2">
									  <div class="tab-pane container p-0 active" id="home1">
									  	<p>Welcome to Mission Courier
                                        Our drivers are safe, your packages are safe, your package is on-time and trackable using designated pickup, in route, and delivery notifications. We put extra personal service into every order to make sure you are completely and totally confident with every delivery.  At Mission Courier, our goal is to make sure our customers are 100% happy and satisfied.</p>
									  </div>
									  <div class="tab-pane container p-0 fade" id="home2">
									  	<p>To Deliver our commitment by managing our resources, conducting ourselves as socially responsible corporate citizens and adhering to the highest ethical standards. Also, to attract and retain customers by providing Best in Class transportation and fostering a profitable, disciplined culture of safety, service and trust.</p>
									  </div>
									  <div class="tab-pane container p-0 fade" id="home3">
									  	<p>Customer-driven
									  	Time-bound
										Flexible
										Socially-responsible
										Strong Sense of Ownership
										Safety.</p>
									  </div>
									</div>
								</div>
		            <div class="years d-flex mt-4 mt-md-5">
		            	<h4>
			            	<span class="number mr-2" data-number="40">0</span>
				            <span>Years of Experience</span>
			            </h4>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

		<section class="ftco-consultation ftco-section ftco-no-pt ftco-no-pb img" style="background-image: url(images/bg_2.jpg);">
			<div class="overlay"></div>
    	<div class="container">
    	<form role="form" action="index.php" method="POST">

    		<div class="row d-md-flex justify-content-end">
    			<div class="col-md-6 half p-3 py-5 pl-md-5 ftco-animate heading-section heading-section-white" >
    				<!-- <span class="subheading">Booking an Appointment</span> -->
    				<h2 class="mb-4">Registration enquiry for delivary</h2>
    				
    			<div class="form-group" >
	              <select class="form-control" name="type">
                          <option style="background-color: black; color: red">Select Type</option>
                          <?php
                          $type1=mysql_query("select * from shop_type");
                          while($types=mysql_fetch_row($type1))
                          {
                            echo'
                            <option value='.$types[0].' style="background-color: black; color: red">'.$types[1].'</option>
                            ';
                          }
                          ?>
                    </select>
	            </div>
	            <div class="form-group">
	              <input type="text" required="" class="form-control" placeholder="Shop Name" name="name" >
	            </div>
	            <div class="form-group">
	              <input type="text" required="" class="form-control" placeholder="Owner" name="owner">
	            </div>
	            <div class="form-group">
	              <input type="text" required="" class="form-control" placeholder="Owner Address" name="oaddress">
	            </div>
	            <div class="form-group">
	              <input type="text" required="" class="form-control" placeholder="Shop Address" name="saddress">
	            </div>
	            <div class="form-group">
	              <input type="tel" pattern="^\d{10}$" class="form-control" placeholder="Contact" name="contact">
	            </div>
	            <div class="form-group">
	              <input type="text" required="" class="form-control" placeholder="City" name="city">
	            </div>
	            <div class="form-group">
	              <input type="text" required="" class="form-control" placeholder="Username" name="uname">
	            </div>
	            <div class="form-group">
	              <input type="text" required="" class="form-control" placeholder="Password" name="pass">
	            </div>
	            <div class="form-group">
	              <input type="email" class="form-control" placeholder="Email" name="mail">
	            </div>
	            <div class="form-group">
	              <input type="submit" value="Send message" class="btn btn-dark py-3 px-4" name="save">
	            </div>
	         
    			</div>
    		</div>
    	</form>
    	</div>
    </section>

    <?php
  	include('footer.php');
 	?>

  </body>
</html>
<?php
if(isset($_POST['save']))
{
  $type1=$_POST['type'];
  $name1=$_POST['name'];
  $owner1=$_POST['owner'];
  $owner_addr1=$_POST['oaddress'];
  $shop_addr1=$_POST['saddress'];
  $contact1=$_POST['contact'];
  $city1=$_POST['city'];
  $username1=$_POST['uname'];
  $password1=$_POST['pass'];
  $email1=$_POST['mail'];
  

  if(mysql_query("insert into enquiry_form values('','".$type1."','".$name1."','".$owner1."','".$owner_addr1."','".$shop_addr1."','".$contact1."','".$city1."','".$username1."','".$password1."','".$email1."')"))
  {
    echo'
    <script>
    alert("Message Sent");
    window.location.href="index.php";
    </script>
    ';
  }
  else
  {
    echo'
    <script>
    alert("Try Again");
    window.location.href="index.php";
    </script>
    ';
  }
}
?>