

  

<fieldset style="width:330px; height:580px; border:double; background-color:#FFF; border-radius:10px"><br />
<h1 align="center" style="font-size:x-large; font-weight:bold">Request call back</h1>
<form action="call_store.php" method="post" name="f1" style="margin-left:30px; margin-top:15px">
<div><span>
	<input type="text" name="t1" placeholder="First name" style="width:250px">
    </span></div>
    <div class="clear"></div>
<div><span>
	<input type="text" name="t2" placeholder="Last name" style="width:250px">
    </span></div>
    <div class="clear"></div>
    <div><span>
	  <?php
			include("connection.php");

              $qry="select DISTINCT package_code from package_master";
			  	$result = mysql_query($qry, $con) ;
				?>
             <select id="code" name="t3" style="alignment-adjust:central; width:280px; height:40px; margin-left:-5px; border:double; border-color:#09F" > 
 
	<?php
 while($rows = mysql_fetch_array($result,true)) 
  {
	  ?>
	  	<option value="<?php echo $rows['package_code'];?>" ><?php echo $rows['package_code'];?></option>

<?php
}?>
</select>
    </span></div>
    <div class="clear"></div>
    <div><span>
	<input type="text" name="t4" placeholder="Email_ID" style="width:250px; margin-top:10px">
    </span></div>
    <div class="clear"></div>
    <div><span>
	<input type="text" name="t5" placeholder="Mobile no." style="width:250px">
    </span></div>
    <div class="clear"></div>
    <div><span>
	<input type="text" name="t6" placeholder="No. of Addult person"  style="width:250px">
    </span></div>
    <div class="clear"></div>
    <div><span>
	<input type="text" name="t7" placeholder="No. of child person"  style="width:250px">
    </span></div>
    <div class="clear"></div>
   <div><span>
	<input type="time" name="t8" placeholder="Enter your time"  style="width:250px">
    </span></div>
  <div class="clear"></div>
    <div><span>
	<input type="submit" value="Submit">
    </span></div>

    </form>
    </fieldset>