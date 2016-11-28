<?php
session_start();
include('connection.php');
include('user_menu.php');
if($_SESSION['uid']==NULL)
{
echo "<script>window.location.href='login.php'</script>";
}
$i=$_SESSION['uid'];
$sql=mysql_query("select * from user where uid='$i'");
$arr=mysql_fetch_array($sql);
?>
<img src="<?php echo $arr['image']; ?>" width="30%" height="30%" />

<?php

echo "<br>Name : ".$arr['name'];
echo "<br>";
echo "Username : ".$arr['u_username'];
echo "<br>";
echo "Address : ".$arr['address'];
echo "<br>";
echo "DOB : ".$arr['dob'];
echo "<br>";
echo "Contact : ".$arr['contact'];
echo "<br>";
echo "Occupation : ".$arr['occupation'];

?>
