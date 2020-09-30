<?php
	session_start();
	unset($_SESSION['logged']);
	if(isset($_POST['sub']))
	{
		function  ValidName($name)
		{
			for($i=0;$i<strlen($name);$i++)
				if(($name[$i]>='a' && $name[$i]<='z') || ($name[$i]>='A' && $name[$i]<='Z'))
						continue;
				else
					return false;
				return true;
		}


		function ValidMail($mail)
		{
			for($i=0;$i<strlen($mail);$i++)
				if($mail[$i]=='@')
						return true;
				return false;
		}


		function ValidPhone($phone)
		{
			if(strlen($phone)!=11 || $phone[0]!='0' || $phone[1]!='1')
				return false;
			if($phone[2]=='3' || $phone[2]=='4' || $phone[2]=='1' || $phone[2]=='5' || $phone[2]=='6' || $phone[2]=='7' || $phone[2]=='8' || $phone[2]=='9')
				return true;
			return false;
		}



		function ValidPass($pass)
		{
			if(strlen($pass)<6)
				return false;
			return true;
		}
		//echo ValidPass($_POST['pass']);

		if(ValidName($_POST['user'])  && ValidMail($_POST['mail']) && ValidPhone($_POST['phone']) && ValidPass($_POST['pass']))
		{
			$user = 'root';
			$pass = 'root';
			$server = "localhost";
			$db = 'Evan';
			$conn = new mysqli($server,$user,$pass,$db);
			$sql = $conn->prepare("INSERT INTO Admin Values(?,?,?,?)");
			$sql->bind_param("ssss",$_POST['user'],$_POST['pass'],$_POST['mail'],$_POST['phone']);
			$sql->execute();
			$_SESSION['logged'] = 'ok';
			$_SESSION['user'] = $_POST['user'];
			unset($_POST['sub']);
			$conn->close();
			header("Location:login_page.php",true);
			
		}
		else
		{
			unset($_POST['sub']);
			echo "Use Correct data format";
			sleep(2);
			header("Location:reg.php");
		}

	}
	else{
	echo "<!DOCTYPE html>
	<head>
		<title></title>
		<script src='valid.js'></script>
	</head>
	<body>
		<table>
			<form name ='form' action = 'reg.php' onsubmit='return valid()' method = 'POST'>
			<tr>
				<td>
					User Name: (Number of characters should not be greater than 10 characters)
				</td>
				<td>
					<input type='text' name = 'user'>
				</td>
			</tr>
			<tr>
				<td>
					Password: (Must be at least 6 character long)
				</td>
				<td>
					<input type='password' name = 'pass'>
				</td>
			</tr>
			<tr>
				<td>
					Email:
				</td>
				<td>
					<input type='email' name = 'mail'>
				</td>
			</tr>
			<tr>
				<td>
					Phone Number:
				</td>
				<td>
					<input type='text' name = 'phone'>
				</td>
			</tr>
			<tr>
				<td>
				</td>
				<td>
					<input type='submit' name = 'sub' value ='Proceed'>
				</td>
			</tr>
			</form>
		</table>
	</body>
	</html>";
}
?>