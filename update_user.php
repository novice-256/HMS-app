<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.base.css">

    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="./assets/images/favicon.png" />
  </head>
  <body>
 <?php 
     Include("connection.php");
     $id= $_GET['id'];
     $view_user= mysqli_query($con,"select * from user where id ='$id'");
     $show_user = mysqli_fetch_array($view_user);
   

     if (isset ($_POST['btn']))
{
  $name =mysqli_escape_string($con,$_POST['name']);
  $address = mysqli_escape_string($con,$_POST['address']);
  $city = mysqli_escape_string($con,$_POST['city']);
  $gender = mysqli_escape_string($con,$_POST['gender']);
  $email = mysqli_escape_string($con,$_POST['email']);
  $password = mysqli_escape_string($con,$_POST['password']);
  $confpassword = $_POST['confpassword'];
  $encPass =password_hash($password,PASSWORD_BCRYPT);
  $set_role ='user';
  

  $compareQuery = mysqli_query($con,"select * from $set_role where Email ='$email'");


  $check = mysqli_num_rows($compareQuery);
    if($check > 1)
    {
       echo '<script> alert("Email Already Taken")</script>'; 
    }
    else
      {
       if($password === $confpassword)
          {
            $role =$set_role ;
          $query ="UPDATE user SET fullName ='$name',address ='$address',
               city ='$city',gender ='$gender',email ='$email',password ='$encPass',role='$role'
              WHERE id = '$id' ";
  
              if (mysqli_query($con, $query)) 
              { 
                 $success="Successful";
                 header("Refresh:1;URL=login");
 
              }
              else
              {
                 echo '<script> alert("Problem in Registration")</script>'; 
 
              }
         }
         else
         {
             echo '<script> alert("Password Dont match")</script>'; 
 
 
         }
     }
 }
 
 ?>
  


    
  
  <div class="container-fluid">  <div class="d-flex- float-right"  > 
     
        
     <ul class="nav nav-tabs m-2">
<li class="nav-item">

 <a href="Register">
 <button  disabled class="btn btn-lg m-2  btn-primary" type="button">Sign Up</button>
     </a>
</li>

<li class="nav-item">
<a href="login">
     <button  class="btn  btn btn-lg m-2 btn-primary" type="button">Login</button>
     </a>
</li>

</ul>
   </div>
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
     
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-md-8 col-sm-12 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Update User</h3>
                <form method="POST"  class="form-group ">
                     
                <div class="form-outline flex-fill mb-4">  

                        <input type="text" class="form-control" name="name"  value="<?php echo $show_user['fullName'] ?>" required placeholder="Enter your name">
                            </div>
                            <div class="form-outline flex-fill mb-4">  

                        <input type=" text" class="form-control" name="email" required value="<?php echo $show_user['email'] ?>" placeholder="example@example.com">
                        </div>
                        <div class="form-outline flex-fill mb-4">  

                        <input type="password" class="form-control" name="password" required value="<?php echo $show_user['password'] ?>"  
                            placeholder="Must contain atleast 8 characters" minlength="8">
                        </div>
                            <div class="form-outline flex-fill mb-4">  
                        <input type=" password" class="form-control" name="confpassword" required
                            placeholder="Re-enter Password" minlength="8">
                            </div>
                            <div class="form-outline flex-fill mb-4">  
                        <input type=" number" class="form-control" name="number" required value="<?php echo $show_user['address'] ?>"  placeholder="Enter your Phone Number">
                        </div>
                       <div class="form-outline flex-fill mb-4">  
                        <input type="text" class=" form-control"name="city"  placeholder="Enter city" value="<?php echo $show_user['city'] ?>" >
                         </div>
                         <fieldset class="mb-3 border">
    <legend class="col-form-label col-sm-4 pt-0 ">Select Gender</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="male" checked>
        <label class="form-check-label" for="gridRadios1">
         Male
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="female">
        <label class="form-check-label" for="gridRadios2">
       Female
        </label>
      </div>
     
    </div>
  </fieldset>
  <div class="form-outline flex-fill mb-4">  
                        <input type="text" class=" form-control"name="address"  placeholder="Address" value="<?php
                            echo $show_user['address']; ?>" >
                         </div>
                       
                         </div>
                         <div class="form-outline flex-fill align-self-center mb-4">  

                        <input type="submit" class="  btn btn-group btn-lg btn-primary pl-4 pr-4  mt-3 " name="btn"
                            value="Submit"> </div>
                            <?php
                            if(isset($_POST['btn'])){?>
                            <br>
                            <br>
    <strong class=" alert alert-success"> <?php echo $success;}?></strong> 
      
                    </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>