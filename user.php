<?php
include('connection.php');
$qry="SELECT * from registration";


	$result =mysql_query($qry,$con);?>
    
    <a href="admin_home.php"><u>Back</a>
    <h1 align="center"><u>User Detail</h1>
    
    <table border="2" width="100%">
    <tr style="font-weight:bold; font-size:24px"><td>First name</td><td>Middle name</td><td>Last name</td><td>Date of birth</td><td>Gender</td><td>Address</td><td>City</td><td>state</td><td>Pincode</td><td>Mo. no</td><td>Email_ID</td><td>Password</td><td>Confirm password</td></tr>
<?php
 while($row = mysql_fetch_array($result,true)) 
  {
   ?>
     <tr><td><?php echo $row['Fname'];?></td><td><?php echo $row['Mname'];?></td><td><?php echo $row['Lname'];?></td><td><?php echo $row['bdate'];?></td><td><?php echo $row['Gender'];?></td><td><?php echo $row['Address'];?></td><td><?php echo $row['City'];?></td><td><?php echo $row['State'];?></td><td><?php echo $row['Pincode'];?></td><td><?php echo $row['Mo.no'];?></td><td><?php echo $row['Email_ID'];?></td><td><?php echo $row['Password'];?></td><td><?php echo $row['Cpassword'];?></td></tr>
   
   
   
<?php } ?>