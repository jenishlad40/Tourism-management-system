<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Disha Holidays</title>
<style>
div.img
{
  margin: 5px;
  background-color:#FFF;
  border:double;
  border-color:#3CF;
  padding: 5px;
  border: groove;
  height: 315px ;
  width: 220px;
  float: left;
  text-align: center;
  border-radius:10px;
}	
div.img img
{
  display: inline;
  margin: 5px;
  border: 1px solid #ffffff;
}
div.img a:hover img {border: 1px solid #0000ff;}
div.desc
{
  text-align: center;
  font-weight: normal;
  width: 200px;
  margin: 5px;
}
</style>
</head>

<body>

<?php
session_start();
include("connection.php");
if(isset( $_SESSION['uid']))
{
$id=$_SESSION['uid'];
$sql="Select Fname, Lname from registration where Email_ID='".$id."'";

$rsl=mysql_query($sql,$con);
while($row=mysql_fetch_array($rsl))
{
	$name=$row['Fname'];
	$lname=$row['Lname'];
}
include("header1.php");
?>
<div class="content_bg">
<div class="wrap">
	<div class="content">
		<div class="content_text about">
			<h2 style="color:#00F"><u><?php echo"Welcome ".$name."  ".$lname."<br>";?></u> </h2>
			<p>Your current status</p>
		</div>
	<!-- start main_btm -->
				<div class="contact">
<?php
}
else
{
	header('location:login.php');
}
include('connection.php');
$qry="select `Email_ID`, `package_code` from booking_master ";
$rslt=mysql_query($qry,$con);
while($row=mysql_fetch_array($rslt)) 
  {
     if($_SESSION['uid']==$row['Email_ID'])
	 {
		 ?>
         <br>
         <h2 style="font-size:25px; font-weight:bold; color:#FFF"><u>
         -><a href="confirm_cancle.php?Email_ID=<?php echo $row['Email_ID']; ?>" style="color:#FFF"> Cancel your booked package</a><br><br>
         -> <a href="package1.php" style="color:#FFF"> Book another package</a><br><br>
           -> <a href="ticket.php?package_code=<?php echo $row['package_code']?>&Email_ID=<?php echo $row['Email_ID']; ?>" style="color:#FFF"> Gnerate your ticket</a></h2><br>	
         <?php
		 $pkg=$row['package_code'];
	
		 $query="select `package_code`, `package_name`, `package_cost`, `image` from `package_master` where package_code='".$pkg."'";


	$result=mysql_query($query);
	echo "<br>";?>
    <?php 

 while($rows=mysql_fetch_array($result)) 
  {
   ?>
<div class="img">

<h3 style="font-size:large;font-weight:bold">Your booked package</h3>
<img src="pkg/<?php echo $rows['image']; ?>" style="margin-left:10px; margin-top:10px; border-radius:10px; border:double" height="150px" width="150px">
 <div class="desc">Package code : <?php echo $rows['package_code']; ?></div>
 <div class="desc">Package Name : <?php echo $rows['package_name']; ?></div>
 <div class="desc">Package Cost : <?php echo $rows['package_cost']; echo " Rs." ?></div>


<div class="desc"><a href="moreinfo1.php?package_code=<?php echo "$rows[package_code]"; ?>">more info</a></div>

<br>

</div>
 <div class="clear"></div></div></div></div>

<?php

 }

	 }
	 else{}
  }
	include("footer1.php");
?>

</body>
</html>