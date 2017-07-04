<?php
session_start();
if(!isset($_SESSION['admin'])){
	header("location: admin.php");
}
?>


<?php
include("admin_header.php");
?>

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
  height: 350px ;
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



<a href="in_pack.php"  style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif;  font-size:x-large; margin-left:375px">Insert New package</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b style="font-size:x-large">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
<a href="req.php"  style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif;  font-size:x-large; ">Request call back report</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b style="font-size:x-large">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>

<a href="book_master.php"  style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif;  font-size:x-large">Booking detail</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b style="font-size:x-large">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
<a href="pack.php"  style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif;  font-size:x-large">Package wise booking</a><br>
<a href="cancle.php"  style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; font-size:x-large; margin-left:375px">Package cancle report</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b style="font-size:x-large">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
<a href="max_like.php"  style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif;  font-size:x-large">Maximum liked package</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b style="font-size:x-large">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
<a href="min_like.php"  style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; font-size:x-large">Minmum liked package</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b style="font-size:x-large">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
<a href="user.php"  style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif;  font-size:x-large">User detail</a>
<center>
<div align="justify">

<?php
include('connection.php');
$qry="select package_code, package_name, package_cost, image from package_master ";
$rst=mysql_query($qry,$con);
 while($row=mysql_fetch_array($rst)) 
  {
   ?>
<div class="img" style="margin-left:100px">
 

<p>

<img src="pkg/<?php echo $row['image']; ?>" style="margin-left:10px; margin-top:10px; border-radius:10px; border:double" height="150px" width="150px">
 <div class="desc">Package code : <?php echo $row['package_code']; ?></div>
 <div class="desc">Package Name : <?php echo $row['package_name']; ?></div>
 <div class="desc">Package Cost : <?php echo $row['package_cost']; echo " Rs." ?></div>


<div class="desc"><a href="pack_update.php?package_code=<?php echo "$row[package_code]"; ?>">Update</a></div>
<div class="desc"><a href="pack_delete.php?package_code=<?php echo "$row[package_code]"; ?>">Delet</a></div>
<div class="desc"><a href="moreinfo.php?package_code=<?php echo "$row[package_code]"; ?>">more info</a></div>

</div>


<?php

 }
?>
</div>
</center>
	


</body>
</html>