 <html>
<link href="images/sI.jpg" rel="Shortcut Icon"></link>
 <body>
 
<?php
include("connection.php");
$sql="Select count from hits";
$rslt=mysql_query($sql,$con);
while($row=mysql_fetch_array($rslt))
{?>
<table border="5" width="340px">
<tr><td align="center" style=" font-size:x-large; font-weight:bold; background-color:#FFF; border-radius:20px;">No. of site visitor</td><td align="center" style=" font-size:x-large; font-weight:bold; background-color:#FFF; border-radius:20px"><?php echo $row['count'];?></td></tr>
</table>
<?php 
}
?>	
<br>
<fieldset style="width:330px; border:double; background-color:#FFF; border-radius:10px">
<br>		
<h1 align="center" style="color:#006; font-size:x-large; font-weight:bold"><u>Search your package</h1><br>

 <form id="form1" name="f1" method="GET" action="search_result.php">
       
           <table height="290" style="margin-left:28px;margin-top:14px;  " >
           <tr><td  style="color:#006; font-size:18px; font-weight:bold">Duration</td></tr>
           <tr> <td ><input type="radio" name="search" value="<?php range(1,20);?>" id="search_0"  />
       
              Any</td>
            <td width="171"><label>
               <input type="radio" name="search" value="3" checked="true" id="search_1" />
          1-3 Nights</label></td>
          </tr>
          <tr>
          <td ><input type="radio" name="search" value="4" id="search_0" />
       
              4-7 Nights</td>
              <td ><input type="radio" name="search" value="7" id="search_0" />
       
         7+ Nights</td></tr>
     
        
          <tr>
            <td><strong style="color:#006; font-size:18px; font-weight:bold">Destination</strong></td></tr>
            <tr>
            <td>
            <?php
			include("connection.php");

              $qry="select DISTINCT package_city from package_master";
			  	$result = mysql_query($qry, $con) ;
				?>
             <select id="cty" name="cty" style="alignment-adjust:central" > 
 
	<?php
 while($rows = mysql_fetch_array($result,true)) 
  {
	  ?>
	  	<option value="<?php echo $rows['package_city'];?>" ><?php echo $rows['package_city'];?></option>

<?php
}?>
</select>

          <tr>
        
            <td> <input type="submit"></td>
<!--            <a href="search_result.php"><img src="images/search_bot.jpg"  width="78" height="28" border="0" /></a></td>
    -->      </tr>
        </table>
        </form> 
        </fieldset>
        

  </body>
        </html>
      