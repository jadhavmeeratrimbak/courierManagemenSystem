<?php
mysql_connect("localhost","root","")or die("server error");
mysql_select_db("cr_2020db")or die("database error");

if(mysql_query("update order_info set SEND1='yes' where ID='".$_GET['id']."'"))
  {
    echo'
    <script>
    alert("Request Sent");
    window.location.href="view_order.php";
    </script>
    ';
  }
  else
  {
    echo'
    <script>
    alert("Try Again");
    window.location.href="view_order.php";
    </script>
    ';
  }?>