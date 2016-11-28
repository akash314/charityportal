<?php
session_start();
include('connection.php');
include('c_menu.php');
if($_SESSION['cid']==NULL)
{
echo "<script>window.location.href='login.php'</script>";
}
$i=$_SESSION['cid'];
$sql=mysql_query("select * from c_user where cid='$i'");
$arr=mysql_fetch_array($sql);
?>
<img src="<?php echo $arr['image']; ?>" width="30%" height="30%" />

<?php

echo "<br>Name : ".$arr['name'];
echo "<br>";
echo "Username : ".$arr['c_username'];
echo "<br>";
echo "Address : ".$arr['address'];
echo "<br>";
echo "Contact : ".$arr['contact'];
echo "<br>";
?>
