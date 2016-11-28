<?php
session_start();
include('connection.php');
include('c_menu.php');
$i=$_SESSION['cid'];
?>
<form action="c_delete_pro.php" method="post">
<h4>Are you sure you want to delete your charity?</h4>
<input type="submit" value="Delete" />
