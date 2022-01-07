<!DOCTYPE html>
<html>
<head>
	<title>Transaction</title>
</head>
<body>
	<?php
		include("admin_header.php");
	?>
	<h1>New Transaction</h1>
	<div class="main_container">
		<div class="type_container">
			<form method="post" action="#">
				<span>Type:-</span>
				<label>Customer</label>
				<input type="radio" name="trans_type" value="Customer">
				<label>Supplier</label>
				<input type="radio" name="trans_type" value="Supplier"><br>
				<label>To:-</label>
				<select id="trans" name="trans">
					<option value="">x</option>
					<option value="">y</option>
					<option value="">z</option>
				</select>
			</form>
		</div>
		<div class="product_container">
			<form method="post" action="#">
				<input type="radio" name="selection" value="Products">
		</div>
		<div class="add_trans">
			<form method="post" action="#">
				<label>Product Name:-</label>
				<input type="text" name="prod_name">
				<label>Product Stock:-</label>
				<input type="text" name="prod_stock"><span>kg</span>
				<label>units:-</label>
				<input type="text" name="prod_unit"><span>kg</span>
			</form>
		</div>
		
	</div>
</body>
</html>