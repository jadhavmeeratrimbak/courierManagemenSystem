 <?php
 mysql_connect("localhost","root","")or die("server error");
mysql_select_db("cr_2020db")or die("database error");

 echo$oid=$_POST['oid'];
 echo$gt=$_POST['gt'];
 echo$km=$_POST['km'];

  if(mysql_query("update order_info set ACCEPT1='Accepted', KM ='".$km."', GRAND_TOTAL='".$gt."' where ID='".$oid."' "))
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