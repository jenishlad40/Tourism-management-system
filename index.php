<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="images/sI.jpg" rel="Shortcut Icon"></link>
<title>Disha Holidays</title>
</head>
<body>

<?php

$page = 'Home page';

// $_SERVER['PHP_SELF']

include ( 'counter.php');
?>
<h1 style="color:#FFF">
<?php
addinfo($page);
?>
</h1>
<?php 
include('header.php');
print '<div style="width:100%">';
include("C:\wamp\www\My project\web\slider.html");
print '</div>';
?>
<div class="wrap">
	<div class="content" style="margin-left:-200px; ">
		
	<!-- start main_btm -->
		<div style="margin: -3.5% 0; background-image:url(images/2.jpg);padding: 4%;margin-right:-165px;margin-left:35px; outline:outset"	>	
<?php

include("package_code.php");

?>
</div></div></div>
<?php
include('footer.php');
?>
</body>
</html>