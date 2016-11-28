<?php
session_start();
include('connection.php');
$username=$_POST['un'];
$password=$_POST['p'];
$sql=mysql_query("select * from user where u_username='$username' and password='$password'");
$n=mysql_num_rows($sql);
if($n!=0)
{
$arr=mysql_fetch_array($sql);
$_SESSION['uid']=$arr['uid'];
echo "<script>window.location.href='u_profile.php'</script>";
}
else
{
echo "<script>window.location.href='login.php'</script>";
}
?>