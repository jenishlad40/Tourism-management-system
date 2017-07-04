<?php
include('connection.php');
$qry="select  package_code from like_master where Likes=(select MAX(Likes) AS Likes from like_master) ";
$rslt=mysql_query($qry,$con);
$row=mysql_fetch_array($rslt);

$code=$row['package_code'];
$query="select * from package_master where package_code='".$code."'";
	$result = mysql_query($query, $con) ;
 while($rows = mysql_fetch_array($result,true)) 
  {
   ?>
<Table cellpadding="10"  cellspacing="10" border="2" align="center">
<tr><th colspan="2"><h3>Maximum Liked package</h3></th></tr>
<tr><td style="font-size:20px"><b>Package code</b></td><td><?php echo $rows['package_code']; ?></td></tr>
<tr><td style="font-size:20px"><b>Package Name</td><td><?php echo $rows['package_name']; ?></td></tr>
<tr><td style="font-size:20px"><b>Package Cost</td><td><?php echo $rows['package_cost']; echo " Rs." ?></td></tr>
<tr><td style="font-size:20px"><b>Package tour days</td><td><?php echo $rows['package_tour_day']; echo " Day"; ?></td></tr>
<tr><td style="font-size:20px"><b>Package tour nights</td><td><?php echo $rows['package_tour_night']; echo " Nights"; ?></td></tr>
<tr><td style="font-size:20px"><b>Package tour date</td><td><?php echo $rows['tour_date']; ?></td></tr>

<tr><td style="font-size:20px"><b>Package tour distance</td><td><?php echo $rows['package_tour_distance']; echo" Km"; ?></td></tr>
<tr><td style="font-size:20px"><b>Package city</td><td><?php echo $rows['package_city']; ?></td></tr>
<tr><td style="font-size:20px"><b>Package tour route</td><td><?php echo $rows['package_tour_route']; ?></td></tr>
</Table>
<input type="button" onClick="window.print() " value="Print">
<?php
  } 
?>