<html>
<body>
<?php
include('header1.php');?>
<div class="content_bg">
<div class="wrap">
	<div class="content">
		<div class="content_text about">
			<h2>Search result</h2>
			<p>we'll some of us anyways</p>
		</div>
	<!-- start main_btm -->
				<div class="contact">
                
                <?php
include('connection.php');

	$duration = $_REQUEST['search'];
	
	$city = $_REQUEST['cty'];
	
	/*echo $duration."<br>";
	echo $date."<br>";
	echo $city;*/
	
	
	//$duration=mysql_real_escape_string($duration);
	//$date=mysql_real_escape_string($date);

				 
$qry="select * from package_master where package_tour_night='".$duration."' or package_city='".$city."'";

?>
<div class="contact-form">
<?php
$rslt=mysql_query($qry,$con);
 while($row=mysql_fetch_array($rslt)) {
	 ?>
	     <div style="border:double; width:400px; padding:2%; border-radius:10px; margin-left:100px; background-color:#FFF">

<br>
<div><span style="margin-left:30PX"><font style="font-weight:bold; font-size:16px"> Package code : <?php echo $row['package_code']; ?></span></div><br>
<div><span style="margin-left:30PX">Package Name : <?php echo $row['package_name']; ?></span></div><br>
<div><span style="margin-left:30PX">Package Cost : <?php echo $row['package_cost']; echo " Rs." ?></span></div><br>
<div><span style="margin-left:30PX">Package tour days : <?php echo $row['package_tour_day']; echo " Day"; ?></span></div><br>
<div><span style="margin-left:30PX">Package tour nights : <?php echo $row['package_tour_night']; echo " Nights"; ?></span></div><br>
<div><span style="margin-left:30PX">Package tour date : <?php echo $row['tour_date']; ?></span></div><br>
<div><span style="margin-left:30PX">Package tour distance : <?php echo $row['package_tour_distance']; echo" Km"; ?></span></div><br>
<div><span style="margin-left:30PX">Package city : <?php echo $row['package_city'];  ?></span></div><br>
<div><span style="margin-left:30PX">Package tour route : <?php echo $row['package_tour_route']; ?></font></span></div><br>
<div><span style="margin-left:30PX; margin-bottom:20px"><form action="book.php?package_code=<?php echo $row['package_code'];  ?>" method="post" style="margin-left:30px"><input type="submit" value="Book" ><input type="button" value="Back" name="Back"></form></span></div>
<br>
</fieldset>
</DIV>
<div style="margin-left:700px; margin-top:-500px; width:400PX "><img src="pkg/<?php echo $row['image']; ?>" style="border-radius:10px; " height="500px" width="500px"></div>

<?php
 }	
 ?>
  </div>
   <div class="clear"></div>
</div></div></div>
<?php	
 include("footer1.php");
 ?>

</body>
</html>