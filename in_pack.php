<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script type="text/javascript" language="javascript">

function chkdate(inputField)
{
	var now = new Date();
	var todaydate =now.getDate() + "-" + (now.getMonth() + 1) + "-" +  now.getFullYear();

	document.write(todaydate);
	
    var pickeddate =  f1.tour_date.value;
   
	
	document.write(pickeddate);
    if( pickeddate > todayDate )
    {
       return true;
    }
    else
    {
        alert("Enter a valid Date");
		f1.tour_date.focus();
		
    } 
}
    </script>
</head>

<body>
<?php

include("admin_header.php");
?>
<fieldset style="width:30%; border-radius:10px; border:double" >
<legend><font face="Times New Roman" size="6" color="#CCCCCC"><b> Insert package </b></font></legend>

<form action="pinsert.php" method="post" name="f1" enctype="multipart/form-data">
<table cellpadding="10" cellspacing="10">
<tr><td>Enter package code</td><td><input type="text" name="package_code" id="package_code" required></td></tr>
<tr><td>Enter package name</td><td><input type="text" name="package_name" id="package_name" required></td></tr>
<tr><td>Enter package cost</td><td><input type="text" name="package_cost" id="package_cost" required></td></tr>
<tr><td>Enter package day</td><td><input type="text" name="package_tour_day" id="package_tour_day" required></td></tr>
<tr><td>Enter package night</td><td><input type="text" name="package_tour_night" id="package_tour_night" required></td></tr>
<tr><td>Enter package date</td><td><input type="date" name="tour_date" id="tour_date" ; required ></td></tr>
<tr><td>Enter package distance</td><td><input type="text" name="package_tour_distance" id="package_tour_distance" required></td></tr>
<tr><td>Enter package city</td><td><input type="text" name="package_city" id="package_city" required></td></tr>
<tr><td>Enter package route</td><td><input type="text" name="package_tour_route" id="package_tour_route" required></td></tr>
<tr><td>Enter package image</td><td><input type="file" name="imag" required ></td></tr>

<tr><td>Enter Flight no. :</td><td><input type="text" name="fno" required ></td></tr>
<tr><td>Enter Flight name</td><td><input type="text" name="fname" required ></td></tr>
<tr><td>Enter From </td><td><input type="text" name="from" required ></td></tr>
<tr><td>Enter Destination</td><td><input type="text" name="destination" required ></td></tr>
<tr><td>Enter arrival time</td><td><input type="text" name="ftime" required ></td></tr>
<tr><td>Enter departure time</td><td><input type="text" name="dtime" required ></td></tr>

<tr><td rowspan="2"><input type="submit" value="save" name="save"><input type="reset" value="Reset" name="Reset"></td></tr>
</table>
</form>
</fieldset>
</body>
</html>