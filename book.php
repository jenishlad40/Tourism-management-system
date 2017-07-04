<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="formcss.css">
<title>Untitled Document</title>
<script language="javascript" type="text/javascript">
function tot()
{
	var t3 =document.getElementById("t3").value;
	var t4 =document.getElementById("t4").value;

	var t5=+t3 + +t4;
	
form1.t5.value=t5;
	
	var cost =document.getElementById("cost").value;
	var t5 =document.getElementById("t5").value;

var cost=t5 * cost;
form1.cost.value=cost;
form1.t4.focus();

	 
}
function text()
{
		var a = document.getElementById('t5');
		for(var i = 0; i<a.value; i++){
			alert(i);
	document.getElementById('new_text').innerHTML = "<input type='text' name='pname[]' id='pname' placeholder='Enter pessenger name' >  <input type='text' name='page[]' id='pname'  style='margin-left:20PX' placeholder='Enter pessenger age'><br>";
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
function pin()
	{	
		var dig=0;
		var No = form1.t10.value;
		
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
		form1.t10.value="";	
		form1.t10.focus();
	}

}
</script>
<script>
$( "text" )
  .blur(function () {
    var int = "";
    $( "select option:t5" ).each(function() {
      str += $( this ).text() + " ";
    });
    $( "div" ).text( str );
  })
  .change();

</script>
</head>

<body>

<?php
session_start();
if(isset( $_SESSION['uid']))
{
	
echo"Welcome ".$_SESSION['uid']."<br>";
include("header1.php");
	
    }
else
{}
include("connection.php");

$code="GJ111";
$id=$_SESSION['uid'];
$qry="select * from package_master where package_code='".$code."'";
$rst=mysql_query($qry,$con);
 while($row=mysql_fetch_array($rst)) 
  {
	 ?>
    <div class="content_bg">
<div class="wrap">
	<div class="content">
		<div class="content_text about">
			<h2>Package booking </h2>
</div>

<div class="contact">
<div class="contact-form">

<form id="form1" name="form1" method="post" action="pes.php?package_cost=<?php echo $row['package_cost']; ?>&package_code=<?php echo $code;?>">
    <div><span>
        <input type="text" value="<?php echo $id; ?>" readonly	 name="Email_ID" id="Email_ID" onBlur="eid()" >
        <input type="text" name="t1" id="t1" style="margin-left:20px" readonly value="<?php echo $code;?>" >
 		</span></div>
            <div class="clear"></div>
       
         <div><span>
     <input type="text" name="t2" id="t2" placeholder="Name of Group">      
      <input type="date" value="<?php echo $row['tour_date']; ?>" style="margin-left:20PX" readonly name="t6" id="t6">
     
         <input type="text" value="<?php echo $row['package_tour_day']; echo " Tour days";?>" readonly  name="t7" id="t7">
                 <input type="text" name="t10" id="t10" style="margin-left:20px" onBlur="pin()" placeholder="Enter your pincode no.">

         </span></div>
            <div class="clear"></div>
                <div><span>
        <textarea name="t9" id="t9" placeholder="Enter your full address.."></textarea>
</span></div><BR><BR>	
           <div class="clear"></div>
         
          <div><span>
       <input type="text" name="t3" id="t3"  placeholder="Total no. of child" maxlength="2">
       <input type="text" name="t4" id="t4"  style="margin-left:20px" oninput="tot(); text();" max="2"  placeholder="total no. of adult person">
         </span></div>
             <div class="clear"></div>
        <div><span>
       <input type="text" name="t5" id="t5"   readonly placeholder="Total no. of person">
  <input type="number" name="t11" id="t11" style="margin-left:20px" placeholder="Enter your contact no.">
        </span></div>
         
          
    <div class="clear"></div><br>
      <div><span>
<textarea name="t12" id="t12" placeholder="Enter your Remarks"></textarea>
</span></div><br>

        
            <div class="clear" ></div>
          <div id="new_text" ><span>
       

       </span></div>
    <div class="clear"></div>
   
<div><span>
<input type="submit" value="Next"><input type="reset" value="reset">
  </span></div>
  

  </form>
  </div>
  <div class="clear"></div>
  </div></div></div></div>
 
<?php
  }
  
include("footer.php");
?>
</body>
</html>
