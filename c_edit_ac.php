<?php
session_start();
include('connection.php');
$i=$_SESSION['cid'];
$name=$_POST['nm'];
$username=$_POST['un'];
$password=$_POST['pwd'];
$addr=$_POST['addr'];
$con=$_POST['con'];
$imag=$_FILES['img']['name'];
if($imag==NULL)
{
$sql=mysql_query("update c_user set name='$name', password='$password',address='$addr',contact='$con' where cid='$i'");
}

else
{
$f=rand(0000,9999).time().$imag;
$folder='image/'.$f;
$temp=$_FILES['img']['tmp_name'];
move_uploaded_file($temp,$folder);
$sql=mysql_query("update c_user set name='$name', password='$password',address='$addr',contact='$con',image='$folder' where cid='$i'");
}

if($sql)
{
echo "<script>alert('Updated')</script>";
echo "<script>window.location.href='c_profile.php'</script>" ;
}
else
{
echo "<script>alert('Unable to update')</script>";
echo "<script>window.location.href='c_profile.php'</script>";
}
?>