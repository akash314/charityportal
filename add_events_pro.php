<?php
session_start();
include('connection.php');
include('c_menu.php');
$i=$_SESSION['cid'];
$evname=$_POST['e'];
$details=$_POST['d'];
$edate=$_POST['ed'];
$cd=date('d-m-Y');
$cdt=strtotime($cd);
$edt=strtotime($edate);
if($cdt>$edt)
{
	echo "<script>alert('Date Invalid!')</script>";
	echo "<script>window.location.href='add_events.php'</script>";
}

else
{
$sql=mysql_query("insert into events(cid,event_name,details,ending_date)
values('$i','$evname','$details','$edate')");
if($sql)
{
echo "<script>alert('event succesfully added')</script>";
echo "<script>window.location.href='existing_event.php'</script>";
}
else
{
echo "<script>alert('event can not be added')</script>";
echo "<script>window.location.href='add_events.php'</script>";         
}
}
?>