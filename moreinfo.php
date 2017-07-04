<html>
<head>
<link href="images/sI.jpg" rel="Shortcut Icon"></link>

</head>
<body>
<?php
include('header.php');
?>
<div class="content_bg">
<div class="wrap">
	<div class="content">
		<div class="content_text about">
			<h2>More info.</h2>
			<p>we'll some of us anyways</p>
		</div>
	<!-- start main_btm -->
				<div class="contact">
<?php
include('connection.php');
$pid=$_REQUEST['package_code'];
	
$qry="select * from package_master where package_code='".$pid."'";

$rst=mysql_query($qry,$con);
 while($row=mysql_fetch_array($rst)) 
  {
   
 
?>
<div style="border:double; width:400px; padding:2%; border-radius:10px; margin-left:100px; background-color:#FFF">
<fieldset style="width:400px; border-radius::10px"> 
<legend><font face="Times New Roman" size="6" color="#CCCCCC"><b> More detail </b></font></legend>
<br>

<div><span>Package code           : <?php echo $row['package_code']; ?></span></div><br>
<div><span>Package Name           : <?php echo $row['package_name']; ?></span></div><br>
<div><span>Package Cost           : <?php echo $row['package_cost']; echo " Rs."; ?></span></div><br>
<div><span>Package tour days      : <?php echo $row['package_tour_day']; echo " Day"; ?></span></div><br>
<div><span>Package tour nights    : <?php echo $row['package_tour_night']; echo " Nights"; ?></span></div><br>
<div><span>Package tour date      : <?php echo $row['tour_date']; ?></span></div><br>

<div><span>Package tour distance  : <?php echo $row['package_tour_distance']; echo" Km"; ?></span></div><br>
<div><span>Package city           : <?php echo $row['package_city']; ?></span></div><br>
<div><span>Package tour route     : <?php echo $row['package_tour_route']; ?></span></div><br>
<a href="login.php?package_code=<?php echo $pid;?>"><img src="images/book.jpeg"></a>&nbsp;&nbsp;<a href="index.php"><img src="images/back.jpeg"></a>
</fieldset></div>

<div style="margin-left:700px; margin-top:-500px; "><img src="pkg/<?php echo $row['image']; ?>" style="border-radius:10px; " height="500px" width="500px"></div>



<?php
 }
$qry1="select * from flight_master where package_code='".$pid."'";
$rslt=mysql_query($qry1,$con);
?>
<br><br>

<div>
<table cellpadding="10" cellspacing="5" border="6" align="center" style="margin-left:100px; background-color:#FFF">
<tr style="border:double; font-size:larger; font-weight:bold"><td colspan="7" align="center"> Fight detail</tr></th>

<tr style="border:double"><td>Flight No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>Flight name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>From&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>Destination&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>Departure&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>Arrival&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>


<?php
 while($rows=mysql_fetch_array($rslt)) 
  {?>
	  <tr style="border:double"><td><?php echo $rows['fno'];?></td><td><?php echo $rows['fname'];?></td><td><?php echo $rows['from'];?></td><td><?php echo $rows['destination'];?></td><td><?php echo $rows['ftime'];?></td><td><?php echo $rows['dtime'];?></td><td><?php echo $rows['date'];?></td></tr>
 
 <?php } ?>
</table>
</div>
</div></div></div>

<?php include("footer.php");?>
</body>
</html>