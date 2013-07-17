<?php
	//open a connection to the MySQL server:
	$con = mysqli_connect("localhost","root","","test");
	
	//check if connection succeeded:
	if (mysqli_connect_errno($con))
	{
		echo "<p>Failed to connect to MySQL: " . mysqli_connect_error() . "</p>";
	}
	else
	{
		echo "<p>Successfully connected to MySQL.</p>";
		
		$sql = "SELECT * FROM countries ORDER BY isocode";
		$result = mysqli_query($con,$sql);
		
		//get all the SQL data at once:
		$array = mysqli_fetch_all($result,MYSQLI_ASSOC);
		//the associative array should have the column names as keys:
		$columns = array_keys($array[0]);
		
		$R = count($array);
		$C = count($columns);
		
		echo "<pre>&ldquo;" . $sql . "&rdquo;</pre>";
		echo "<p><b>Found " . $C . " columns, " . $R . " rows:</b></p>";
		
		echo "<table border='1'>";
		echo "<tr>";
		for($x = 0; $x < $C; $x++)
		{
			echo "<th>" . $columns[$x] . "</th>";
		}
		echo "</tr>";
		
		for($x = 0; $x < $R; $x++)
		{
			echo "<tr>";
			foreach($array[$x] as $key=>$value)
			{
				echo "<td>" . $value . "</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}
	
	mysqli_close($con);	//close MySQL connection
	
	printf("<p>Connection closed.</p>");
?>
