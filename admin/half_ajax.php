 <?php
 mysql_connect("localhost","root","")or die("server error");
mysql_select_db("cr_2020db")or die("database error");

  $total_km=$_POST['a'];
  $half_data=$_POST['half_data'];
  echo$total_km*$half_data;

  
  ?>