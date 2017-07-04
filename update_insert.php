<?php

$con=mysql_connect('localhost','root','');
mysql_select_db('tourdb',$con);
$img=$_FILES['image']['name'];


move_uploaded_file($_FILES["image"]["tmp_name"],"pkg/".$_FILES["image"]["name"]);

$qry="update package_master set package_code='".$_REQUEST['package_code']."',package_name='".$_REQUEST['package_name']."',package_cost='".$_REQUEST['package_cost']."',package_tour_day='".$_REQUEST['package_tour_day']."',package_tour_night='".$_REQUEST['package_tour_night']."',tour_date='".$_REQUEST['tour_date']."',package_tour_distance='".$_REQUEST['package_tour_distance']."',package_city='".$_REQUEST['package_city']."',package_tour_route='".$_REQUEST['package_tour_route']."',image='$img' where package_code='".$_REQUEST['pid']."'";


$qry1="update flight_master set `package_code`='".$_REQUEST['package_code']."',`fno`='".$_REQUEST['fno']."',`fname`='".$_REQUEST['fname']."',`from`='".$_REQUEST['from']."',`destination`='".$_REQUEST['destination']."',`ftime`='".$_REQUEST['ftime']."',`dtime`='".$_REQUEST['dtime']."',`date`='".$_REQUEST['date']."' where package_code='".$_REQUEST['pid']."'";


mysql_query($qry,$con);
mysql_query($qry1,$con);

header('Location: admin_home.php');

?>