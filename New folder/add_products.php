<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>add products</title>
	<style type="text/css">
		/*ul{
			display: flex;
			list-style-type: none;
		}
		li{
			margin: 20px;
			margin-top: 4px;
		}
		a{
			text-decoration: none;
			color: white;
		}
		a:hover{
			background-color: #57c0ff;
			height: 30px;
		}
		.menu{
			max-height: 30px;
			width: 100%;
			background-color: #8d0b00;
		}*/
		textarea{
			width: 300px;
			height: 200px;
		}
		input{
			margin: 5px;
		}
		section{
			border: gray 1px solid;
			padding: 15px;
		}
	</style>
</head>
<body>
<div class="header">
	<?php
		include("admin_header.php")
	?>
	<!--<div class="menu">
		<ul>
			<a href="#"><li>Add Product</li></a>
			<a href="#"><li>Suppliers</li></a>
			<a href="#"><li>Customers</li></a>
			<a href="#"><li>New Transaction</li></a>
			<a href="#"><li>Add seles Manager</li></a>
			<a href="#"><li>Add Warehouse Manager</li></a>
			<a href="#"><li>Logout</li></a>
		</ul>
	</div>-->
	<h1>Add product</h1>
</div>
<section>
	<div class="container">
		<form method="post" action="#">
		<tr>

			<td align="right"><label>Product ID: </label></td>
			<td><input type="text" name="productid"><br></td>
			<td align="right"><label>Product Name: </label></td>
			<td><input type="text" name="product_name"><br></td>
			<td align="right"><label>Unit: </label></td>
			<td><input type="number" name="quantity"><br></td>
			<td align="right"><label>Cost Per Unit: </label></td>
			<td><input type="text" name="costperunit"><br></td>
			<td align="right"><label>Description: </label></td>
			<td><TEXTAREA></TEXTAREA><br></td>
			<td align="right"><label>Stock</label></td>
			<td><input type="stock" name="stock"><br></td>
			<input type="submit" value="Submit" name="create_prod">
</tr>
		</form>
	</div>
</section>
</body>
</html>