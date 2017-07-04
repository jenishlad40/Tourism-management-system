 <html>
 <body>
 
 
 <form id="form1" name="f1" method="GET" action="search_result1.php">
       
           <table height="280" style="margin-left:28px;margin-top:14px;  " >
           <tr><td colspan="2" style="color:#006; font-size:18px; font-weight:bold">Duration:</td></tr>
           <tr> <td ><input type="radio" name="search" value="<?php range(1,20);?>" id="search_0"  />
       
              <strong>Any</strong></td>
            <td width="171"><label>
               <input type="radio" name="search" value="3" checked="true" id="search_1" />
              <strong>1-3 Nights</strong></label></td>
          </tr>
          <tr>
          <td ><input type="radio" name="search" value="4" id="search_0" />
       
              <strong>4-7 Nights</strong></td>
              <td ><input type="radio" name="search" value="7" id="search_0" />
       
              <strong>7+ Nights</strong></td></tr>
        
          <tr>
            <td><strong style="color:#006; font-size:18px; font-weight:bold">Destination:</strong></td>
            </tr><tr><td>
              
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
          </tr>
        
          <tr>
           
            <td> <input type="submit">
<!--            <a href="search_result.php"><img src="images/search_bot.jpg"  width="78" height="28" border="0" /></a></td>
    -->      </tr>
        </table>
        </form> 
        </body>
        </html>