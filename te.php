<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Disha Holidays</title>

<style>
div.img
{
  margin: 5px;
  padding: 5px;
  border: groove;
  height: 380px ;
  width: 220px;
  float: left;
  text-align: center;
  border-radius:10px;
  border-color:#36F;
  border-style:double;
  background-color:#FFF;
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
.font{
	color:#009;
	font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
	font-size:18px;
	font-weight:bold;
}
</style>
</head>

<body>
<center>

<div align="justify">

<?php 
session_start();

if(isset( $_SESSION['uid']))
{
	
$id=$_SESSION['uid'];
	
    }
else
{}
include('connection.php');

$qr="select package_code from booking_master where Email_ID='".$id."'"; 
$rs=mysql_query($qr,$con);
$row=mysql_fetch_array($rs);
$code=$row['package_code'];
$qry="select package_code, package_name, package_cost, image from package_master where package_code!='".$code."' ";
$rst=mysql_query($qry,$con);
 while($row=mysql_fetch_array($rst)) 
  {
   ?>
<div class="img">
 

<p>

<img src="pkg/<?php echo $row['image']; ?>" style="margin-left:10px; margin-top:10px; border-radius:10px; border:double" height="150px" width="150px">
 <div class="desc">Package code : <?php echo $row['package_code']; ?></div>
 <div class="desc">Package Name : <?php echo $row['package_name']; ?></div>
 <div class="desc">Package Cost : <?php echo $row['package_cost']; echo " Rs." ?></div>


<div style="font-size:x-large; font-weight:bold;" class="desc"><u><a href="book.php?package_code=<?php echo "$row[package_code]"; ?>">Book</a></div>
<div style="font-size:x-large; font-weight:bold" class="desc"><a href="moreinfo.php?package_code=<?php echo "$row[package_code]"; ?>">more info</a></u></div>
<form action="like_code1.php?package_code=<?php echo "$row[package_code]"; ?>"" method="POST">
<input type = "submit" value = "Like" name='Like'/>
<?php 
$qry1="select Likes from like_master where package_code='".$row['package_code']."'";
$rslt=mysql_query($qry1,$con);
 while($rows=mysql_fetch_array($rslt)) 
  {?>
	   <font class="font"><?php echo $rows['Likes'];?></font>
<?php 
  }
 ?>
</form>
</div>


<?php

 }


?>
</div>
</center>
</body>
</html>