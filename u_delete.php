<?php
session_start();
include('connection.php');
include('user_menu.php');
$i=$_SESSION['uid'];
?>
<form action="u_delete_pro.php" method="post">
<h4>Are you sure you want to delete your profile?</h4>
<input type="submit" value="Delete" />
