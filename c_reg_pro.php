<?php
include("connection.php");
$name=$_POST['nm'];
$username=$_POST['un'];
$password=$_POST['pwd'];
$con=$_POST['con'];
$address=$_POST['addr'];
$imag=$_FILES['img']['name'];
$f=rand(0000,9999).time().$imag;
$folder='image/'.$f;
$temp=$_FILES['img']['tmp_name'];
move_uploaded_file($temp,$folder);
$sql=mysql_query("insert into c_user(name,c_username,password,address,contact,image) values('$name','$username','$password','$address','$con','$folder')");
if($sql)
{
echo "<script>alert('Registered')</script>";
echo "<script>window.location.href='c_profile.php'</script>" ;
}
else
{
echo "<script>alert('Unregistered')</script>";
echo "<script>window.location.href='register.php'</script>";
}



?>