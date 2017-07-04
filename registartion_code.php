<?php
	session_start();
?>
<html>
<title>Disha Holidays</title>



	<link rel="stylesheet" href="radiostyle.css"/>

<script language="javascript" type="text/javascript" >

function chkdate(inputField)
{
	var now = new Date();
	var todaydate =now.getDate();
    var pickeddate =  f1.date.value;
    if( pickeddate < todayDate )
    {
       return true;
    }
    else
    {
        alert("Enter a valid Date");
		f1.date.focus();
		
    } 
}


function check()
{
	if (f1.fname.value=="" || f1.mname.value=="" || f1.lname.value=="" || f1.r1.value=="" || f1.date.value=="" || f1.address.value=="" || f1.city.value=="" || f1.state.value=="" || f1.pincd.value=="" || f1.mobile.value=="" || f1.email.value=="" || f1.pwd.value=="" || f1.conpwd.value=="")
	{
		alert ("Please Fill The Form..");
		f1.action = ("registration.php");
	}
	else
	{
		alert (" Thank you. Your Register are Successes fully..");
	}
}
	function pin()
	{	
		var dig=0;
		var No = f1.pincd.value;
		
		for(i=0;i<No.length;i++)
		{	
			var t = No.substr(i,1);
			if (t>=0 && t<=9)
			{
				dig=1;
			}
		}
	
	if(dig==0)
	{
		alert ("Pin Code is Wrong, Please Enter Correct Pin Code..");
		f1.pincd.value="";	
		f1.pincd.focus();
	}

}
function passwd()
{
	var p1 = f1.pwd.value;
	var p2 = f1.cpwd.value;
	
	if (p1==p2)
	{
	}
	else
	{
			alert ("Password dose not Match, Please try again..");
			f1.pwd.value="";	
			f1.cpwd.value="";	
			f1.pwd.focus();	
	}
}
function mo()
{
	var dig=0;
	var No = f1.mobile.value;
	
	for(i=0;i<No.length;i++)
	{	
		var t = No.substr(i,1);
		if (t>=0 && t<=9)
		{
			dig=1;
		}
	}
	
	if(dig==0)
	{
		alert ("Mobile Number is Wrong, Please Enter Correct Mobile Number..");
		f1.mobile.value="";	
		f1.mobile.focus();
	}
	else if (No.length < 10)
	{
		alert ("Enter Mobile Number in 10 Digit..");
		f1.mobile.value="";
		f1.mobile.focus();
	}	
}
function eid()
{
//	if (/^[a-zA-Z0-9\w|-|.]+[\@]+[a-zA-Z]{2,3}$/.test(e))
	var x = f1.email.value;
	var f = x.indexOf("@");
	var s = x.indexOf(".");
	if (f>0 && s>0 && s>f+1)
	{
	}
	else
	{
		alert ("InValid Email ID.. Please Try Again..");
		f1.email.value="";
		f1.email.focus();
	}
	
}



</script>
<style>


#tick{display:none}
#cross{display:none}
</style>
<body>

<div class="content_bg">
<div class="wrap">
	<div class="content">
		<div class="content_text about">
			<h2>Sign Up </h2>
</div>
	<div class="contact">
<div class="contact-form">


<form name="f1" action="registration_data_store.php" method="post" >

<div><span>
 <input type="text" name="fname"  title=" First Name " required placeholder="Enter your name">
 <input type="text" name="mname"  title=" Middel Name " style="margin-left:30px" required placeholder="Middel Name">
</span></div>
<div class="clear"></div>
<div><span>
<input type="text" name="lname" title=" Last Name " required placeholder="Last Name" >
<input type="date" name="date" title=" DOB " style="margin-left:30px" required onBlur="chkdate(inputField)" placeholder="Date of Birth" required>
</span></div>
<div class="clear"></div>
<div><span>
 <input type="radio" name="r1" id="r1" class="css-checkbox" value="Male" /><label for="r1" class="css-label">Male</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="r1" id="r2" class="css-checkbox" value="Female" /><label for="r2" class="css-label">Female</label> 
</div></span>
<div class="clear"></div>
<div><span>
<input type="text" name="address" title=" Address " required placeholder="Enter your address">
<input type="text" name="city" title=" City " style="margin-left:30px" required placeholder="City">
</span></div>
<div class="clear"></div>
<div><span>
<input type="text" name="state" title=" State " required placeholder="State" >
<input type="text" name="pincode" maxlength="6" style="margin-left:30px" onBlur="pin()" title=" Pin Code " required placeholder="Pin Code ">
</span></div>
<div class="clear"></div>
<div><span>
 <input type="text" placeholder="Mobile No." name="mobile" maxlength="10" size="16" onBlur="mo()" title=" Mobile Number " required >
<input type="text" name="Email_ID" id="Email_ID" onBlur="eid()"  style="margin-left:30px" title=" Email Address " required placeholder="E-Mail ID" ><img id="tick" src="tick.png" width="16" height="16"/>
<img id="cross" src="cross.png" width="16" height="16"/>
</span></div>
<div class="clear"></div>
<div><span>
 <input class="txbx" type="password" name="pwd"  title=" Password " required placeholder="Password" >
 <input class="txbx" type="password" name="cpwd" onBlur="passwd()" style="margin-left:30px" title=" Conform Password " required placeholder="Conform Password" >
</span></div>
<div class="clear"></div>
<div><span>
<input type="submit" value="Submit" title=" Login " onClick="check()" />&nbsp;&nbsp;
<input type="reset" value="Reset" title=" Reset "  />
</span></div>


</form>
</div>
<div class="clear"></div>
</div>
</div>

</div>
</div>


</body>
</html>