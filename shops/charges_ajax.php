 <?php
 mysql_connect("localhost","root","")or die("server error");
mysql_select_db("cr_2020db")or die("database error");

 $tid=$_POST['pid'];
  $s1=mysql_query("select * from sh_product where ID='".$tid."'");
  $s2=mysql_fetch_row($s1);
  echo $s2[3];
  ?>