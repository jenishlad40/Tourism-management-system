<?php
include('connection.php');
$qry="select * from callback_master";
mysql_query($qry,$con);
$rst=mysql_query($qry,$con);?>
<h1 align="center">Requset call back report</h1>
<table align="center" border="2" cellpadding="5" cellspacing="5">
<tr style="font-size:24px; font-weight:400"><td>First name</td><td>Last name</td><td>Email_ID</td><td>Mobile</td><td>Package_code</td><td>Time</td></tr>
<?php
 while($row=mysql_fetch_array($rst)) 
  {
	  ?>

  <tr><td><?php echo $row['fname']; ?></td><td><?php echo $row['lname']; ?></td><td><?php echo $row['Email_ID']; ?></td><td><?php echo $row['mobile']; ?></td><td><?php echo $row['package_code']; ?></td><td><?php echo $row['time']; ?></td></tr>
<?php 
}
?>
</table>
  <input type="button" onClick="window.print() " onclick="window.onpagehide" value="Print" b>

 