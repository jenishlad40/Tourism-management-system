<?php
include("connection.php");
$sql = "INSERT INTO `tourdb`.`callback_master` (`fname`, `lname`, `package_code`, `Email_ID`, `mobile`, `adult`, `child`, `time`) VALUES('$_POST[t1]','$_POST[t2]','$_POST[t3]','$_POST[t4]','$_POST[t5]','$_POST[t6]','$_POST[t7]','$_POST[t8]')";
echo $sql;
mysql_query($sql,$con);
	 	  header("location: package.php");
?>