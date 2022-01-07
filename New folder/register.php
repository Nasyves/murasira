<!DOCTYPE html>
<html>
<head>
	<title>WIMS Registration</title>
	<style>
		body{
			width: 800px;
			text-align: center;
		}
		.regcontainer{
			background-color: #f0f0f0;
			height: 40px;
			margin: -20px;
			position: absolute;
			width: 395px;
		}
		.sub_container{
			border-color: #f0f0f0;
			border-style: solid;
			width: 400px;
			text-align: center;
			margin-top: 100px;
			margin-left: 500px;
			padding: 20px;
		}

		button img{
			height: 20px;
			color: white;
			margin-top: -6px;
		}
		button{
			background-color: #0088d2;
			border: none;
			color: white;
			height: 30px;
		}
		form{
			text-align: left;
			margin-top: 20px;
		}
		input{
			width: 350px;
		}
		.btn{
			margin-top: 20px;
		}
		select{
			width: 350px;
		}
		.tit{
			font-weight: bold;
			font-size: 1.4em;
		}
	</style>
</head>
<body>
	
		<div class="sub_container">
			<div class="regcontainer">
				<label class="tit">Register</label>
			</div>
			<form method="post" action="index.php">
				<label>Username </label><br>
				<input type="text" name="username"><br>
				<label>Email address</label><br>
				<input type="email" name="email"><br>
				<label>Password</label><br>
				<input type="password" name="password"><br>
				<label>Re-enter Password</label><br>
				<input type="password" name="p2"><br>
				<label for="user">Usertype</label><br>
				<select name="user" id="user"><br>
					<option value="admin">Admin</option>
					<option value="salesMan">Sales Man</option>
					<option value="manager">Manager</option>
				</select><br>
				<div class="btn">
				<button type="submit"><img src="images/account.png">
				Register</button> <a href="index.html">Login</a>
			</div>
			</form>
		</div>
	</div>
	
</body>
</html>