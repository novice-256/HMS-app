<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://use.fontawesome.com/cb7df9e51e.js"></script>

   
 
    <?php
    Include("slice/link.php");
    $admin&&header("Location: error401.php");
    $doctor&&header("Location: error401.php");

    $header_link= 'add_appoint';
    $header_btn_text='New Appointment';
?>
</head>

<?php 
  Include("connection.php");
$doctorId = $_GET['id'];
   $query = mysqli_query($con,"select * from doctor where id ='$doctorId'");
   $get_items = mysqli_fetch_array($query);


     if (isset($_POST['btn']))
{
  $email = $_POST['email'];
  
  $query_user = mysqli_query($con,"select * from user where email ='$email'");  
  $get_user_items = mysqli_fetch_array($query_user);
  
  
  
  
  $doctorSpecialization = $get_items['specilization'];
  $doctorId = $doctorId;
  $userId = $get_user_items['id'];
  $consultancyFees = $get_items['docFees'];
  $appointmentDate = $_POST['appointmentDate'];
  $appointmentTime = $_POST['appointmentTime'];
  $query_user_appoint = mysqli_query($con,"select userId from appointment where  userId ='$userId'");
  if(mysqli_num_rows($query_user_appoint )===0 && mysqli_num_rows($query_user)>0 ){
            $query =mysqli_query($con, "insert into appointment (doctorSpecialization,doctorId,userId,consultancyFees,
            appointmentDate,appointmentTime)values('$doctorSpecialization','$doctorId','$userId','$consultancyFees','$appointmentDate','$appointmentTime')");
             
            echo '<script> alert("','spec:',$doctorSpecialization,'id:',$doctorId,$userId,'fee:',$consultancyFees,'date:',$appointmentDate,'time:',$appointmentTime,'")</script>';
        
  }
  else if( mysqli_num_rows( $query_user_appoint)>0 ){
    echo '<script> alert("User already have active appointment")</script>';
  }             
  else{
      echo '<script> alert("Some thing went wrong")</script>';
  }
}
 ?>
    <style>

    </style>
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
    <div class="mid_wrap  row col-12  ">
    <nav class="nav">
  <a class="nav-link" href="Appointment">Appointment</a>
  <a class="nav-link" href="#">|</a>

  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Book Appointment</a>
</nav>
    <div class=" w-100 m-2  ">
     
     <div class="content-wrapper d-flex justify-content-center" >
       <div class="bg-light border-cus">
         <div class=" col-12  ">
           
                <br>
                <br>

                

<div class="d-flex align-items-center border "><div>
            <img class="  " width=150 height=150 src="https://www.clipartmax.com/png/full/136-1364507_we-do-electronic-rx-doctor-avatar-icon.png" alt="We Do Electronic Rx - Doctor Avatar Icon @clipartmax.com">
            </div>
            <div>
             <p class="text-capitalize ">  <b class="text-info" >Name:</b>  Dr. <?php echo $get_items['docName']; ?></p>
              <p class="text-capitalize "> <b class="text-info" >Speciality:</b> <?php echo $get_items['specilization']; ?></p>
              <p class="text-capitalize "> <b class="text-info" >contact no:</b> <?php echo $get_items['contactno']; ?></p>
               
            </div>  
            </div>
               <form method="POST"  class="form-group  col-12">
 <legend class="text-capitaliz text-center mt-2"> Please Enter Details </legend>
           <!-- values('$specilization','$','','$docFees','$','$','$','$')"; -->
                        
                       
                        
                         <div class="form-outline flex-fill mb-4">  
                        <input type="text" class="form-control" name="email"  placeholder="enter your email">
                         </div> 
                         <div class="form-outline flex-fill mb-4">  
                     <label for="appointmentDate">Select Day</label>   <input type="date" class="form-control" 
                     name="appointmentDate"  placeholder="appointment Date" >
                         </div> 
                         <label for="appointmentTime">Select Time</label>
                         <div class="form-outline flex-fill mb-4">  
                        <input type="time" class="form-control"name="appointmentTime"  placeholder="appointment Time">
                         </div> 
                <button class="btn btn-outline-cus" name='btn' type="submit">Confirm</button>
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
actual_active=='appoint_form'?actual_active='appointment':alert('nav error')


document.getElementById(actual_active).classList.add("nav_active")

  



    

</script>
</body>

</html>