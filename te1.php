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
  border-color:#39F;
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
	font-size:20px;
	font-weight:bold;
}
</style>
</head>

<body>
<center>

<div align="justify">

<?php 
include('connection.php');
$dt=date('Y-m-d');
	
	
	$sql="select * from package_master where tour_date='".$dt."'";	
	$rslt=mysql_query($sql,$con);
	
	     while($row=mysql_fetch_array($rslt)){
			$code= $row['package_code'];
			$sql="delete from package_master where package_code='".$code."'";
			mysql_query($sql,$con) ;
		$qr="delete from like_master where package_code='".$code."'";
		mysql_query($qr,$con);		 
		 $qry11="delete from  flight_master where package_code='".$code."'";
	
	 mysql_query($qry11,$con) ;
	 
	  }


$qry="select package_code, package_name, package_cost, image from package_master ";
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


<div class="desc"><u><a style="font-size:x-large; font-weight:bold" href="login.php">Book</a></div>
<div class="desc"><a style="font-size:x-large; font-weight:bold" href="moreinfo.php?package_code=<?php echo "$row[package_code]"; ?>">more info</a></u></div>
<form action="likecode.php?package_code=<?php echo "$row[package_code]"; ?>"" method="POST">
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