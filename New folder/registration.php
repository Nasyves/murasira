<?php
	include("connect.php");
	
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<form method="post" action="">
		<table border="0" align="center" cellpadding="5">
			<tr>
				<td align="right">Username</td>
				<td><input type="text" name="u" required/></td>
				<td align="right">Password</td>
				<td><input type="password" name="p" required/></td>
				<td align="right">Repeat Password</td>
				<td><input type="password" name="p2" required/></td>
				<td align="right">Email address</td>
				<td><input type="email" name="e" required/></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="Register" required></td>
			</tr>
		</table>
	</form>
	<center>
		<?php
			//echo $error;
		?>
	</center>
</body>
</html>