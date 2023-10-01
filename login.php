<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HMS Login</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.base.css">

    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="./assets/images/favicon.png" />
  </head>
  <body>
 <?php 
     Include("connection.php");
     session_start();
     if(!empty($_SESSION['role'])){
      header("Location:dashboard");}
      else if (isset($_POST['btn']))
{
$inpemail = mysqli_escape_string($con,$_POST['email']);
$inppswd = mysqli_escape_string($con,$_POST['password']);
$emailquery_admin = mysqli_query($con,"select * from admin where email = '$inpemail' ");
$emailquery_doctor = mysqli_query($con,"select * from doctor where docEmail = '$inpemail' ");
$emailquery_user = mysqli_query($con,"select * from user where email = '$inpemail' ");



if(mysqli_num_rows($emailquery_admin)>0||mysqli_num_rows($emailquery_doctor)>0||mysqli_num_rows($emailquery_user)>0){
  

 

  $auth_admin = mysqli_fetch_array( $emailquery_admin);
  
    if(empty($auth_admin['role'])){
      $auth_doctor = mysqli_fetch_array( $emailquery_doctor);
      $auth_user = mysqli_fetch_array( $emailquery_user);
      
      !empty($auth_doctor['password'])?$hash_pass= $auth_doctor['password']:$hash_pass = $auth_user['password'];

      !empty($auth_doctor['role'])?$data= array($auth_doctor['role'],$auth_doctor['id']):$data= array($auth_user['role'],$auth_user['id']);
// $role=$auth_user['role'];

          if(password_verify($inppswd,$hash_pass)){
          
              $_SESSION['role']=$data;
              // $_SESSION['id']=$role;

              $_SESSION['test']='test2';

              // $_SESSION['doctor']=$auth_user['role'];
              echo $msg_success= 'Succussfull Login.';
            header("Location:dashboard");
            echo $auth_doctor['role'];
              echo $auth_doctor['docName'];
              
            }else{
              $msgpass = 'Wrong Password';}

    }else{
      if($auth_admin['role']==='admin' && $inppswd===$auth_admin['password']) {
        $data= array($auth_admin['role'],$auth_admin['id']);
        session_start();
        $_SESSION['role']= $data;
        header("Location:dashboard");

        }else{
    $msgemail = 'Email Does not Exist';}
      }
  }else{
    $msgemail = 'Email Does not Exist';}
}

?>

    <div class="container-fluid">  <div class="d-flex- float-right"  > 
     
        
     <ul class="nav nav-tabs m-2">
<li class="nav-item">

 <a href="register">
     <button   class="btn btn-lg m-2  btn-primary" type="button">Sign Up</button>
     </a>
</li>

<li class="nav-item">
<a href="login">
     <button disabled  class="btn  btn btn-lg m-2 btn-primary" type="button">Login</button>
     </a>
</li>

</ul>
   </div>
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
     
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Login</h3>
               

                    <form method="POST"  class="form-group-lg col-sm-12 col-lg-8 col-md-10">

<label>Email Address</label>
<br>
<?php
    if(!empty($msgemail)){?>
<strong class="text-danger" >* <?php error_reporting(0); echo $msgemail;  }?> </strong> 
<div class="form-outline flex-fill mb-4">  
<input type="email" id="form3Example1c " value="<?php if(isset($_POST['btn'])){
echo $_POST['email'];} ?>" class="form-control" name="email" placeholder="example@example.com" required>
</div>

<label>Password</label>
<br>
<?php
    if(!empty($msgpass)){?>
<strong class="text-danger">* <?php error_reporting(0); echo $msgpass;  }?> </strong> 

<div class="form-outline flex-fill mb-4">  

<input type=" password" class="form-control" name="password" required placeholder="Password">
</div><input type="submit" class="btn btn-group-lg btn-primary mt-3 " name="btn"
    value="Login" >
    <br>
<?php error_reporting(0); if(!empty($msg_successs)){?>
<strong class="alert alert-success " ><span class="spinner-border-sm spinner-border text-dark "></span>
<?php  echo $msg_success; }?> </strong> 

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
    here is session
 <?php echo $_SESSION['role']?>
  </body>
</html>