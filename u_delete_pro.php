<?php
session_start();
include('connection.php');
$i=$_SESSION['uid'];
$sql=mysql_query("delete from user where uid='$i'");
session_unset();
session_destroy();
echo "<script>window.location.href='index.php'</script>";
?>