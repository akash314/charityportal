<?php
session_start();
include('connection.php');
$i=$_SESSION['cid'];
$sql=mysql_query("delete from c_user where cid='$i'");
session_unset();
session_destroy();
echo "<script>window.location.href='index.php'</script>";
?>