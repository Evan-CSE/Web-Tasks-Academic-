<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>
		Form Validation Using PHP
	</title>
</head>
<body>
	
	<?php
	$fl = TRUE;
	function valid($phn)
	{
		if(strlen($phn)!=11 || $phn[0]!='0' || $phn[1]!='1' || ($phn[2]!='3' && $phn[2]!='5' && $phn[2]!='6' && $phn[2]!='7' && $phn[2]!='8' && $phn[2]!='9' ))
			return FALSE;
		for ($i=0; $i <strlen($phn) ; $i++) { 
			if($phn[i]>='0' && $phn[i]<='9')
				continue;
			else
				return FALSE;
		}
		return TRUE;
	}
		if(empty($_POST["name"])){
			echo nl2br("Name must be a valid String\n");
			$fl = FALSE;
		}
		if(!is_numeric($_POST["roll"]))
		{
			$fl = FALSE;
			echo nl2br("Roll must contain only digits\n");
		}
		if(!is_numeric($_POST["reg"]))
		{
			$fl = FALSE;
			echo nl2br("Registration Number must contain digits\n");
		}
		if(!valid($_POST["phn"]))
		{
			$fl = FALSE;
			echo nl2br("Phone number must be valid\n");
		}
		$bday = $_POST["db"];
		$today = 2020;
		$num=0;
		//echo nl2br($bday[0]." + ".$bday[1]. " + " . $bday[2] . " + ".$bday[3]);
		for( $i=0;$i<4;$i++)
		{
			//echo "$today[$i]......";
			$num*=10;
			$num+=$bday[$i];
		}
		//echo "$num"; 
		if($today-$bday<22)
		{
			$fl = FALSE;
			echo nl2br("Age should be at least 22\n");
		}
		if($fl)
		{
			echo nl2br(" Name :" .$_POST["name"]."\n");
			echo nl2br("Phone Number :" . $_POST["phn"]."\n");
			echo nl2br("Date Of birth: " .$_POST["db"]."\n");
			echo nl2br("Department : ".$_POST["dept"]."\n");
			echo nl2br("Blood Group : ".$_POST["bld"]."\n");
			echo nl2br("Registration Number : ".$_POST["reg"]);

		}
	?>
</body>
</html>