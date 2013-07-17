<!DOCTYPE html>
<html lang="en">
	<head>
		<title>PHP Examples</title>
	</head>
	
	<body>
		
		<?php
			echo "<p>" . date(DATE_RSS) . "</p>";	//display the date (RSS-feed format)
			
			$include = array( "cookieExample.php", "MySQL.php" );
			
			for($x = 0; $x < count($include); $x++)
			{
				echo "<hr />";
				include $include[$x];
			}
		?>
		
	</body>
</html>