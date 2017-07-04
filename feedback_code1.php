<html>
<head>
<script language="javascript" type="text/javascript">
function check()
{
	if (f1.email.value=="" || f1.feed.value=="")
	
	{
		alert ("Please Fill The Form..");
		f1.action = ("feedback.php");
	}
	else
	{
		alert (" Thank you for your feedbackx");
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
</head>
<body>

<div class="content_bg">
<div class="wrap">
	<div class="content">
		<div class="content_text about">
			<h2>feedback </h2>

<legend><font face="Times New Roman" size="6" color="#CCCCCC"><b>Give your feedback</b></font></legend>
<div>
<div class="contact">
<div class="contact-form">
<form action="feedback_store1.php" method="post" name="f1" >

<div><span><input type="text" name="email" id="email" onBlur="eid()" placeholder="Enter your Email_ID"></span></div>
   <div class="clear"></div>
<div><span><input type="text" name="name" id="name" placeholder="Enter your name"></span></div>
   <div class="clear"></div>
<div><span><textarea maxlength="365"  name="feed" id="feed" onFocus="charLimit(el)" placeholder="Your feedback"></textarea></span></div>
   <div class="clear"></div>
   
<div><span><input type="submit" value="Submit" name="Submit" onClick="check()"></span></div>
   
</form>
</div>
<div style="border-radius:10px; border-color:#000">

<iframe height="400px" width="500px" src="tempfed.php" style="margin-left:700px; margin-top:-420px; background-color:#FFF"  >
<h2 > Feedback</h2>
<legend><font face="Times New Roman" size="6" color="#000000"><b> feedback</b></font></legend>

</iframe>
	</div>	
   <div class="clear"></div>
</div>
</div>
</div>
</div>
</div>

</body>
</html>