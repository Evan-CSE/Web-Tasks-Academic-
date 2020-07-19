<html>
	<head>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<center><h3>Congratulaions <?php
								echo $_POST['name'];
							?>
		</h3>
		</center>
		<center><strong>Please check all your informations again</strong></center>
		<center><table>
			<tr>
				<td><b> Name: </b></td>
				<td>
					<?php echo $_POST['name'] ?>
				</td>
			</tr>
			<tr>
				<td><strong> Phone Number : </strong></td>
				<td>
					<?php echo $_POST['phn'] ?>
				</td>
			</tr>
			<tr>
				<td> <strong> Department: </strong></td>
				<td>
					<?php echo $_POST['dept'] ?>
				</td>
			</tr>
			<tr>
				<td><strong> Blood Group: </strong></td>
				<td>
					<?php echo $_POST['bld'] ?>
				</td>
			</tr>
			<tr>
				<td><strong> Date of Birth: </strong> </td>
				<td>
					<?php echo $_POST['db'] ?>
				</td>
			</tr>
			<tr>
				<td><strong>Gender:</strong> </td>
				<td>
					<?php echo $_POST['gender'] ?>
				</td>
			</tr>
			<tr>
				<td><strong> About <?php echo $_POST['name']?>:</strong> </td>
				<td>
					<?php echo $_POST['profile'] ?>
				</td>
			</tr>
		</table>
		</center>
	</body>
</html>