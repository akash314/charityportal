<?php
session_start();
include('connection.php');
include('user_menu.php');
$i=$_SESSION['cid'];
$sql=mysql_query("select * from c_user where cid='$i'");
$arr=mysql_fetch_array($sql);
?>
<form action="c_edit_ac.php" method="post" enctype="multipart/form-data">
<table>
<tr>
<td>NAME:</td>
<td><input type="text" name="nm"  value="<?php echo $arr['name'];?>" /></td>
</tr>
<tr>
<td>USERNAME:</td>
<td><input type="text" value="<?php echo $arr['u_username'];?>" disabled="disabled"></td>
</tr>
<tr>
<td>PASSWORD:</td>
<td><input type="password" name="pwd" value="<?php echo $arr['password'];?>" /></td>
</tr>
<tr>
<td>ADDRESS:</td>
<td><textarea name="addr"><?php echo $arr['address'];?></textarea></td>
</tr>
<tr>
<td>CONTACT:</td>
<td><input type="text" name="con"  value="<?php echo $arr['contact'];?>" /></td>
</tr>
<tr>
<td>PROFILE PIC:</td>
<td><input type="file" name="img" /></td>
</tr>
<tr>
<td>SUBMIT</td>
<td><input type="submit" value="Update">
</td></tr>
</table>
</form>
