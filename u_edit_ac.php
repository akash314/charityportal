<?php
session_start();
include('connection.php');
include('user_menu.php');
$i=$_SESSION['uid'];
$name=$_POST['nm'];
$password=$_POST['pwd'];
$dob=$_POST['dob'];
$con=$_POST['con'];
$addr=$_POST['addr'];
$ocp=$_POST['ocp'];
$imag=$_FILES['img']['name'];
if($imag==NULL)
{
$sql=mysql_query("update user set name='$name', password='$password', dob='$dob', contact='$con', address='$addr', occupation='$ocp' where uid='$i'");
}

else
{
$f=rand(0000,9999).time().$imag;
$folder='image/'.$f;
$temp=$_FILES['img']['tmp_name'];
move_uploaded_file($temp,$folder);
$sql=mysql_query("update user set name='$name', password='$password', dob='$dob', contact='$con', address='$addr', occupation='$ocp', image='$folder' where uid='$i'");
}

if($sql)
{
echo "<script>alert('Updated')</script>";
echo "<script>window.location.href='u_profile.php'</script>" ;
}
else
{
echo "<script>alert('Unable to update')</script>";
echo "<script>window.location.href='u_profile.php'</script>";
}
?>