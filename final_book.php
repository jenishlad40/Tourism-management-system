<?php
include("connection.php");
$pay=$_REQUEST["payment"];

if($pay="Debit card")
{
$qry="INSERT INTO  `tourdb`.`payment_master` (
`Email_ID`,
`package_code`,
`package_cost`,
`method`,
`ctype`,
`cno` ,
`cvc` ,
`xmonth` ,
`xyear` 
)
VALUES ('$_POST[email]','$_POST[code]','$_POST[package_cost]','$_POST[payment]','$_POST[ctype1]','$_POST[cno1]','$_POST[cvc1]','$_POST[CCExpiresMonth1]','$_POST[CCExpiresYear1]')";
echo $qry;
mysql_query($qry,$con);
}
else
{
	$qry1="INSERT INTO  `tourdb`.`payment_master` (
	`Email_ID`,
`package_code`,

`package_cost`,
`method`,
`ctype`,
`cno` ,
`cvc` ,
`xmonth` ,
`xyear` 
)
VALUES ('$_POST[email]','$_POST[code]','$_POST[package_cost]','$_POST[payment]','$_POST[ctype2]','$_POST[cno2]','$_POST[cvc2]','$_POST[CCExpiresMonth2]','$_POST[CCExpiresYear2]')";
echo $qry1;
mysql_query($qry1,$con);
}
header('location: home.php');
?>