<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php
		$server = "localhost";
		$user = "root";
		$pass = "";
		$connect = new mysqli($server,$user,$pass);
		if($connect->connect_error)
		{
			die("connection could not establish".$connect->connect_error);
		}
		$sql = "CREATE DATABASE IF NOT EXISTS db2";
		$connect->query($sql);
		$connect = new mysqli($server,$user,$pass,"db2");
		$sql = "SELECT a from tbl";
		if(!$connect->query($sql))
		{
			$sql = "CREATE TABLE tbl(a varchar(20),b INT(20),
			c INT(11),d varchar(2),e varchar(10),f varchar(20),g varchar(20),
			h varchar(15),i varchar(15))";
			$connect->query($sql);
		}
		$a = $_POST['name'];
		$b = $_POST['id'];
		$c = $_POST['phn'];
		$d = $_POST['bld'];
		$e = $_POST['db'];
		$f = $_POST['fname'];
		$g = $_POST['mname'];
		$h = $_POST['pa'];
		$i = $_POST['pra'];
		$sql = "INSERT INTO tbl values('$a','$b','$c','$d','$e','$f','$g','$h','$i')";
		$connect->query($sql);
	?>	
	Successfully added!
	<br>
	<a href="form.html">
		Get back to previous page
	</a>
</body>
</html>