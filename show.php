<html>
<body>
	<?php
	$user = "root";
	$pass = "root";
	$server = "localhost";
	$db = "Evan";
	$conn = new mysqli($server,$user,$pass,$db);
	$conn->query($sql);
	if($conn->connect_error)
		die($conn->connect_error);
	else
	{
		$sql = "SELECT * FROM student";
		$conn->query($sql);
		if($conn->error)
			echo $conn->error;
		else
			{
				echo "<table>";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc())
				{
					echo "<tr><td>".
					$row['id'].
					"</td>".
					"<td>".
					$row['name'].
					"</td>".
					"<td>".
					$row['session'].
					"</td>".
					"<td>".
					$row['blood'].
					"</td>".
					"<td>".
					$row['phone'].
					"</td>"
					."</tr>";
				}
				echo "</table>";
			}
	}
	?>
</body>
</html>
