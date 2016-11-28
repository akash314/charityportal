<?php
session_start();
include('connection.php');
$i=$_SESSION['uid'];
$en=$_POST['evnm'];
$sql1=mysql_query("select * from events where event_name='$en'");
$arr1=mysql_fetch_array($sql1);
$cid=$arr1['cid'];
$amt=$_POST['val'];
$sql2=mysql_query("insert into donations(uid,cid,event,amount) values('$i','$cid','$en','$amt')");
if($sql2)
{
	echo "<script>alert('Thank you for donating')</script>";
	echo "<script>window.location.href='u_profile.php'</script>";
}
?>