<?php
session_start();
include('connection.php');
include('user_menu.php');
$i=$_SESSION['uid'];
$dt=date('d-m-Y');
$cmt=$_POST['nc'];
$evnm=$_POST['en'];
echo $evnm;
$sql=mysql_query("select * from events where event_name='$evnm'");
$arr=mysql_fetch_array($sql);
$eid=$arr['eid'];
$sql1=mysql_query("insert into comments(eid,uid,comment,date) values('$eid','$i','$cmt','$dt')");

if($sql1)
{
	echo "<script>alert('Comment Posted!')</script>";
	echo "<script>window.location.href='u_profile.php'</script>";
}
?>