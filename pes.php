<?php
include("header1.php");
$text=$_REQUEST['t5'];
echo $text;
$cost= $_REQUEST['package_cost'];
$code= $_REQUEST['package_code'];

$n=1;?>
<div class="content_bg">
<div class="wrap">
	<div class="content">
		<div class="content_text about">
			<h2>Book your package </h2>
			<p>we'll some of us anyways</p>
		</div>
	
				<div class="contact">
                <div class="contact-form">
                <form name="f1" method="POST" action="booked_data_store.php?package_cost=<?php echo $cost;?>&package_code=<?php echo $code;?>&tex=<?php echo $text;?> " >
 <?php
while($text > 0)
{
	?>
      <h2 style="font-size:x-large;color:#FFF; font-weight:500"> Passenger <?php echo $n;?></h2>
    <div><span>
 <input type="text" name="pname[]" placeholder="Enter pessenger name"/>
    <input type="text" style="margin-left:20px" name="page[]" placeholder="Enter pessenger age"/>
</span></div>
    <?php
	$text--;
	$n++;
}
?>

<div><span><input type="submit" value="Next" /></span></div>
</form>
</div><div class="clear"></div></div></div></div></div>
<?php
$con=mysql_connect('localhost','root','') or mysql_error();
mysql_select_db('tourdb',$con)or mysql_error();

$qry="INSERT INTO  `tourdb`.`booking_master` (
`Email_ID`,
`package_code`,
`Name of Group` ,
`Child` ,
`Adult` ,
`No. of people` ,
`Date of start tour` ,
`Total days` ,
`Address` ,
`Post code` ,
`number` ,
`Remark`
)
VALUES ('$_POST[Email_ID]','$_POST[t1]','$_POST[t2]','$_POST[t3]','$_POST[t4]','$_POST[t5]','$_POST[t6]','$_POST[t7]','$_POST[t9]','$_POST[t10]','$_POST[t11]','$_POST[t12]')";

mysql_query($qry, $con) or mysql_error() or die("kdkjdvcnkjd");

include("footer1.php");
?>