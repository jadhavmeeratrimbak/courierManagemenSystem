<?php
$id=$_GET['id'];
mysql_connect("localhost","root","");
mysql_select_db("cr_2020db")or die("Database Error..!");
if (mysql_query("delete from shop_type where SHOP_ID='".$id."'")) 
{
	echo '
		<script>
		alert("Record Deleted");
		window.location.href="shoptype_details.php";
		</script>
		';
}
else
{

}
?>