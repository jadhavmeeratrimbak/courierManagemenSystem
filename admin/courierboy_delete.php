<?php
$id=$_GET['id'];
mysql_connect("localhost","root","");
mysql_select_db("cr_2020db")or die("Database Error..!");
if (mysql_query("delete from courier_boy where BOY_ID='".$id."'")) 
{
	echo '
		<script>
		alert("Record Deleted");
		window.location.href="courierboy_details.php";
		</script>
		';
}
else
{

}
?>