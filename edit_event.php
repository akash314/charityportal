<?php
session_start();
include('connection.php');
include('c_menu.php');
$i=$_SESSION['cid'];
$evnm=$_REQUEST['en'];
$sql=mysql_query("select * from events where event_name='$evnm'");
$arr=mysql_fetch_array($sql);
?>
<form action="edit_event_ac.php" method="post">
<table>
<tr>
<td>EVENT NAME:</td>
<td><input type="text" name="nm"  value="<?php echo $arr['event_name'];?>" disabled="disabled" /></td>
</tr>
<tr>
<td>DETAILS:</td>
<td><input type="text" name="detls" value="<?php echo $arr['details'];?>"/></td>
</tr>
<tr>
<td>ENDING DATE:</td>
<td><input type="text" name="date" value="<?php echo $arr['ending_date'];?>"/></td>
</tr>
<input type="hidden" value="<?php echo $evnm;?>" name="en"/>
<tr>
<td><input type="submit" value="Update" /></td>
</tr>

</table>
</table>