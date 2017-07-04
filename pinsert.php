<?php
//include("header.php");
$con=mysql_connect('localhost','root','');
mysql_select_db('tourdb',$con);
$img=$_FILES['imag']['name'];
echo $img;
move_uploaded_file($_FILES["imag"]["tmp_name"],"pkg/".$_FILES["imag"]["name"]);
$qry="INSERT INTO  package_master (
`package_code` ,
`package_name` ,
`package_cost`,
`package_tour_day` ,
`package_tour_night`,
`tour_date`, 
`package_tour_distance`,
`package_city`,
`package_tour_route`,
`image`)
VALUES('".$_POST['package_code']."','".$_POST['package_name']."','".$_POST['package_cost']."','".$_POST['package_tour_day']."','".$_POST['package_tour_night']."','".$_POST['tour_date']."','".$_POST['package_tour_distance']."','".$_POST['package_city']."','".$_POST['package_tour_route']."','".$img."')" ;
echo $qry;
mysql_query($qry,$con) or   mysql_error();
$qry1="INSERT INTO  flight_master (
`package_code`,
`fno` ,
`fname` ,
`from`,
`destination` ,
`ftime`,
`dtime`, 
`date`)
VALUES('".$_POST['package_code']."','".$_POST['fno']."','".$_POST['fname']."','".$_POST['from']."','".$_POST['destination']."','".$_POST['ftime']."','".$_POST['dtime']."','".$_POST['tour_date']."')" ;
echo $qry1;
mysql_query($qry1,$con) or   mysql_error();
$qr="INSERT INTO  like_master (`package_code`) VALUES('".$_POST['package_code']."')";
mysql_query($qr,$con) or   mysql_error();
header("Location:admin_home.php");

?>
