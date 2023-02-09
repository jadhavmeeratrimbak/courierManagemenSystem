 <?php
 mysql_connect("localhost","root","")or die("server error");
mysql_select_db("cr_2020db")or die("database error");

 $oid=$_POST['oid'];
  if(mysql_query("update order_info set ACCEPT1='Cancelled' where ID='".$oid."' "))
  {
    echo'
    <script>
    alert("Order Calcelled");
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