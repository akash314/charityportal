<?php 
session_start();
include('user_menu.php');
include('connection.php');
$sql=mysql_query("select * from events");
echo "<br/>";
?>
<div id="event">
	<?php
	while($arr=mysql_fetch_array($sql))
	{
		echo "<div id=head><a href='#'>".$arr['event_name']."</a></div>";
		echo "<div id=cont>".$arr['details']."</div>";
		$evnm=$arr['event_name'];
		echo "<a href='event_details.php?en=$evnm'>Comment</a>  ";
		echo "<a href='donate.php?en=$evnm'>Donate</a><br/><br/>";
	}
	?>
 </div>
		
    