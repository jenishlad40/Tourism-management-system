<style type="text/css">
td.{
	color:#00F;
	font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
	font-size:large;
}												
</style>
<?php
include('connection.php');
$pid=$_REQUEST['package_code'];
$eid=$_REQUEST['Email_ID'];	
$qry="select * from package_master where package_code='".$pid."'";
$qry1="select * from registration where Email_ID='".$eid."'";
?>
<input type="button" onClick="window.print() " value="Print" >
<div >
<img src="images/logo1.jpg" height="200"></div>
<h1 style="margin-left:680px">Ticket</h1>
<div style="margin-left:1150px; margin-top:-250px"><h3>Disha Holidays</h3>
						<p><h4>near paterol pump,</h4></p>
						<p><h4>L.B.Complex, gohor baug,</h4></p>
						<p><h4>Bilimora.</h4></p>
				   		<p><h4>Mobile : +91 9879518021</h4></p>
                        <p><h4>Email : <a href="#">bilimora@dishaholidays.com</a></h4></p></div></div>
<hr><?php
$rslt=mysql_query($qry1,$con);
 while($row=mysql_fetch_array($rslt)) 
  {
	  ?>
      
<Table cellpadding="10" align="left"  cellspacing="10"  style="margin-top:10px" >
<tr><td style="color:#00F; font-size:x-large" colspan="2">Passenger Details</td></tr>
<hr><?php

$sql="select * from pass_master where Email_ID='".$eid."'";

$rslt1=mysql_query($sql,$con);
 while($rows=mysql_fetch_array($rslt1)) 
{?>
<tr><td style="color:#00F;font-size:large">Name</td><td><?php echo $rows['pname']; ?></td></tr><td style="color:#00F;font-size:large">Age</td><td><?php echo $rows['page']; echo  "  years"; ?></td>
<?php }
?>

<tr><td style="color:#00F;font-size:large">Address:</td><td><?php echo $row['Address']; ?></td></tr>
<tr><td style="color:#00F;font-size:large">Pincode:</td><td><?php echo $row['Pincode']; ?></td></tr>
<tr><td style="color:#00F;font-size:large">Mobile no.:</td><td><?php echo $row['Mo.no']; ?></td></tr>
<tr><td style="color:#00F;font-size:large">Email_ID:</td><td><?php echo $row['Email_ID']; ?></td></tr>
</Table>
<?php  } 




$rst=mysql_query($qry,$con);
 while($row=mysql_fetch_array($rst)) 
  {
	  ?>

<div style="margin-top:-500px">

<Table cellpadding="10" align="right"  cellspacing="10"   >
<tr><td style="color:#00F; font-size:x-large">Package Details</td></tr>
<tr><td style="color:#00F; font-size:large">Package code:</td><td><?php echo $row['package_code']; ?></td></tr>
<tr><td style="color:#00F;font-size:large">Package Name:</td><td><?php echo $row['package_name']; ?></td></tr>
<tr><td style="color:#00F;font-size:large">Package Cost:</td><td><?php echo $row['package_cost']; echo " Rs." ?></td></tr>
<tr><td style="color:#00F;font-size:large">Package tour days:</td><td><?php echo $row['package_tour_day']; echo " Day"; ?></td></tr>
<tr><td style="color:#00F;font-size:large">Package tour nights:</td><td><?php echo $row['package_tour_night']; echo " Nights"; ?></td></tr>
<tr><td style="color:#00F;font-size:large">Package tour date:</td><td><?php echo $row['tour_date']; ?></td></tr>
<tr><td style="color:#00F;font-size:large">Package tour distance:</td><td><?php echo $row['package_tour_distance']; echo" Km"; ?></td></tr>
<tr><td style="color:#00F;font-size:large">Package city:</td><td><?php echo $row['package_city']; ?></td></tr>
<tr><td style="color:#00F;font-size:large">Package tour route:</td><td><?php echo $row['package_tour_route']; ?></td></tr>

</Table>
</div>
<?php

 }

 
?>
<div style="margin-top:950px; margin-left:10px"><?php
$qry1="select * from flight_master where package_code='".$pid."'";
$rslt=mysql_query($qry1,$con);
?>

<table cellpadding="10" cellspacing="5" border="6"  >
<tr style="border:double; font-size:larger; font-weight:bold"><td colspan="7" align="center"> Flight detail</td></tr>

<tr style="border:double"><td>Flight No.</td><td>Flight name</td><td>From</td><td>Destination</td><td>Departure</td><td>Arrival</td><td>date</td></tr>


<?php
 while($rows=mysql_fetch_array($rslt)) 
  {?>
	  <tr style="border:double"><td><?php echo $rows['fno'];?></td><td><?php echo $rows['fname'];?></td><td><?php echo $rows['from'];?></td><td><?php echo $rows['destination'];?></td><td><?php echo $rows['ftime'];?></td><td><?php echo $rows['dtime'];?></td><td><?php echo $rows['date'];?></td></tr>
 
 <?php } ?>
</table>
</div>

