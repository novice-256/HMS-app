<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://use.fontawesome.com/cb7df9e51e.js"></script>

   
      <!-- Links slice  -->

      <?php
    Include("slice/link.php");
    $header_link= 'edit_doc';
    $header_btn_text='Edit Doctor';
?>
</head>
<?php
    
    $id =$_GET['id'];
    $view_doc= mysqli_query($con,"select * from doctor where id ='$id'");
    $show_doc = mysqli_fetch_array($view_doc);
  
    ?> 
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
  $room_id = mysqli_escape_string($con,$_POST['roomNo']);

  $doctor&& $password = mysqli_escape_string($con,$_POST['password']);

  $doctor&& $encPass =password_hash($password,PASSWORD_BCRYPT);


  $compareQuery = mysqli_query($con,"select * from doctor where docEmail ='$docEmail'");


  $check = mysqli_num_rows($compareQuery);
    if($check >= 2)
    {
       echo '<script> alert("Email Already Taken")</script>'; 
    }
    else
      {
       if($password)
          {
            $role =$role ;
                    
            $admin&&  $query ="UPDATE doctor SET specilization ='$specilization',docName ='$docName',
              docFees ='$docFees',contactno ='$contactno',docEmail ='$docEmail',
              room_id='$room_id' WHERE id = '$id' ";
            $doctor&&   $query ="UPDATE doctor SET specilization ='$specilization',docName ='$docName',
               docFees ='$docFees',contactno ='$contactno',docEmail ='$docEmail',password ='$encPass',
               room_id='$room_id' WHERE id = '$id' ";
              if (mysqli_query($con, $query)) 
              { 
                 $success="Successful";
                 header("Location:employee");
 
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

  ?> <section class="container-fluid upper_sec bg-cus-2 m-0 p-0 border-right " >
    <div class="layer_border border-left" >

    
  <!-- Header slice  -->
  <?php
  Include('slice/header.php');

  ?>    <div class="mid_wrap row col-12  ">
    <nav class="nav">
<a class="nav-link" href="Employee.php">Employee</a>
  <a class="nav-link" href="#">|</a>

  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Edit Doctor</a>
</nav>

<!-- update PHP code  -->

    <!-- update PHP code end  -->
    <div class=" w-100 m-2  ">
     
     <div class="content-wrapper  d-flex align-items-center ">
       <div class="card col-lg-4  border-cus mx-auto">
         <div class="card-body  ">
           <h3 class="card-title border-cus-low text-left text-light bg-cus p-3 text-center">Update doctor Information</h3>
           <form method="POST"  class=" form-group-lg p-2 col-sm-12 col-lg-8 col-md-12 ">
                <br>
                <br>

           <div class="form-outline flex-fill mb-4">  
           <!-- values('$specilization','$','','$docFees','$','$','$','$')"; -->

                   <input type="text" class="form-control" name="docName"  value="<?php echo $show_doc['docName']?> "required placeholder="Enter your name">
                       </div>
                       <div class="form-outline flex-fill mb-4">  

                   <input type="text" class="form-control" name="docEmail" required value="<?php echo $show_doc['docEmail'] ?>"  placeholder="example@example.com">
                   </div>
                   <?php if($doctor){?>
                   <div class="form-outline flex-fill mb-4">  
                   <input type="password" class="form-control" name="password" required value="<?php echo $show_doc['password'] ?>" placeholder="Enter your Phone Number">
                   </div> <?php } ?>
                   <div class="form-outline flex-fill mb-4">  

                   <input type="text" class="form-control" name="contactno" required value="<?php echo $show_doc['contactno'] ?>" placeholder="Enter Contact" >
                   </div>
                       <div class="form-outline flex-fill mb-4">  
                   <input type="text" class="form-control" name="docFees" required value="<?php echo $show_doc['docFees'] ?>" placeholder="Must contain atleast 8 characters" minlength="2">
                       </div>
                       <div class="form-outline flex-fill mb-4">  
                   <input type=" text" class="form-control" name="address" required value="<?php echo $show_doc['address'] ?>" placeholder="Enter your Phone Number">
                   </div>
                   
                  
                  
             
  <!-- <option selected>--Select Department ---</option> -->
  <?php
    
    $view = mysqli_query($con, "select * from doctorspecilization");
    $show = mysqli_fetch_array($view)
    ?> 
     <select  name="specilization" class="form-select form-control form-select-lg mb-3" aria-label=".form-select-lg example">
       <?php
       
       while($show = mysqli_fetch_array($view))
       {           
            ?>
  <option value="<?php echo $show['specilization']; ?>" ><?php echo $show['specilization']; ?></option>
<?php
        }
          
           ?>
</select>

  <!-- <option selected>--Select Rooms ---</option> -->
  <?php
    
    $view_room= mysqli_query($con, "select * from room");
    // $show_room = mysqli_fetch_array($view_room)
    ?> 
     <select  name="roomNo" class="form-select form-control form-select-lg mb-3" aria-label=".form-select-lg example">
       <?php
       
       while($show_room = mysqli_fetch_array($view_room))
       {           
            ?>
  <option value="<?php echo $show_room['id']; ?>" ><?php echo $show_room['roomNo']; ?></option>
<?php
        }
          
           ?>
</select>

                  
                    </div>
                    <div class="form-outline flex-fill align-self-center mb-4">  

                   <input type="submit" class="  btn btn-group btn-lg btn-primary pl-4 pr-4" name="btn"
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


  



    

</script>
</body>

</html>