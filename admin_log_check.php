<?php session_start();

$con=mysql_connect("localhost","root","");
mysql_select_db("tourdb",$con);
$sql="select * from admin_master where Email_ID='".$_REQUEST['Email_ID']."' and Password='".$_REQUEST['Password']."'";

$rslt=mysql_query($sql,$con) or die("selct error");
$dt=mysql_fetch_array($rslt);
if($dt['Email_ID']==$_REQUEST['Email_ID'] and $dt['Password'] == $_REQUEST['Password']){
		$_SESSION['admin']=$dt['Email_ID'];
		header("location: admin_home.php");
}
else
{
	header("location:admin.php");
}
?>
