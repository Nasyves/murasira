<!DOCTYPE html>
<html>
<head>
	<title>add supplies</title>
	<style type="text/css">
		
		section{
			text-align: center;
			width: 800px;
			margin: 0px 100px 0px 100px;
		}
		label{
			margin: 10px;
			text-align: justify;
			justify-content: auto;
		}
		input{
			margin-bottom: 10px;
		}
		textarea{
			width: 170px;
			height: 50px;
		}
		.btn{
			margin-top: 30px;
			height: 40px;
			width: 70px;
			background-color: #8d0b00;
			color: white;
			font-size: 18px;
		}
	</style>
</head>
<body>
	<?php
		include("admin_header.php");
	?>
	<h1>Add Supplier</h1>
	<section>
		<form method="post" action="#">
			<label>Supplier ID: </label>
			<input type="text" name="supID" value="123546">
			<label>Name</label>
			<input type="text" name="supName"><br>
			<label>Email ID</label>
			<input type="Email" name="supEmail">
			<label>Mobile ID</label>
			<input type="phone" name="supMob"><br>
			<label>Address</label>
			<textarea name="supAddress">
				
			</textarea>
			<label>Remarks</label>
			<textarea name="supRemarks">
				
			</textarea><br>
			<input class="btn" type="submit" name="supCreate" value="Submit">
		</form>
	</section>
</body>
</html>