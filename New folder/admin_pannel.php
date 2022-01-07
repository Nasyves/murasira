<!DOCTYPE html>
<html>
<head>

	<title>Admin</title>
	
	<style type="text/css">
		body{
			max-width: 1200px;
			margin: 80px;
		}
		.container{
			display: grid;
			grid-gap: 10px;
			grid-template-columns: 30% 40% 30%;
			grid-template-rows: 500px 200px;
			/*margin-left: 100px;*/
			min-width: 500px;
		}
		/*.grid-item{
			background-color: blue;
			color: white;
		}
		.grid-item:nth-child(even){
			background-color: black;
			color: white;
		}*/
		.one{
			border-color: #f0f0f0;
			border-style: solid;
			padding: 10px 20px;
		}
		.content img{
			height: 15px;
		}
		.content{
			font-size: 1.1em;
			/*margin-bottom: 20px;*/
		}
		button{
			margin-top: 10px;
			background-color: #50a2ff;
			border: none;
			height: 40px;
			width: 90px;
			color: white;
			font-size: 18px;
			border-radius: 5px;
		}
		.editimg{
			margin-right: 5px;
		}
		.profilepic{
			height: 220px;
			margin-left: 40px;
		}
		.profname{
			margin-bottom: 15px;
		}
		.usertype{
			margin-bottom: 15px;
		}
		.lastlogin{
			margin-bottom: 15px;
		}
		.two{
			grid-column: 2/4;
			background-color: #ebe9ef;
			text-align: center;
		}
		.admin_order{
			background-color: white;
			width: 300px;
			padding: 20px;
			text-align: justify;
			margin-left: 240px;
		}
		/*.admin_order h2{
			text-align: center;
		}*/
		.admin_order input{
			background-color: #50a2ff;
			border: none;
			color: white;
			height: 30px;
		}
		.admin_order button{
			width: 130px;
		}
		.three{
			border-color: #f0f0f0;
			border-style: solid;
			padding: 10px 20px;
		}
		.three img{
			height: 15px;
		}
		.three button{
			font-weight: bolder;
			width: 120px;
		}
		.manage{
			background-color: #28f670;
		}
		.four{
			border-color: #f0f0f0;
			border-style: solid;
			padding: 10px 20px;
		}
		.four img{
			height: 15px;
		}
		.four button{
			font-weight: bolder;
			width: 120px;
		}
		.five{
			border-color: #f0f0f0;
			border-style: solid;
			padding: 10px 20px;
		}
		.five img{
			height: 15px;
		}
		.five button{
			font-weight: bolder;
			width: 120px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="one">
			<img src="images/login.png" class="profilepic">
			<h2>Profile</h2>
			<div class="content">
				<div class="profname">
			<img src="images/account1.png">
			<label>Nasenge yves</label><br>
				</div>
				<div class="usertype">
			<img src="images/account1.png">
			<label>Admin</label><br>
				</div>
				<div class="lastlogin">
			<img src="#">
			<label>Last login</label><br>
				</div>
			<button><img src="images/edit.png" class="editimg">Edit</button>
			</div>			
		</div>
		<div class="two">
			<h1>Welcome Admin;</h1>
			<div class="admin_order">
				<h2>Orders</h2>
				<p>Here you can make a new order or view all orders.</p>
					<button>New Order</button>
					<button>View Orders</button>
				</form>
			</div>
		</div>
		<div class="three">
			<h2>Category</h2>
			<p>Here you can add and manage categories</p>
			<button><img src="images/add.png">Add</button>
			<button class="manage"><img src="images/manage.png">Manage</button>
		</div>
		<div class="four">
			<h2>Brands</h2>
			<p>Here you can add and manage Brands</p>
			<button><img src="images/add.png">Add</button>
			<button class="manage"><img src="images/manage.png">Manage</button>
		</div>
		<div class="five">
			<h2>Products</h2>
			<p>Here you can add and manage Products</p>
			<button><img src="images/add.png">Add</button>
			<button class="manage"><img src="images/manage.png">Manage</button>
		</div>
	</div>
</body>
</html>