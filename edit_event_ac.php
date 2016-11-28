<?php
session_start();
include('connection.php');
$evnm=$_POST['en'];
$name=$_POST['nm'];
$dtls=$_POST['detls'];
$dt=$_POST['date'];
$cd=date('d-m-Y');
$cdt=strtotime($cd);
$edt=strtotime($dt);
if($cdt>$edt)
{
	echo "<script>alert('Date Invalid!')</script>";
	echo "<script>window.location.href='existing_event.php'</script>";
}

else
{
$sql=mysql_query("update events set details='$dtls', ending_date='$dt' where event_name='$evnm'");

if($sql)
{
echo "<script>alert('Updated')</script>";
echo "<script>window.location.href='existing_event.php'</script>" ;
}
else
{
echo "<script>alert('Unable to update')</script>";
echo "<script>window.location.href='existing_event.php'</script>";
}
}