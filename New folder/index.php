<?php
	session_start();
	$output = NULL;

	//check form
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(empty($username) || empty($password)){
			$output = "please enter all fields.";
		}else{
			//Connect to the database
			$mysqli = NEW MySQLi('localhost','root','','murasira');

			$username = $mysqli->real_escape_string($username);
			$password = $mysqli->real_escape_string($password);

			$query = $mysqli->query("SELECT id FROM accounts WHERE username = '$username' AND password = '$password'");

			if($query->num_rows == 0){
				$output = "Invalid username/password";
			}else{
				//User logged in successfully.
				$_SESSION['loggedin'] = TRUE;
				$_SESSION['user'] = $username;

				$output = "WELCOME" . $_SESSION['user'] . " - <a href='logout.php'>Logout</a>";

			}
		}
	}

	if(!isset($_SESSION['loggedin'])){
		//Display welcome Guest
		//echo "Welcome Guest.<p />";

		?>
		<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Murasira</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<style type="text/css">
			header{
				background-color: #0088d2;
				display: flex;
				height: 50px;
				margin-top: -8px;
			}
			.logo{
				margin: 11px 20px;
				color: white;
			}
			header img{
				/*color: white;*/
				width: 15px;
				height: 15px;
			}
			.homebutton{
				margin: 11px 20px;
			}
			.homebutton a{
				color: white;
				margin-left: 5px;
				text-decoration: none;
				font-weight: bold;
			}
			.homebutton img{
				margin-top: -7px;
				margin-right: 4px;
			}
			.container{
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
				padding: 10px;
				width: 320px;
				/*margin-top: 100px;*/
				text-align: center;
				/*margin-left: 400px;*/
				margin-top: 80px;
				padding-bottom: 20px;
			}
			.iconlog{
				text-align: center;
			}
			.iconlog img{
				height: 150px;
			}
			form{
				text-align:left;
				justify-content: space-around;
				margin-left: 30px;
				margin-top: 20px;
			}
			input{
				/*margin: 5px;*/
				margin-left: -5px;
				width: 250px;
				height: 32px;
			}
			label{
				/*font-weight: bold;*/
				color: gray;
				margin-top: 10px;
			}
			.forget{
				background-color: #ebedef;
				width: 320px;
				height: 30px;
				/*margin-left: 400px;*/
				text-align: center;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			}
			.forget a{
				margin-left: 100px;
				text-decoration: none;
			}
			.btn{
				background-color: #0088d2;
				color: white;
				height: 40px;
				width: 100px;
			}
			.sign_btn{
				margin-top: 10px;
			}
			.reg{
				margin-top: 50px;
			}
			h1{
				color: gray;
			}
			button{
				margin-top: 10px;
			}
		</style>
	</head>
	<body>
		<header>
			<div class="logo">
				<STRONG>WIMS</STRONG>
			</div>
			<div class="homebutton">
			<a href="index.html"><img src="images/home.png" alt="homeIcon">Home</a>
		</div>
		</header>
		<div class="container">
		<div class="cont_log">
		<div class="iconlog">
			<img src="images/login.png">
		</div>
			<h1>Log-in</h1>
			<form method="post" action="">
				<label>Email Address: </label><br>
				<input type="email" name="e"><br>
				<label>Password: </label><br>
				<input type="password" name="p"><br>
				<div class="sign_btn">
				<button class="btn"><i class="fa fa-sign-in"></i> Signin</button>
				<a href="register.php" class="reg">Register</a>
			</div>
			</form>
		</div>
		
</div>
	</body>
</html>
<?php
	}else{

	}
	echo $output;
?>

