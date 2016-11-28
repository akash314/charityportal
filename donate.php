<?php
session_start();
include('connection.php');
include('user_menu.php');
$i=$_SESSION['uid'];
$ev=@ $_REQUEST['en'];
$sql=mysql_query("select * from events where event_name='$ev'");
$arr=mysql_fetch_array($sql);
echo "<div id=head><a href='#'>".$arr['event_name']."</a></div>";
echo "<div id=cont>".$arr['details']."</div>";
?>
Enter amount:(INR)
<form action='donate_pro.php' method='post'>
<input type="hidden" name="evnm" value="<?php echo $ev;?>"/>
<input type='text' name='val' /><input type='submit' value='Donate'/> </form>
