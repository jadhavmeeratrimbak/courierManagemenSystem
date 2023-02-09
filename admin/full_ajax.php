 <?php
 mysql_connect("localhost","root","")or die("server error");
mysql_select_db("cr_2020db")or die("database error");

  $order_id=$_POST['order_id'];
   if(mysql_query("update order_info set ACCEPT1='accepted' where ID='".$order_id."' "))
  {
    echo'
    <script>
    alert("Order Accepted");
    window.location.href="new_orderrq.php";
    </script>
    ';
  }
  else
  {
    echo'
    <script>
    alert("Try Again");
    window.location.href="new_orderrq.php";
    </script>
    ';
  }

  
  ?>