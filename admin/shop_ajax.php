 <?php
 mysql_connect("localhost","root","")or die("server error");
mysql_select_db("cr_2020db")or die("database error");

 $tid=$_POST['tid'];
  $s1=mysql_query("select * from shop where SHOP_TYPE='".$tid."'");
  echo'
    <option>Select Shop</option>
    ';
  while($shop_names=mysql_fetch_row($s1))
  {
    echo'
    <option value='.$shop_names[0].'>'.$shop_names[2].'</option>
    ';
  }
  ?>