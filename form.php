<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$name = $_POST["name"];
		$unit = $_POST["q"];
		$price = $_POST["price"];
		if(!is_numeric($unit) || !is_numeric($price) || empty($name) || !ctype_alpha($name))
		{
			echo nl2br("Enter valid data\n");
		} 
		else
		{
			$connect = new mysqli("localhost","root","");
			if($connect->connect_error)
			{
				die("Connection could not establish".$connect->connect_error);
			}
			else
			{
				$sql = "CREATE DATABASE IF NOT EXISTS db";
				$connect->query($sql);
				$connect->exit;
				$connect = new mysqli("localhost","root","","db");
				if(!$connect->query("select name from product LIMIT 1"))
				{
					echo nl2br("Table does not exist\n");
					$sql2 = "CREATE TABLE product (name varchar(20),unit INT(20),price INT(20))";
					if($connect->query($sql2)==TRUE)
						echo nl2br("Table created\n");
					else
						echo $connect->error;
				}
				$sql = "INSERT INTO product(name,unit,price) values('$name','$unit','$price')";
				//$connect->query($sql);
				if($connect->query($sql)==TRUE)
				echo nl2br("Table creation successful\n");
			else
				echo $connect->error;
				//$sql = "select name from product";
				//echo $connect->query($sql);

			$connect->exit;
			}
		}
	 ?>
	 Submission successful<br>
	 <a href="product.html" color = "red">Go back to previous page</a><br>
	 <a href="Show.php" color = "blue">Current Product List</a>
</body>
</html>