<?php
include("connection.php");
$name=$_POST['nm'];
$username=$_POST['un'];
$password=$_POST['pwd'];
$dob=$_POST['dob'];
$con=$_POST['con'];
$address=$_POST['addr'];
$ocp=$_POST['ocp'];
$imag=$_FILES['img']['name'];
$f=rand(0000,9999).time().$imag;
$folder='image/'.$f;
$temp=$_FILES['img']['tmp_name'];
move_uploaded_file($temp,$folder);
$sql=mysql_query("insert into user(name,u_username,password,dob,contact,address,occupation,image) values('$name','$username','$password','$dob','$con','$address','$ocp','$folder')");
if($sql)
{
echo "<script>alert('Registered')</script>";
echo "<script>window.location.href='u_profile.php'</script>" ;
}
else
{
echo "<script>alert('Unregistered')</script>";
echo "<script>window.location.href='register.php'</script>";
}
?>