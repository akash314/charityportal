<?php
session_start();
include('connection.php');
$i=$_SESSION['cid'];
$ev=$_POST['en'];
$sql=mysql_query("delete from events where event_name='$ev'");
echo "<script>window.location.href='existing_event.php'</script>";
?>
