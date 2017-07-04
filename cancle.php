<?php
include('connection.php');
$qry="select * from cancle_master";
mysql_query($qry,$con);
$rst=mysql_query($qry,$con);?>
<table border="2" cellpadding="5" cellspacing="5">
<tr style="font-size:24px; font-weight:400"><td>Email_ID</td><td>Package_code</td><td>After refund</td></tr>
<?php
 while($row=mysql_fetch_array($rst)) 
  {
	  ?>

  <tr><td><?php echo $row['Email_ID']; ?></td><td><?php echo $row['package_code']; ?></td><td><?php echo $row['package_cost']; ?></td></tr>
<?php 
}
?>
</table>
  <input type="button" onClick="window.print() " value="Print">

 