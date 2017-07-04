<?php
include("connection.php");
$code=$_REQUEST['package_code'];
if($_REQUEST['Like']) {
$sql = "UPDATE `like_master` SET `Likes`=`Likes`+1 WHERE package_code='".$code."'";

$result=mysql_query($sql);
header("Location:package1.php");

}
?>