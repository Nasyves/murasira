<?php
require('top.inc.php');
$location='';
$msg='';
if (isset($_GET['id']) && $_GET['id']!='') {
   $id=get_safe_value($con,$_GET['id']);
   $res=mysqli_query($con,"SELECT * from location where id='$id'");
   $check=mysqli_num_rows($res);
   if($check>0){
      $row=mysqli_fetch_assoc($res);
      $location=$row['location'];
   }else{
      header('location: location.php');
      die();
   }
}

if(isset($_POST['submit'])){
   $location=get_safe_value($con,$_POST['location']);
      $res=mysqli_query($con,"SELECT * from location where location='$location'");
      $check=mysqli_num_rows($res);
      if ($check>0) {
         if (isset($_GET['id']) && $_GET['id']!='') {
            $get_data=mysqli_fetch_assoc($res);
            if ($id==$get_data['id']) {
             
         }else{
            $msg = "Location already exist";
            }   
         }else{
            $msg = "Location already exist";
         }
      }

     if($msg=='') {
         if (isset($_GET['id']) && $_GET['id']!='') {
               mysqli_query($con,"UPDATE location SET location='$location' where id='$id'");
         }else{
               mysqli_query($con,"INSERT into location(location,status) Values('$location','1')"); 
            }
         header('location: location.php');
         die();
     }
}
?>
   <div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Location</strong><small> Form</small></div>
                        <form method="post">
                           <div class="card-body card-block">
                           <div class="form-group">
                              <label for="location" class=" form-control-label">Location</label><input type="text" id="location" name="location" placeholder="Enter Location Name" class="form-control" required value="<?php echo $location ?>">
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