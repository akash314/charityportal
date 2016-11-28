<?php
session_start();
include('connection.php');
include('user_menu.php');
$i=$_SESSION['uid'];
$ev=$_REQUEST['en'];
$sql=mysql_query("select * from events where event_name='$ev'");
$arr=mysql_fetch_array($sql);

$e_id=$arr['eid'];
$sql1=mysql_query("select * from comments where eid=$e_id");
echo "<div id=head><a href='#'>".$arr['event_name']."</a></div>";
echo "<div id=cont>".$arr['details']."</div>";
?>
<form action='comment_pro.php' method='post'>
<textarea name='nc'></textarea>
<input type="hidden" name="en" value="<?php echo $ev;?>" />
<input type='submit' value='Add Comment'/> </form>
<?php
while($arr1=mysql_fetch_array($sql1))
{
	$u=$arr1['uid'];
	$sql2=mysql_query("select * from user where uid=$u");
	$arr2=mysql_fetch_array($sql2);
	echo "<div id=head><a href='#'>".$arr2['name']."</a></div>";
	echo "<div id=cont>".$arr1['comment']."</div>";
}
?>