<?php
	echo "<html><body>";
	$user = "root";
	$pass = "root";
	$db = "Evan";
	$server = "localhost";
	$conn = new mysqli($server,$user,$pass,$db);
	if($conn->connect_error)
	{
		die ("Something went wrong" . $conn->connect_error);
	}
	$sql = $conn->prepare("DELETE FROM student where id = ?");
	$sql->bind_param("i",$_POST['iid']);
	$sql->execute();
	$sql = "SELECT * FROM student";
	$res  = $conn->query($sql);
	echo "Data Successfully Deleted<br><br>";
	echo "Here is the remaining data<br><br>";
	echo "<table><tr><th>ID</th><th>Name</th><th>Session</th><th>Phone</th><th>Blood Group</th></tr>";
	while($row = $res->fetch_assoc()){
		echo "<tr>";
		echo "<td>". $row['id'] ."</td><td>".$row['name'] ."</td><td>". $row['session']."</td><td>".$row['phone']."</td><td>".$row['blood'];
		echo "</td></tr>";
	}
	echo "</table>";
	echo "</body></html>";
	$conn->close();
?>