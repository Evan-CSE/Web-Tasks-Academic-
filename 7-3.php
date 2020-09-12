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
			$sql = "UPDATE employee 
				set name = '".$_POST['nm']."'
				, phone = '".$_POST['phn']."'
				, blood = '".$_POST['bld']."'
				, salary = '".$_POST['sal']."'
				, email = '".$_POST['mail']."'
				, post = '".$_POST['pst']."'
				where id = '".$_POST['iid']."'";
				//echo $_POST['nm'].$_POST['iid'];
				$conn->query($sql);
				echo "Data updated succesfully<br>";
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
		}
?>
