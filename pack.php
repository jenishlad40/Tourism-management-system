
<?php
include("connection.php");
$qry="select DISTINCT package_code from booking_master";
	$result = mysql_query($qry, $con) ;
	 ?>
     
     <form action="disp_res.php" method="get" name="f1">
 <select id="code" name="code" style="alignment-adjust:central" > 
 
	<?php
 while($rows = mysql_fetch_array($result,true)) 
  {
	  ?>
	  	<option value="<?php echo $rows['package_code'];?>" ><?php echo $rows['package_code'];?></option>

<?php
}?>
</select>

<input type="submit" value="Search" >
</form>





