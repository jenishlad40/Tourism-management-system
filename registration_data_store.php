<?php
$con=mysql_connect('localhost','root','');
mysql_select_db('tourdb',$con);
$email=$_REQUEST['Email_ID'];
$Query = "select Email_ID from registration";
$Result = mysql_query($Query, $con);
while($row=mysql_fetch_array($Result))
{
if($row['Email_ID']==$email)
{ 
    echo "email already exist";
header("location: registration.php");}
else
{
   

$qry="INSERT INTO  `tourdb`.`registration` (

`Fname` ,
`Mname` ,
`Lname` ,
`bdate`,
`Gender` ,
`Address` ,
`City` ,
`State` ,
`Pincode` ,
`Mo.no` ,
`Email_ID` ,
`Password` ,
`Cpassword`
)
VALUES('$_POST[fname]','$_POST[mname]','$_POST[lname]','$_POST[date]','$_POST[r1]','$_POST[address]','$_POST[city]','$_POST[state]','$_POST[pincode]','$_POST[mobile]','$_POST[Email_ID]','$_POST[pwd]','$_POST[cpwd]')" or die("nfbcbncncvncb");

mysql_query($qry, $con) or mysql_error();
	 	  header("location: login.php");
}
}
?>