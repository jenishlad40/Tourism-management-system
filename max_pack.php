<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Disha Holidays</title>
</head>

<body>
<?php
include('connection.php');
//$sql = "SELECT MAX(package_code) AS package_code, COUNT(*) AS times, IF (COUNT(*)>1,\"duplicated\", \"not duplicated\") AS duplicated FROM booking_master GROUP BY package_code\n". "";
		//$rslt=mysql_query($sql,$con);
//$row=mysql_fetch_array($rslt);
$qr="select MAX(package_code) AS package_code from booking_master";
$res=mysql_query($qr,$con);
 while($row = mysql_fetch_array($res,true))
 { 
$code=$row['package_code'];
}
$query="select * from package_master where package_code='".$code."'";


	$result = mysql_query($query, $con) ;
 while($rows = mysql_fetch_array($result,true)) 
  {
   ?>
<fieldset style="width:30%; border-radius:10px; border:double; "  >
<font >
<Table cellpadding="10"  cellspacing="10">
<tr><th>Maximum Booked package</th></tr>
<tr><td>Package code</td><td><?php echo $rows['package_code']; ?></td></tr>
<tr><td>Package Name</td><td><?php echo $rows['package_name']; ?></td></tr>
<tr><td>Package Cost</td><td><?php echo $rows['package_cost']; echo " Rs." ?></td></tr>
<tr><td>Package tour days</td><td><?php echo $rows['package_tour_day']; echo " Day"; ?></td></tr>
<tr><td>Package tour nights</td><td><?php echo $rows['package_tour_night']; echo " Nights"; ?></td></tr>
<tr><td>Package tour date</td><td><?php echo $rows['tour_date']; ?></td></tr>

<tr><td>Package tour distance</td><td><?php echo $rows['package_tour_distance']; echo" Km"; ?></td></tr>
<tr><td>Package city</td><td><?php echo $rows['package_city']; ?></td></tr>
<tr><td>Package tour route</td><td><?php echo $rows['package_tour_route']; ?></td></tr>
</Table>

</fieldset>
<input type="button" onClick="window.print() " value="Print">
<?php
  } 
?>
</body>
</html>