<?php
session_start();
include('connection.php');
include('user_menu.php');
$i=$_SESSION['cid'];
$evnm=$_REQUEST['en'];

?>
<form action="event_delete_pro.php" method="post">
<h4>Are you sure you want to delete the event?</h4>
<input type="hidden" name="en" value="<?php echo $evnm; ?>"/>
<input type="submit" value="Delete" />
</form>

