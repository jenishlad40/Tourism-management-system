<html>
<body>

<?php
include("connection.php");


function count_days($a,$b)
{
	$code=$_REQUEST['package_code']; 

	include("connection.php");
	$sql="select `tour_date` from package_master where package_code='".$code."'";
echo $sql;
$rs1=mysql_query($sql,$con);
while($rows=mysql_fetch_array($rs1))
{
	 $rows['tour_date'];
	
}
$date1 = date("y-m-d");
$date2= $rows['tour_date'];

$diff = abs(strtotime($date2) - strtotime($date1));

$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
$tot=($months * 30)+$days;
printf(" %d", $tot);

}
	$code=$_REQUEST['package_code']; 

$sql="select `tour_date`,`package_cost` from package_master where package_code='".$code."'";

$rs1=mysql_query($sql,$con);
while($rows=mysql_fetch_array($rs1))
{
	echo $rows['tour_date'];
	$cos= $rows['package_cost'];
}
$cost=$_REQUEST['package_cost'];
$now=date("y-m-d");
$youedate=$rows['tour_date'];
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

$ncos=$cos-$cost;
include('connection.php');
$email=$_REQUEST['Email_ID'];
$pname=$_REQUEST['pname']; 

$qr="insert into cancle_master select * from payment_master where Email_ID='".$email."' ";
mysql_query($qr,$con);
$qr2="UPDATE cancle_master set `package_cost`='".$cost."' where Email_ID='".$email."'";
mysql_query($qr2,$con);
$qry2="DELETE from pass_master where Email_ID='".$email."' && pname='".$pname."'";
echo $qry2;
mysql_query($qry2,$con);
$qry="UPDATE payment_master set `package_cost`='".$ncos."' where Email_ID='".$email."'";
mysql_query($qry,$con) or mysql_error();
$qry3="UPDATE booking_master set `No. of people`=`No. of people`-1 where Email_ID='".$email."'";
mysql_query($qry3,$con) or mysql_error();

header('location: home.php');
?>