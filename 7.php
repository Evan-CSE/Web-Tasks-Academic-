<html>
<body>
	<?php
		$user = "root";
		$pass = "root";
		$server = "localhost";
		$db = "Evan";
		$conn = new mysqli($server,$user,$pass,$db);
		if($conn->connect_error)
		{
			die($conn->connect_error);
		}
		else
		{
			$sql = "SELECT * FROM employee";
			if($conn->query($sql))
			{
				echo "Here's all available data<br>";
				echo "<table>";
				$res = ($conn->query($sql));
				while($row = $res->fetch_assoc())
				{
					echo "<tr>";
					echo "<td>".$row['id']."</td>"."<td></td>".
					"<td>".$row['name']."</td>"."<td></td>".
					"<td>".$row['phone']."</td>"."<td></td>".
					"<td>".$row['salary']."</td>"."<td></td>".
					"<td>".$row['blood']."</td>"."<td></td>".
					"<td>".$row['email']."</td>"."<td></td>".
					"<td>".$row['post']."</td><br>";
					echo "</tr>";
				}
				echo "</table>";
			}
			echo "Update by id\n".
			"<form method ='post' action='7-2.php'>
			<input type = 'number' name = 'I'> <br>
			<input type = 'submit'><br>
			</form>";
		}
	?>
</body>
</html>
