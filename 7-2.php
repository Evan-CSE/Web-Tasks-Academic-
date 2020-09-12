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
			$sql = "SELECT * FROM employee where id = '".$_POST['I']."'";
			$idd = $_POST['I'];
			$conn->query($sql);
			if($conn->query($sql)==FALSE)
				echo $conn->error;
			else
			{
				echo "<form method = 'post' action = '7-3.php'>
				ID: <input type = 'number' value = '".$idd."' name = 'iid'><br>
				Name: <input type = 'text' name = 'nm'
				><br>
				Blood Group: <input type='text' name = 'bld'><br>
				Mobile: <input type = 'text' name='phn'><br>
				Salary: <input type = 'number' name='sal'><br>
				Mail: <input type ='text' name='mail'><br>
				Designation: <input type='text' name = 'pst'><br>
				<input type = 'submit'><br> 
				</form>";
		}
	}	
	?>
</body>
</html>
