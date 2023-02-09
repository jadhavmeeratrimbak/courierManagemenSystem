<?php
 mysql_connect("localhost","root","")or die("server error");
mysql_select_db("cr_2020db")or die("database error");

  $pro_id=$_POST['pro_id'];
  if(mysql_query("update sh_product set STATUS='accepted' where ID='".$pro_id."'"))
    {
     
  
    }
    

  ?>