<?php
session_start();
include('connection.php');
$username=$_POST['un'];
$password=$_POST['p'];
$sql=mysql_query("select * from c_user where c_username='$username' and password='$password'");
$n=mysql_num_rows($sql);
if($n!=0)
{
$arr=mysql_fetch_array($sql);
$_SESSION['cid']=$arr['cid'];
echo "<script>window.location.href='c_profile.php'</script>";
}
else
{
echo "<script>window.location.href='login.php'</script>";
}
?>