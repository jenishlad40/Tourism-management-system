<html>
<head>

<script type="text/javascript">
function check1(el) {
if (el.value == "Debit card") {
document.getElementById('texta').style.display = "block";
document.getElementById('textb').style.display = "block";
document.getElementById('textc').style.display = "block";
document.getElementById('textd').style.display = "block";
document.getElementById('texte').style.display = "block";

}
else {
document.getElementById('texta').style.display = "none";
document.getElementById('debit1').value = '';
document.getElementById('textb').style.display = "none";
document.getElementById('debit2').value = '';
document.getElementById('textc').style.display = "none";
document.getElementById('debit3').value = '';
document.getElementById('textc').style.display = "none";
document.getElementById('cvc').value = '';
document.getElementById('textd').style.display = "none";
document.getElementById('debit4').value = '';
document.getElementById('textd').style.display = "none";
document.getElementById('debit-4').value = '';

}
}
function check2(el) {
if (el.value == "Creditcard") {
document.getElementById('tex1').style.display = "block";
document.getElementById('tex2').style.display = "block";
document.getElementById('tex3').style.display = "block";
document.getElementById('tex4').style.display = "block";
document.getElementById('texte').style.display = "block";

}
else {
document.getElementById('tex1').style.display = "none";
document.getElementById('credit1').value = '';
document.getElementById('tex2').style.display = "none";
document.getElementById('credit2').value = '';
document.getElementById('tex3').style.display = "none";
document.getElementById('credit3').value = '';
document.getElementById('tex3').style.display = "none";
document.getElementById('cvc').value = '';
document.getElementById('tex4').style.display = "none";
document.getElementById('credit4').value = '';
document.getElementById('tex4').style.display = "none";
document.getElementById('credit-4').value = '';

}
}


function cno()
	{	
		var dig=0;
		var No = f.cno.value;
		
		for(i=0;i<No.length;i++)
		{	
			var t = No.substr(i,1);
			if (t>=0 && t<=20)
			{
				dig=1;
			}
		}
	
	if(dig==0)
	{
		alert ("Debit card number not valid, Please Enter Correct number..");
		f.cno.value="";	
		f.cno.focus();
	}

}
</script>
</head>
<body>
<?php
session_start();
if(isset( $_SESSION['uid']))
{}
$email=$_SESSION['uid'];
include("header1.php");
$cost=$_REQUEST['package_cost'];
$code=$_REQUEST['package_code'];
?>
<div class="content_bg">
<div class="wrap">
	<div class="content">
		<div class="content_text about">
			<h2>Book your package </h2>
			<p>we'll some of us anyways</p>
		</div>
	
				<div class="contact">
                <div class="contact-form">
              
<form name="f" action="final_book.php" method="POST">
<DIV><span><input type="text" readonly value="<?php echo $cost; echo " Rs."; ?>" name="package_cost"></span></DIV>
<br><br><br>
<div><span style="margin-left:655px"><label>Select your payment method:</label></span></div>
<br>
<div><span><input type="radio" value="Debit card" name="payment"  onclick="check1(this);" onChange="check2(this)" onFocus="check3(this)"> <font color="#FFFFFF">Debit card</font><input type="radio" value="Creditcard" name="payment" onClick="check1(this);" onChange="check2(this)" onFocus="check3(this)"><font color="#FFFFFF"> Credit card</font></span></div>


<!--Debit card-->

<div><span><div id="textb" style="display:none;"><select id="debit2" name="ctype1"><option selected value="">Select type of card 
																	  <option>Master card</option>
														 <option>Visa card</option></select></div></span></div>
                                    <br>

<div><span><div id="texta" style="display:none;"><input type="text" placeholder="Debit card number" name="cno1"
id="debit1"  onBlur="cno()" maxlength="20" /></div></span></div>

<div><span><div id="textc" style="display:none;"><input type="password" placeholder="Enter CVC number"
id="debit3" style="margin-left:20px" name="cvc1" maxlength="3"/> <img  src="images/CVC.JPG" id="cvc" style="margin-left:850px; margin-top:-100px	"></div></span></div>
<div><span><div id="textd" style="display:none"> 
<label>Expire date of card</label><SELECT NAME="CCExpiresMonth1" id="debit4" >
        <OPTION VALUE="" SELECTED>--Month--
        <OPTION VALUE="01">January (01)
        <OPTION VALUE="02">February (02)
        <OPTION VALUE="03">March (03)
        <OPTION VALUE="04">April (04)
        <OPTION VALUE="05">May (05)
        <OPTION VALUE="06">June (06)
        <OPTION VALUE="07">July (07)
        <OPTION VALUE="08">August (08)
        <OPTION VALUE="09">September (09)
        <OPTION VALUE="10">October (10)
        <OPTION VALUE="11">November (11)
        <OPTION VALUE="12">December (12)
      </SELECT> /
      <SELECT NAME="CCExpiresYear1">
        <OPTION VALUE="" SELECTED id="debit-4">--Year--
        <OPTION VALUE="14">2014
        <OPTION VALUE="15">2015
        <OPTION VALUE="16">2016
        <OPTION VALUE="17">2017
        <OPTION VALUE="18">2018
        <OPTION VALUE="19">2019
        <OPTION VALUE="20">2020
        <OPTION VALUE="21">2021
        <OPTION VALUE="22">2022
        <OPTION VALUE="23">2023
        <OPTION VALUE="24">2024
        <OPTION VALUE="25">2025
      </SELECT></div></span></div>

<!--Credit card-->

<div><span><div id="tex1" style="display:none;"><select id="credit1" name="ctype2"><option selected value="">Select type of card 
																	  <option>Master card</option>
														 <option>Visa card</option></select></div></span></div>
                                   <br>

<div><span><div id="tex2" style="display:none;"><input type="text" placeholder="Debit card number" name="cno2"
id="credit2"  onBlur="cno()" maxlength="20"/></div></span></div>

<div><span><div id="tex3" style="display:none;"><input type="password" placeholder="Enter CVC number"
id="credit3" style="margin-left:20px" maxlength="3" name="cvc2"/> <img  src="images/CVC.JPG" id="cvc" style="margin-left:850px; margin-top:-100px	"></div></span></div>
<div><span><div id="tex4" style="display:none">
<label>Expire date of card</label> <SELECT NAME="CCExpiresMonth2" id="credit4" >
        <OPTION VALUE="" SELECTED>--Month--
        <OPTION VALUE="01">January (01)
        <OPTION VALUE="02">February (02)
        <OPTION VALUE="03">March (03)
        <OPTION VALUE="04">April (04)
        <OPTION VALUE="05">May (05)
        <OPTION VALUE="06">June (06)
        <OPTION VALUE="07">July (07)
        <OPTION VALUE="08">August (08)
        <OPTION VALUE="09">September (09)
        <OPTION VALUE="10">October (10)
        <OPTION VALUE="11">November (11)
        <OPTION VALUE="12">December (12)
      </SELECT> /
      <SELECT NAME="CCExpiresYear2">
        <OPTION VALUE="" SELECTED id="credit-4">--Year--
        <OPTION VALUE="14">2014
        <OPTION VALUE="15">2015
        <OPTION VALUE="16">2016
        <OPTION VALUE="17">2017
        <OPTION VALUE="18">2018
        <OPTION VALUE="19">2019
        <OPTION VALUE="20">2020
        <OPTION VALUE="21">2021
        <OPTION VALUE="22">2022
        <OPTION VALUE="23">2023
        <OPTION VALUE="24">2024
        <OPTION VALUE="25">2025
      </SELECT></div></span></div>






<div><span><div id="texte" style="display:none"> <input type="submit" value="Submit" id="debit5" name="Submit"></div></span></div>
 <input type="hidden" value="<?php echo $code;?>" name="code">
 <input type="hidden" value="<?php echo $email;?>" name="email">

</form>
</div>

     <div class="clear"></div>
<div>
</div>
</div>
</div>
</div>

<?php
include("connection.php");
$text=$_REQUEST['tex'];
$n=0;
$p=$_REQUEST['pname'];
$a=$_REQUEST['page'];

print_r($p);

while($n < $text)
{
	
$qry="INSERT INTO pass_master (
`Email_ID`,
`package_code`,
`pname` ,
`page` 
)
VALUES ('$email','$code','$p[$n]','$a[$n]')";

mysql_query($qry,$con) or die ("hgjhgjhgjh");
	++$n;
}
include("footer1.php");
?>
</body>
</html>