<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://use.fontawesome.com/cb7df9e51e.js"></script>

   
                         <!-- Links slice  -->

    <?php
    Include("slice/link.php");
    $header_link= 'add_doctor';
    $header_btn_text='Add Doctor';
?>
</head>
</head>

<?php 
     Include("connection.php");
     if (isset ($_POST['btn']))
{
  $specilization =mysqli_escape_string($con,$_POST['specilization']);
  $docName = mysqli_escape_string($con,$_POST['docName']);
  $address = mysqli_escape_string($con,$_POST['address']);
  $docFees = mysqli_escape_string($con,$_POST['docFees']);
  $contactno = mysqli_escape_string($con,$_POST['contactno']);
  $docEmail = mysqli_escape_string($con,$_POST['docEmail']);
  $password = $_POST['password'];
  $encPass =password_hash($password,PASSWORD_BCRYPT);
  $set_role ='doctor';
  

  $compareQuery = mysqli_query($con,"select * from $set_role where docEmail ='$docEmail'");


  $check = mysqli_num_rows($compareQuery);
    if($check >= 1)
    {
       echo '<script> alert("Email Already Taken")</script>'; 
    }
    else
      {
       if($password)
          {
            $role =$set_role ;
              $query = "insert into $role (specilization,docName,address,docFees,contactno ,docEmail,password,role)
                                 values('$specilization','$docName','$address','$docFees','$contactno','$docEmail','$encPass','$set_role')";
  
              if (mysqli_query($con, $query)) 
              { 
                 $success="Successful";
                 header("Refresh:1;URL=Add_Doctor");
 
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

<body class=" m-0 " >
<div class="container-fluid d-flex main m-0 p-3"    > 
                    <!-- Navigation slice  -->
   <?php
  Include('slice/nav.php');

  ?>

 <section class="container-fluid upper_sec bg-cus-2 m-0 p-0 border-right " >
    <div class="layer_border border-left" >

    
  <!-- Header slice  -->
  <?php
  Include('slice/header.php');

  ?>
    
    <div class="mid_wrap row col-12  ">
    <nav class="nav">
<a class="nav-link" href="Employee">Employee</a>
  <a class="nav-link" href="#">|</a>

  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Add Doctor</a>
</nav>

    <div class=" w-100 m-2  ">
     
     <div class="content-wrapper  d-flex align-items-center ">
       <div class="card col-lg-12  border-cus mx-auto">
         <div class="card-body  ">
           <h3 class="card-title text-left text-light bg-cus p-3 text-center">Add doctor</h3>
           <form method="POST"  class=" form-group-lg p-2 col-sm-12 col-lg-8 col-md-12 ">
                <br>
                <br>

           <div class="form-outline flex-fill mb-4">  
           <!-- values('$specilization','$','','$docFees','$','$','$','$')"; -->

                   <input type=" text" class="form-control" name="docName"  value="<?php if(isset($_POST['btn'])){echo $_POST['docName'];} ?>" 
                   required placeholder="Enter your name">
                       </div>
                       <div class="form-outline flex-fill mb-4">  

                   <input type=" text" class="form-control" name="docEmail" required value="<?php if(isset($_POST['btn'])){
                   echo $_POST['docEmail'];} ?>"  placeholder="example@example.com">
                   </div>
                   <div class="form-outline flex-fill mb-4">  

                   <input type="password" class="form-control" name="password" required value="<?php if(isset($_POST['btn'])){
                     echo $_POST['password'];} ?>" placeholder="Must contain atleast 8 characters" minlength="8">
                   </div>
                       <div class="form-outline flex-fill mb-4">  
                   <input type="number" class="form-control" name="docFees" required value="<?php if(isset($_POST['btn'])){
                   echo $_POST['docFees'];} ?>" placeholder="Checkup Charges" minlength="2">
                       </div>
                       <div class="form-outline flex-fill mb-4">  
                   <input type=" text" class="form-control" name="address" required value="<?php if(isset($_POST['btn'])){
                   echo $_POST['address'];} ?>" placeholder="Enter your address">
                   </div>
                   <div class="form-outline flex-fill mb-4">  
                   <input type=" number" class="form-control" name="contactno" required value="<?php if(isset($_POST['btn'])){
                   echo $_POST['contactno'];} ?>" placeholder="Enter your Phone Number">
                   </div>
                  
             
  <?php
    
    $view = mysqli_query($con, "select * from doctorspecilization");
    $show = mysqli_fetch_array($view)
    ?> 
     <select  name="specilization" class="form-select form-control form-select-lg mb-3" aria-label=".form-select-lg example" required>
     <option value="">---Select Department---</option>

       <?php
       
       while($show = mysqli_fetch_array($view))
       {           
            ?>
  <option value="<?php echo $show['specilization']; ?>" ><?php echo $show['specilization']; ?></option>
<?php
        }
          
           ?>
</select>
                  
                    </div>
                    <div class="form-outline flex-fill align-self-center mb-4">  

                   <input type="submit" class="  btn btn-group btn-lg btn-outline-cus pl-4 pr-4" name="btn"
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
    
   
    </div>

</section>

</div>
                        <!-- JS Links slice  -->

<?php
    Include("slice/script.php")
?>
<script>
  
  actual_active.toLowerCase() 
actual_active=='add_doctor'?actual_active='employee':alert('nav error')
document.getElementById(actual_active).classList.add("nav_active")
</script>
</body>

</html>