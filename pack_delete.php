<?php
include('connection.php');
$pid=$_REQUEST['package_code'];

$qry="DELETE from package_master where package_code='".$pid."'";
$qry1="DELETE from flight_master where package_code='".$pid."'";
$qr="DELETE from like_master where package_code='".$pid."'";

mysql_query($qry,$con) or mysql_error();
mysql_query($qry1,$con) or mysql_error();
mysql_query($qr,$con) or mysql_error();

 header ('location: admin_home.php');
?>