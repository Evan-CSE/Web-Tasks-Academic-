<?php
	echo "<html><body>";
	echo "<marquee>Design a webpage that will show the list stored in a database containing student’s profile with a link to delete them.</marquee>";
	$user = "root";
	$pass = "root";
	$db = "Evan";
	$server = "localhost";
	$conn = new mysqli($server,$user,$pass,$db);
	if($conn->connect_error)
	{
		die ("Something went wrong" . $conn->connect_error);
	}
	$sql = "SELECT * FROM student";
	$res  = $conn->query($sql);
	echo "<table>";
	echo "<tr><th>ID</th><th>Name</th><th>Session</th><th>Phone</th><th>Blood Group</th></tr>";
	while($row = $res->fetch_assoc()){
		echo "<tr>";
		echo "<td>". $row['id'] ."</td><td>".$row['name'] ."</td><td>". $row['session']."</td><td>".$row['phone']."</td><td>".$row['blood'];
		echo "</td></tr>";
	}
	echo "</table><br>";
	echo "Enter ID to be deleted";
	echo "<form action='12-2.php' method = 'POST'><input type='number' name ='iid'><br><br><input type='submit'></form>";
	echo "</body></html>";
	$conn->clsoe();
?>