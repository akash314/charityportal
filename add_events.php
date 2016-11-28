<?php
session_start();
include('c_menu.php');
?>
<form action="add_events_pro.php" method="post">

<table>
<tr>
<td>Event Name</td>
<td><input type="text" name="e"/></td>
</tr>
<tr>
<td>Details</td>
<td><textarea name="d"></textarea></td>
</tr>
<tr>
<td>Ending Date</td>
<td><input type="text" name="ed"></td>
</tr>
<tr>
<td><input type="submit" value="submit">
</td></tr>
</table>
</form>