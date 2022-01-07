<?php
require('top.inc.php');

if(isset($_GET['type']) && $_GET['type']!=''){
   $type= get_safe_value($con,$_GET['type']);
   if($type=='status'){
      $operation= get_safe_value($con,
         $_GET['operation']);
      $id= get_safe_value($con, $_GET['id']);
      if($operation=='active'){
         $status='1';
      }else{
         $status='0';
      }
      $update_status_sql="UPDATE product set status='$status' where id='$id'";
      mysqli_query($con,$update_status_sql);
   }
   if($type=='delete'){
      $id= get_safe_value($con, $_GET['id']);
      $delete_sql="DELETE from product where id='$id'";
      mysqli_query($con,$delete_sql);
   }
}

$sql="SELECT product.*,categories.categories from product, categories where product.categories_id=categories.id order by product.id desc";
$res = mysqli_query($con,$sql);
?>
   
   <style type="text/css">
      .container{
         display: grid;
         grid-gap: 10px;
         grid-template-columns: 30% 40% 30%;
         grid-template-rows: 500px 200px;
         /*margin-left: 100px;*/
         min-width: 500px;
         margin: 8px;
      }
      h2 {
         font-weight: bold;
         color: black;
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
         height: 14px;
      }
      .content{
         font-size: 1em;
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
      .client_order{
         background-color: white;
         width: 300px;
         padding: 20px;
         text-align: justify;
         margin-left: 50px;
      }
      .supply_order{
         background-color: white;
         width: 300px;
         padding: 20px;
         text-align: justify;
         margin-left: 50px;
      }
      
      .supply_order input,.client_order input {
         background-color: #50a2ff;
         border: none;
         color: white;
         height: 30px;
      }
      .supply_order button, .client_order button{
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
      button a{
         text-decoration: none;
         color: white;
      }
      .orders {
         display: flex;
      }
   </style>
</head>
<body>
   <div class="container">
      <div class="one">
         <img src="images/user.png" class="profilepic">
         <h2>Profile</h2>
         <div class="content">
            <div class="profname">
         <img src="images/account1.png">
         <label>Nasenge</label><br>
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
         <div class="orders">
         <div class="supply_order">
            <h2> Supply Orders</h2>
            <p>Here you can make a new order or view all orders.</p>
               <button><a href="suporder.php">New Order</a></button>
               <button>View Orders</button>
         </div>
         <div class="client_order">
            <h2> Client Orders</h2>
            <p>Here you can make a new order or view all orders.</p>
               <button><a href="new_order.php">New Order</a></button>
               <button>View Orders</button>
            </form>
         </div>
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
<?php
   require('footer.inc.php');
?>