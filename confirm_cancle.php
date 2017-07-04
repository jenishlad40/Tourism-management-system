<html>
<body>
<?php
session_start();

include('connection.php');

$email=$_SESSION['uid'];
$qry="select DISTINCT `package_code`,`date of start tour` from booking_master where Email_ID='$email'";
$qry1="select DISTINCT `package_cost` from payment_master where Email_ID='$email'";
$rslt=mysql_query($qry,$con);
while($row=mysql_fetch_array($rslt)) 
{
$code=$row['package_code'];
 $date=$row['date of start tour'];
}
$qr="select DISTINCT `package_cost` from package_master where package_code='$code'";
$rs=mysql_query($qr,$con);
while($row=mysql_fetch_array($rs)) 
{
	$cos=$row['package_cost'];
}
$result=mysql_query($qry1,$con);
while($row=mysql_fetch_array($result)) 
{
$cost=$row['package_cost'];
}

if(isset( $_SESSION['uid']))
{
	
echo $_SESSION['uid']."<br>";
$eid=$_SESSION['uid'];
include("header1.php");
	
    }
else
{}
?>
<div class="content_bg">
<div class="wrap">
	<div class="content">
		<div class="content_text about">
			<h2>Confirm do you want to drop your package then click on Confirm cancle </h2>
</div>
	<div class="contact">
<br>
<br>
<?php
include("connection.php");
$sql="select * from pass_master where Email_ID='".$eid."'";
$rslt=mysql_query($sql,$con );?>
<div class="clear"></div>
<a style="color:#FFF; font-size:30px;" href="temp_success.php?Email_ID=<?php echo $email; ?>&package_code=<?php echo $code;?>&package_cost=<?php echo $cost;?>&date=<?php echo $date;?>"
 style="color:#FFF"><u>Cancel whole package</u></a>
<a href="home.php"style="color:#FFF; font-size:30px; margin-left:40px"><u>Back</u></a>
<br><br>
<h2 style="color:#FFF; font-size:x-large; font-weight:bold">Cancel single passenger</h2><br>
<table border="5" cellpadding="10" cellspacing="10">
<tr><td style="color:#FFF; border:double; font-size:xx-large">&nbsp;Passenger name&nbsp;</td><td style="color:#FFF;font-size:x-large;border:double">&nbsp;Cancle&nbsp;</td></tr>
<?php
while($row=mysql_fetch_array($rslt))
{?>
<tr><td style="color:#FFF;border:double;font-size:x-large;">&nbsp&nbsp<?php echo $row['pname'];?></td><td style="border:double;color:#FFF"><a href="sing_can.php?pname=<?php echo $row['pname'];?>&Email_ID=<?php echo $email; ?>&package_code=<?php echo $code;?>&package_cost=<?php echo $cos;?>"><img style="margin-left:35px" src="images/cross.png" height="20" width="20"></a></td></tr>
<?php }
?>
</table>
<br>
<br>
<br>

<table>
<tr><td style="color:#FFF">Before 7 Days from Tour date</td><td style="color:#FFF"> &nbsp;Full amount</td></tr>
<tr><td style="color:#FFF">Before 15 days from tour date</td><td style="color:#FFF"> &nbsp;return 25% of total amount</td></tr>
<tr><td style="color:#FFF">Before 25 days from tour date</td><td style="color:#FFF">&nbsp;return 50% of total amount</td></tr>
<tr><td style="color:#FFF">Before 30 days from tour date</td><td style="color:#FFF"> &nbsp;return 75% of total amount</td></tr>
<tr><td style="color:#FFF">Before 40 days from tour date</td><td style="color:#FFF">&nbsp;return 90% of total amount</td></tr>
</table>	
</div></div></div></div>
<?php 
include("footer1.php");
?>

</body>
</html>