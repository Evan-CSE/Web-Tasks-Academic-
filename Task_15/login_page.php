<?php
	session_start();
	if($_POST['LO']) //Log Out 
	{
		unset($_POST['LO']);
		unset($_SESSION['logged']);
		unset($_SESSION['user']);
		unset($_SESSION['info']);
		$_SESSION['LO'] = 'ok';
		header("Location:test1.php");
	}
	if($_POST['li']=='Log_In') //Checks for login crenedtial
	{
		$flag = false;
		$user = 'root';
		$pass = 'root';
		$server = 'localhost';
		$db = 'Evan';
		//echo "okk2";
		$con = new mysqli("localhost","root","root","Evan");
		$sql = "SELECT * FROM Admin";
		$res = $con->query($sql);
		unset($_SESSION['wrong']);
		while($row = $res->fetch_assoc())
		{
			if( $row['user']==$_POST['user'] && $row['pass']==$_POST['pass'])
			{
				$_SESSION['logged'] = 'ok';
				$_SESSION['user'] = $row['user'];
				unset($_POST['li']);
				header("Location:login_page.php");
				break;
			}
		}
		$_SESSION['wrong'] = 'ok';
		header("Location:test1.php");
	}
	if($_SESSION['logged']) //Checks if logged in
	{
		echo "logged in<br>";
		$user = 'root';
		$pass = 'root';
		$server = 'localhost';
		$db = 'Evan';
		//echo "okk2";
		$con = new mysqli("localhost","root","root","Evan");
		$sql = ("SELECT * FROM Admin where user='".$_SESSION['user']."'");
		//$//sql->bind_param("s",$_SESSION['user']);
		$res  = $con->query($sql);
		$name = $pass = $mail = $phone = "";
		$row=$res->fetch_assoc();
		//echo $row['user'];
		$con->close();
		echo "Here is all data you provided<br><br>";
		echo "<html>
		<head>
			<title></title>
		</head>
		<body>
			<table>
				<tr>
					<td>
						Name:
					</td>
					<td>".$row['user']."

					</td>
				</tr>
				<tr>
					<td>
						Mail:
					</td>
					<td>".$row['mail']." 
					</td>
				</tr>
				<tr>
				<td>
					Phone Number:
				</td><td>".$row['phone']." </td>
				</tr>
			</table>
		</body>
		</html>";
		echo "
		<html>
		<head>
			<title></title>
		</head>
		<body>
			<form action='login_page.php' method = 'POST'>
			<input type = 'submit' name='LO' value = 'Log Out'>
			</form>
		</body>
		</html>";
	}

?>