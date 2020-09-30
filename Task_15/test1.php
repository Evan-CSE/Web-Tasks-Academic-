<?php
	session_start();
	if(isset($_SESSION['logged']))
	{
		header("Location:login_page.php");
	}
	else if($_SESSION['out'] || !isset($_SESSION['logged']))
	{
		if(isset($_SESSION['wrong']))
		{
			echo "Wrong User Name or PassWord";
			unset($_SESSION['wrong']);
		}
		echo "
		<html>
		<head>
			<title></title>
		</head>
		<body>
		<table>
			<form action = 'login_page.php' method='POST'>
				<tr>
					<td>
						UserName:
					</td>
					<td>
						<input type = 'text' name='user'>
					</td>
				</tr>
				<tr>
					<td>
						PassWord:
					</td>
					<td>
						<input type='password' name='pass'>
					</td>
				</tr>
				<tr><td></td><td><input type = 'submit' name ='li' value='Log_In'> </td></tr>
			</form>
		</table>
		<a href='reg.php'>Create Account</a>
		</body>
		</html>";
	}
?>