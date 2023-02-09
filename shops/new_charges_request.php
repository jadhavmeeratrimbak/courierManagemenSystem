<?php
mysql_connect("localhost","root","")or die("server error");
mysql_select_db("cr_2020db")or die("database error");

if(isset($_POST['save']))
{
  $SHOP_SELECT1=$_POST['shop_select'];
  $PRODUCT1=$_POST['product'];
  $CHARGES_PER_KM1=$_POST['charges_per_km'];
 

  if(mysql_query("insert into order_info values('','".$product1."','".$customer1."','".$quantity1."','".$_SESSION['shop']."','no','no','','','".$chr."','".$daddress."','".$ddate."')"))
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