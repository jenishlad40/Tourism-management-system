<?php session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("tourdb",$con);
$sql="select * from registration where (Email_ID='".$_REQUEST['Email_ID']."' and Password='".$_REQUEST['Password']."')";
echo $sql;
$rslt=mysql_query($sql,$con) or die(mysql_error());
$row=mysql_fetch_array($rslt);

if(count($row['Email_ID'])==1)
{
		$_SESSION['uid']=$row['Email_ID'];
	/*	$qry="INSERT INTO  login (`Email_ID` ,`Password`)VALUES('".$_POST['Email_ID']."','".$_POST['Password']."')";
$rst=mysql_query($qry,$con) or die("ffffffffffff") ;
echo $qry;*/
		
			header('Location:home.php');
}
else{
header('Location:login.php');
}
?>
