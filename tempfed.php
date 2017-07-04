<?php
$con=mysql_connect('localhost','root','');
mysql_select_db('tourdb',$con);
$qry1="select * from feedback_master";


$rslt=mysql_query($qry1, $con);
 while($row=mysql_fetch_array($rslt)) 
 {
	 ?>
<legend><font face="Times New Roman" size="4" color="#6600FF"><b> <?php echo $row['name']; ?></b></font></legend>
<div><span> Email_ID : <?php echo $row['Email_ID']; ?></span></div>
<div><span>  Feedback : <?php echo $row['msg']; ?></span></div>
<?php
echo "<br>";
echo "<br>";
 }
 echo "<br>";
//header('location: feedback.php');
?>