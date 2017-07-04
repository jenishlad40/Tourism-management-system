<?php
$con=mysql_connect('localhost','root','');
mysql_select_db('tourdb',$con);
$qry="INSERT INTO  `tourdb`.`feedback_master` (
`Email_ID` ,
`name`,
`msg`
)
VALUES (
'$_POST[email]','$_POST[name]', '$_POST[feed]'
);"or die("jvgchfvhgj");

mysql_query($qry, $con);
header('location: feedback1.php');
?>