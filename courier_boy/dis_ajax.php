<?php
 mysql_connect("localhost","root","")or die("server error");
mysql_select_db("cr_2020db")or die("database error");

  $pro_id=$_POST['oid'];

  $or_id= substr($pro_id, 4);
  $status= substr($pro_id, 0,3);
  if($status=='dis')
  {
	  	if(mysql_query("update order_info set boy_status='Dispatched' where ID='".$or_id."'"))
	    {
	     echo "Order Dispatched";
	  
	    }
  }

  if($status=='del')
  {
	  	if(mysql_query("update order_info set boy_status='Delivered' where ID='".$or_id."'"))
	    {
	     
	     echo "Order Delivered";
	  
	    }
  }

  
    

  ?>