<!DOCTYPE html>
<body>	<?php

		function ValidString($str)
		{
			for($i = 0;$i<strlen($str);$i++)
			{
				if(($str[$i]>='a' && $str['z']) || ($str[$i]>='A' && $str[$i]<='Z'))
					continue;
				return false;
			}
			return TRUE;
		}



		function ValidNum($str)
		{
			return is_numeric($str);
		}


		function ValidPhone($str)
		{
			if($str[0]!='0' || $str[1]!='1' || !($str[2]=='3' || $str[2]=='4' || $str[2]=='5' || $str[2]=='6' || $str[2]=='7' || $str[2]=='8' || $str[2]=='9'))
				return false;
			if(strlen($str)!=11)
				return false;
			return is_numeric($str);
		}


		function ValidMail($str)
		{
			$flag = false;
			for($i=0;i<strlen($str);$i++)
				if($str[$i] =='@')
					$flag = true;
			return flag && strpos($str,".com");
		}




		$flag = true;
		if(!ValidString($_POST['nm']))
			$flag = false;
		if(!ValidString($_POST['loc']))
			$flag = false;
		if(!is_numeric($_POST['age']))
			$flag = false;
		if(!ValidMail($_POST['mail']))
			$flag = false;
		if(!ValidPhone($_POST['num']))
			$flag = false;
		if(!ValidString($_POST['hmd']))
			$flag = false;
		if(!$flag)
			echo "Please make sure you entered valid data";
		else
		{
			echo "Congratulations " .$_POST['nm']."<br>";
			echo "<table><tr><td><th>Name</th></td><td><th>Location</th></td><td><th>Age</th></td><td><th>Email</th></td><td><th>Phone</th></td><td><th>Date of Birth</th></td><td><th>Home District</th></td><td><th>Blood Group</th></td></tr><tr><td>".$_POST['nm'].
			"</td><td>".$_POST['loc'].
			"</td><td>".$_POST['age'].
			"</td><td>".$_POST['mail'].
			"</td><td>".$_POST['num'].
			"</td><td>".$_POST['db'].
			"</td><td>".$_POST['hmd'].
			"</td><td>".$_POST['bld'].
			"</td></tr></table><br>";

		}

	?>
</body>
</html>
