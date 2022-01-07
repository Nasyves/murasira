<!DOCTYPE html>
<html>
<head>
	<title>View Supplier</title>
	<style type="text/css">
		.all_sup_container{
			display: flex;
		}
		.supContainer{
			margin-right: 200px;
			margin-left: 200px;
		}
		.supUpdate{
			width: 450px;
			border: gray 1px solid;
		}
		.supUpdate label{
			padding: 10px;
			display: flex;
			flex-direction: column;
		}
		.supUpdate form{
			padding: 20px;
		}
	</style>
</head>
<body>
	<?php
		include("admin_header.php");
	?>
	<h1>View Suppliers</h1>
	<div class="all_sup_container">
	<div class="supContainer">
		<form method="post" action="#">
			<div class="sup_search">
			<label>Name</label>
			<input type="text" name="supSearch">
			<input type="Submit" name="search_sup" value="Search">
		
			</div>
			<div class="sup_search_view">
		
			</div>
			<input type="submit" name="supEdit" value="Edit">
			<input type="submit" name="supDelete" value="Delete">
		</form>
	</div>
	<div class="supUpdate" >
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
			<input class="btn" type="submit" name="supCreate" value="update">
		</form>
	</div>
	</div>
</body>
</html>