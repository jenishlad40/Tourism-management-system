<html>
<body>

<?php

function count_days($a,$b)
{
$date1 = date("y-m-d");
$date2 =$_REQUEST['date'];

$diff = abs(strtotime($date2) - strtotime($date1));

$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
$tot=($months * 30)+$days;
printf(" %d", $tot);

}

$cost=$_REQUEST['package_cost'];
$now=date("y-m-d");
$youedate=$_REQUEST['date'];
$day=count_days($now,$youedate);


if($day<7)
{
}
if ($day>7 && $day<15 )
{
	$cost=$cost-(($cost*25)/100);
echo $cost;
	
}
elseif ($day>15 &&$day<25)
{
	$cost=$cost-(($cost*50)/100);
echo $cost;

}
elseif ($day>25 && $day<30)
{
	$cost=$cost-(($cost*75)/100);
echo $cost;

}
elseif ($day<30 && $day>40)
{
	$cost=$cost-(($cost*75)/100);
echo $cost;
}
else{
	$cost=$cost-(($cost*90)/100);
echo $cost;
}

include('connection.php');
$email=$_REQUEST['Email_ID'];

$code=$_REQUEST['package_code']; 
$qr="insert into cancle_master select * from payment_master where Email_ID='".$email."' ";
mysql_query($qr,$con);
$qr2="UPDATE cancle_master set `package_cost`='".$cost."' where Email_ID='".$email."'";
mysql_query($qr2,$con);


$qry="DELETE from booking_master where Email_ID='".$email."'";
mysql_query($qry,$con) or mysql_error();
$qry1="DELETE from payment_master where Email_ID='".$email."'" ;
mysql_query($qry1,$con) or mysql_error();

header('location: home.php');
?>