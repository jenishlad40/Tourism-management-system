<?php
include("admin_header.php");
include('connection.php');
$pid=$_REQUEST['package_code'];
$qry="select * from package_master where package_code='".$pid."'";
$rst=mysql_query($qry,$con);
 while($row=mysql_fetch_array($rst)) 
  {
?>
<fieldset style="width:30%; border-radius:10px; border:double" >
<legend><font face="Times New Roman" size="6" color="#CCCCCC"><b> More detail </b></font></legend>
<form method="POST" name="update" action="update_insert.php" enctype="multipart/form-data" >
<Table cellpadding="10" cellspacing="10">
<tr><th>Upadate</th></tr>
<tr><td>Package code</td><td><input type="text" readonly value="<?php echo $pid;?>" name="package_code"></td></tr>
<tr><td>Package Name</td><td><input type="text" value="<?php echo $row['package_name']; ?>" name="package_name"></td></tr>
<tr><td>Package Cost</td><td><input type="text" value="<?php echo $row['package_cost'];  ?>" name="package_cost"></td></tr>
<tr><td>Package tour days</td><td><input type="text" value="<?php echo $row['package_tour_day']; ?>" name="package_tour_day"></td></tr><input type="hidden" value="<?php echo $pid ?>" name="pid" >
<tr><td>Package tour nights</td><td><input type="text" value="<?php echo $row['package_tour_night']; ?>" name="package_tour_night" ></td></tr>
<tr><td>Package tour date</td><td><input type="date" value="<?php echo $row['tour_date']; ?>" name="tour_date"></td></tr>

<tr><td>Package tour distance</td><td><input type="text" value="<?php echo $row['package_tour_distance']; ?>" name="package_tour_distance"></td></tr>
<tr><td>Package city</td><td><input type="text" value="<?php echo $row['package_city']; ?>" name="package_city"></td></tr>
<tr><td>Package tour route</td><td><input type="text" value="<?php echo $row['package_tour_route']; ?>" name="package_tour_route"></td></tr>
<tr><td>Enter package image</td><td><input type="file" value="<?php echo $row['image']; ?>"name="image" ></td></tr>


<?php
 }
 $qry1="select * from flight_master where package_code='".$pid."'";
 $rslt=mysql_query($qry1,$con);
 while($row=mysql_fetch_array($rslt)) 
  {
?>

<tr><td>Flight no</td><td><input type="text" value="<?php echo $row['fno']; ?>" name="fno"></td></tr>
<tr><td>Flight name</td><td><input type="text" value="<?php echo $row['fname']; ?>" name="fname"></td></tr>
<tr><td>from</td><td><input type="text" value="<?php echo $row['from']; ?>" name="from"></td></tr>
<tr><td>destination</td><td><input type="text" value="<?php echo $row['destination']; ?>" name="destination"></td></tr>
<tr><td>Arrival</td><td><input type="time" value="<?php echo $row['ftime']; ?>" name="ftime"></td></tr>
<tr><td>departure</td><td><input type="time" value="<?php echo $row['dtime']; ?>" name="dtime"></td></tr>
<tr><td>Date</td><td><input type="date" value="<?php echo $row['date']; ?>" name="date"></td></tr>
<tr><td colspan="2"><input type="submit" value="Update" name="Update"><input type="button" value="Back" name="Back" onClick="admin_home"></td></tr>
</Table>
</form>
</fieldset>
<?php
  }?>