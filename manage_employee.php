
123456789


<?php
require('top.inc.php');
$location_id='';
$name='';
$post='';
$salary='';
$id_card='';

$msg='';
if (isset($_GET['id']) && $_GET['id']!='') {
   $id=get_safe_value($con,$_GET['id']);
   $res=mysqli_query($con,"SELECT * from employee where id='$id'");
   $check=mysqli_num_rows($res);
   if($check>0){
      $row=mysqli_fetch_assoc($res);
      $location=$row['location_id'];
   }else{
      header('location: employee.php');
      die();
   }
}

if(isset($_POST['submit'])) {
   $location_id=get_safe_value($con,$_POST['location_id']);
   $name=get_safe_value($con,$_POST['name']);
   $post=get_safe_value($con,$_POST['post']);
   $salary=get_safe_value($con,$_POST['salary']);
   $id_card=get_safe_value($con,$_POST['id_card']);

      $res=mysqli_query($con,"SELECT * from employee where id_card='$id_card'");
      $check=mysqli_num_rows($res);
      if ($check>0) {
         if (isset($_GET['id']) && $_GET['id']!='') {
            $get_data=mysqli_fetch_assoc($res);
            if ($id==$get_data['id']) {
             
         }else{
            $msg = "Employee already exist";
            }   
         }else{
            $msg = "Employee already exist";
         }
      }  

     if($msg=='') {
         if (isset($_GET['id']) && $_GET['id']!='') {
               mysqli_query($con,"UPDATE employee SET categories_id='$categories_id',name='$name',mrp='$mrp',price='$price',qty='$qty',short_desc='$short_desc',description='$description',meta_title='$meta_title',meta_desc='$meta_desc',meta_keyword='$meta_keyword' where id='$id'");*/
         }else{
               mysqli_query($con,"INSERT into product(categories_id,name,mrp,price) Values('$categories_id','$name','$mrp','$price')"); 

            }
         header('location: product.php');
         die();
     }
}
?>
   <div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Employee</strong><small> Form</small></div>
                        <form method="post">
                           <div class="card-body card-block">
                           <div class="form-group">
                              <label for="categories" class=" form-control-label">Location</label>
                              <select class="form-control" name="location_id">
                                 <option>Select Location</option>
                                 <?php
                                    $res=mysqli_query($con,"SELECT id, location FROM location order by location desc");
                                    while($row=mysqli_fetch_assoc($res)){
                                       echo "<option value=".$row['id'].">".$row['location']."</option>";
                                    }
                                 ?>
                              </select>
                           </div>
                           <div class="form-group">
                              <label for="employee" class=" form-control-label">Employee Name</label><input type="text" id="employee" name="name" placeholder="Enter Employee Name" class="form-control" required value="<?php echo $name ?>">
                           </div>

                           <div class="form-group">
                              <label for="post" class=" form-control-label">Post</label><input type="text" id="categories" name="post" placeholder="Enter Employee post" class="form-control" required value="<?php echo $post ?>">
                           </div>

                           <div class="form-group">
                              <label for="salary" class=" form-control-label">Salary</label><input type="text" id="salary" name="salary" placeholder="Enter Employee Salary" class="form-control" required value="<?php echo $salary ?>">
                           </div>

                           <div class="form-group">
                              <label for="id_card" class=" form-control-label">Id-Card</label><input type="text" id="id_card" name="id_card" placeholder="Enter Employee card" class="form-control" required value="<?php echo $id_card ?>">
                           </div>
                           <button id="payment-button" type="submit" name="submit" class="btn btn-lg btn-info btn-block">
                           <span id="payment-button-amount">Submit</span>
                           </button>
                           <div class="field_error"><?php echo $msg;?></div>
                        </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
<?php
 require('footer.inc.php');
?>