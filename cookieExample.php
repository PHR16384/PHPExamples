<?php

$nVisits = 1;
$str = "";

if( isset( $_COOKIE["visits"] ) )
{
	$nVisits = $_COOKIE["visits"];
	$str = "Welcome back!  You've visited this page " . $nVisits . " times.";
	$nVisits++;
}
else
{
	$str = "Welcome, new user!";
}
setcookie("visits", $nVisits, time()+60*60*24, "/", "");

?>

<!DOCTYPE html>
<html lang="en">
	
	<head>
		<title></title>
	</head>
	
	<body>
		
		<p id="nVisits"><?php echo $str; /* print_r($_COOKIE); */ ?></p>
		
	</body>
	
</html>

