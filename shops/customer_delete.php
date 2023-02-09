<?php
$id=$_GET['id'];
mysql_connect("localhost","root","");
mysql_select_db("cr_2020db")or die("Database Error..!");
if (mysql_query("delete from customer where ID='".$id."'")) 
{
	echo '
		<script>
		alert("Record Deleted");
		window.location.href="view_customer.php";
		</script>
		';
}
else
{

}
?>