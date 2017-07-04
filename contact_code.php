<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
if(isset( $_SESSION['uid']))
{
	
}
?>

<div class="content_bg">
<div class="wrap">
	<div class="content">
		<div class="content_text about">
			<h2>Contact Us </h2>
			<p>we'll some of us anyways</p>
		</div>
	<!-- start main_btm -->
				<div class="contact">
					<div class="company_address">
						
				     	<h1>Disha Holidays</h1>
						<p>near paterol pump,</p>
						<p>L.B.Complex, gohor baug,</p>
						<p>Bilimora.</p>
				   		<p>Mobile : +91 9879518021</p>
                        <p>Email : <a href="#">bilimora@dishaholidays.com</a></p>
				   </div>
					<div class="contact-form">
					    <form method="post" action="contact_data_store.php">
					    	<div>
						    	<span><input  type="text" onfocus="if(this.value == 'first Name') this.value='';" onblur="if(this.value == '') this.value='first Name';" class="textbox right" placeholder="first Name" id="t1" name="t1"></span>
						    </div>
						    <div>
						    	<span><input type="text" onfocus="if(this.value == 'last Name') this.value='';" onblur="if(this.value == '') this.value='last Name';" class="active textbox" placeholder="last Name" id="t2" name="t2"></span>
						    </div>
						     <div class="clear"></div>
						    <div>
						    	<span><input  type="text" onfocus="if(this.value == 'Email Address') this.value='';" onblur="if(this.value == '') this.value='Email Address';" class="textbox right" placeholder="Email Address" id="t3" name="t3"></span>
						    </div>
						    <div>
						    	<span><input  type="text" onfocus="if(this.value == 'url') this.value='';" onblur="if(this.value == '') this.value='url';" class="textbox" placeholder="url" id="t4" name="t4"></span>
						    </div>
						    <div class="clear"></div>
						    <div>
						    	<span><textarea  maxlength="365" rows="2" cols="70" onfocus="if(this.value == 'Your Message') this.value='';" onblur="if(this.value == '') this.value='Your Message';" id="t5" name="t5">Your Message</textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" class="" value="Submit" ></span>
						  </div>
					    </form>
				    </div>
				    <div class="clear"></div>
				</div>
	</div>
</div>
</div>

</body>
</html>