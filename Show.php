<!DOCTYPE html>
<html>
<head>
	<title>
		Product list
	</title>
	<link rel="stylesheet" type="text/css" href="show.css">
</head>
<body>
	<center><table>
		<tr>
			<td>
				<?php
					$connect = new mysqli("localhost","root","","db");
					if($connect->connect_error)
					{
						die("Connection error".$connect->connect_error);
					}
					else
					{
						$sql = "SELECT name, unit, price from product";
						$res = $connect->query($sql);
						if($res->num_rows>0)
						{
							echo "<tr><th>Product</th><th> Unit </th><th>Price</th></tr>";
							while($r = $res->fetch_assoc())
							{
								echo "<tr><td>" . $r["name"] ."</td><td>". $r["unit"]."</td><td>".$r["price"] . "</td></tr>";
							}
						}
					}
				?>
			</td>
		</tr>
	</table></center>
</body>
</html>