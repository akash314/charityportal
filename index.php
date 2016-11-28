
<?php
include('menu.php');
include('connection.php');
$sql=mysql_query("select * from donations order by amount desc limit 0,10");
$sql1=mysql_query("select * from events order by eid desc limit 0,10");
?>
<div style="position:absolute">
<h3>Latest Events</h3></div>
<br /><br /><br />
<?php 
	 
	
	while($arr1=mysql_fetch_array($sql1))
	{
?>
<div style="position:absolute; padding:20px; outline-style:solid; width:60px; outline-color:#0033FF; left: 9px; top: 86px;">
<?php	
		$evnm=$arr1['event_name'];
		$evdt=$arr1['details'];
		$edt=$arr1['ending_date'];
		echo $evnm."<br>";
		echo $evdt ."<br>";
		echo $edt."<br>";
?>
</div>
<?php		
	}
?>	


<div style="float:right; margin-right:70px"><h3>Top Donations</h3></div>
<br /><br /><br /><br />
<div style="float:right; outline-style:double; padding:20px; outline-color:#006600; width: 184px; height: 133px;margin-right:20px; ">
<?php 
	 
	
	while($arr=mysql_fetch_array($sql))
	{	
?>
<div style="outline-style:solid; outline-color:#0033FF; margin-top:5px; margin-bottom:25px">
<?php	
		$ui=$arr['uid'];
		$sql2=mysql_query("select * from user where uid='$ui'");
		$arr2=mysql_fetch_array($sql2);
		$un=$arr2['u_username'];
		$ev=$arr['event'];
		$amt=$arr['amount'];
		echo $un."<br>";
		echo $ev ."<br>";
		echo $amt."<br>";
?>
</div>
<?php		
	}
?>	
</div>		
	
