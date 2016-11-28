<?php
session_start();
include("connection.php");
include("c_menu.php");
$i=$_SESSION['cid'];
$sql=mysql_query("select * from events where cid = $i");
$cd=date('d-m-Y');
 $cdt=strtotime($cd);


?>
<div id="event">
<?php 
while($arr=mysql_fetch_array($sql))
{
		$edate=$arr['ending_date'];
		 $edt=strtotime($edate);
	
		echo "<div id=head><a href='#'>".$arr['event_name']."</a></div>";
		echo "<div id=cont>".$arr['details']."</div>";
		echo "<div id=dt>".$arr['ending_date']."</div>";
		$evnm=$arr['event_name'];
		if($cdt>$edt)
		{
		echo "<b>Event Closed</b><br/>";
		}
		echo "<a href='edit_event.php?en=$evnm'>Edit</a>  ";
		
		echo "<a href='event_delete.php?en=$evnm'>Delete</a><br/><br/>";

}

?>
</div>
