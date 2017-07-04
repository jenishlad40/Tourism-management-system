<?php
include('connection.php');
$code=$_REQUEST['code'];
$qry="select `Email_ID`, `package_code`, `Name of Group`, `Date of start tour`, `Total days`, `Address`, `number` from booking_master where package_code='".$code."'";
$rslt=mysql_query($qry,$con);
?>
<table border="2" cellpadding="5" cellspacing="5">
<tr style="font-size:24px; font-weight:400"><td>Email_ID</td><td>Package_code</td><td>Name of group</td><td> Date of tour</td><td>Total Days</td><td>Address</td><td>Contact No.</td></tr>
<?php 
while($row=mysql_fetch_array($rslt)) 
  {?>
  <tr><td><?php echo $row['Email_ID']; ?></td><td><?php echo $row['package_code']; ?></td><td><?php echo $row['Name of Group']; ?></td><td><?php echo $row['Date of start tour']; ?></td><td><?php echo $row['Total days']; ?></td><td><?php echo $row['Address']; ?></td><td><?php echo $row['number']; ?></td> </tr>
 <?php
  }
?>
</table>
<input type="button" onClick="window.print() " value="Print">
</body>
</html>