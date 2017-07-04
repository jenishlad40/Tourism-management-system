<?php
$con=mysql_connect('localhost','root','');
mysql_select_db('tourdb',$con);
$qry="INSERT INTO  `tourdb`.`contactus` (
`F_name` ,
`L_name` ,
`Email` ,
`url` ,
`message`
) values('$_POST[t1]','$_POST[t2]','$_POST[t3]','$_POST[t4]','$_POST[t5]')" or die("jvgchfvhgj");
mysql_query($qry, $con);
header("location: contact.php");



?>