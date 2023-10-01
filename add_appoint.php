<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://use.fontawesome.com/cb7df9e51e.js"></script>

   
                           <!-- Links slice  -->

    <?php
    Include("slice/link.php");
    $header_link= 'add_appoint';
    $header_btn_text='New Appointment';
    $admin&&header("Location: error401.php");
    $doctor&&header("Location: error401.php");

?>
</head>

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
     
     <div class="content-wrapper d-flex   align-items-center" >
       <div class="bg-light border-cus ">
         <div class=" col-12   ">
           
                <br>
                <br>

         
           <!-- values('$specilization','$','','$docFees','$','$','$','$')"; -->
  <?php
        Include("connection.php");
    $i=0;
       $view = mysqli_query($con, "select * from doctor");
     
       while($show = mysqli_fetch_array($view))
       {  
         ?><form method="POST"  class="row ">
           <div class="card m-2 col-3" style="width: 18rem;">
           <img class="  " width=150 height=150 src="https://www.clipartmax.com/png/full/136-1364507_we-do-electronic-rx-doctor-avatar-icon.png" alt="We Do Electronic Rx - Doctor Avatar Icon @clipartmax.com">
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text">
    
<span>Nme: Dr. <?php echo $show['docName']?></span>    </p>
<p class="card-text">
<span>Fee: Rs. <?php echo $show['docFees']?></span>    </p>
<p class="card-text">
<span>Speciality: <?php echo $show['specilization']?></span>    </p>
    <a href="appoint_form?id=<?php echo $show['id']?>"  name="btn" class="btn btn-primary">Appoint Doctor</a>

  </div>
</div>

    <?php  
  $i++;
  if($i%3==0){ echo '<br>'; }

  } 
  // echo $_GET['id'];

  ?>
                      
 
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


actual_active=='add_appoint'?actual_active='appointment':alert('nav error')
document.getElementById(actual_active).classList.add("nav_active")
    

</script>
</body>

</html>