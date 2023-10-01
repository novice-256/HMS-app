<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://use.fontawesome.com/cb7df9e51e.js"></script>

   
     <!-- Links slice  -->

     <?php
    Include("slice/link.php");
    $admin&&$header_link= 'edit_appoint';
    $admin&&$header_btn_text='Edit Appoint';
   
    $user&& $header_link= 'add_appoint';
    $user&& $header_btn_text='New Appointment';
    $doctor&&  $header_link= 'edit_doctor';
    $doctor&& $header_btn_text='Edit Profile';
    $user&&header("Location: error401.php");
  
?>
</head>

    
 <?php 
Include("connection.php");
  $get_id = $_GET['id']; 

     if (isset($_POST['btn']))
{
   
    $userStatus  = $_POST['userStatus']; 
    $doctorStatus  = $_POST['doctorStatus']; 
    
$admin&& $query = "UPDATE appointment SET userStatus='$userStatus' where id ='$get_id' " ;
 $doctor &&$query = "UPDATE appointment SET doctorStatus='$doctorStatus' where id ='$get_id' " ;

if (mysqli_query($con, $query)) 
              { 
                 $success="Successful";
                 header("Refresh:0;URL=appointment");
 
              }
              else
              {
                 echo '<script> alert("Problem in update")</script>'; 
 
              }

}


?>
<script> 

</script>
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
<a class="nav-link" href="Employee.php">Employee</a>
  <a class="nav-link" href="#">|</a>

  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Add Doctor</a>
</nav>
 
<?php
    
    $admin && $view = mysqli_query($con, "select * from appointment");
    $doctor && $view = mysqli_query($con, "select * from appointment where doctorId = $id");

    ?>  
   <table class="table border-cus table-hover " style="max-height:800px;overflow-y:auto">

        <tbody class="">
        <tr class="sticky_table bg-cus">          
        <th>Doctor Specialization</th>
        <th>Doctor Id</th>
        <th>User Id</th>
        <th>Fees</th>
        <th>Date</th>
        <th>Time</th>
        <th>User Status</th>
        <th>DoctorStatus</th>
     

   
    </tr>
       
        <?php

    //  $id =$_GET ['id'];
     $view_status= mysqli_query($con,"select userStatus from appointment where id ='$get_id'");
     $show_appoint= mysqli_fetch_array($view_status) ;
     
        while($show = mysqli_fetch_array($view))
        {    
          // $_id=$show[0['id']];   
          //  $get_status= mysqli_query($con,"select pat_status from tblpatient where pat_status = 0 AND Docid ='$_id'");
       
             ?>
            <tr class=" table-light text-dark">
            <td ><?php echo $show['doctorSpecialization']; ?></td>
            <td ><?php echo $show['doctorId']; ?></td>
            <td ><?php echo $show['userId']; ?></td>
            <td ><?php echo $show['consultancyFees']; ?></td>
            <td ><?php echo $show['appointmentDate']; ?></td>
            <td ><?php echo $show['appointmentTime']; ?></td>
      
    <?php if($show['id']===$get_id && $admin){?>
            <td > 
                <form method="POST"> 
                     <select name="userStatus" class="form-select form-control form-select-lg mb-3" aria-label=".form-select-lg example">

<option value="<?php echo $show_appoint['userStatus']?>" ><?php if($show_appoint['userStatus']){echo 'Approved';}else{echo 'Un-Approved';}?></option>
<option value="<?php echo !$show_appoint['userStatus'] ?>" ><?php if($show_appoint['userStatus']){echo 'Un-Approved';}else{echo 'Approved';} ?></option>


</select>
<button name="btn" type="submit" class="btn btn-sm text-reset"  onClick(alert(<?php echo $get_id ?>))> <a   class=" text-primary">Go Back </a> </button>
</form></td >
<?php 
}else{?>
            <?php if($show['userStatus']){echo
          '  <td class="text-success text-center"><i class="fa-solid fa-check"></i></td>';}else{echo '<td class="text-warning text-center"><i class="fa-solid fa-xmark"></i></td>';} ?>

<?php   
    } 
  if($show['id']===$get_id && $doctor){

?>
    <td >
    <form method="POST">
  <select name="doctorStatus" class="form-select form-control form-select-lg mb-3" aria-label=".form-select-lg example">

<option value="<?php echo $show['doctorStatus']?>" ><?php if($show['doctorStatus']){echo 'Approved';}else{echo 'Un-Approved';}?></option>
<option value="<?php echo !$show['doctorStatus'] ?>" ><?php if($show['doctorStatus']){echo 'Un-Approved';}else{echo 'Approved';} ?></option>


</select>
<button name="btn" type="submit" class="btn btn-sm text-reset"  onClick(alert(<?php echo $get_id ?>))> <a   class=" text-primary">Go Back </a> </button>
</form></td >
    <?php
    }else{?>
          
           ?> 
            <?php if($show['doctorStatus']){echo
          '  <td class="text-success text-center"><i class="fa-solid fa-check"></i></td>';}else{echo '<td class="text-warning text-center"><i class="fa-solid fa-xmark"></i></td>';} ?>
            <?php
   }
   
}
          
           ?>       </td >
            
        </tbody>
    </table>

    
    </div>
    
   
    </div>

</section>

</div>
   <!-- JS Links slice  -->

   <?php
    Include("slice/script.php")
?>
<script>
// modal display
  var form_modal = document.getElementById("form-modal");
  var btn_form = document.getElementById("form-butn");
  btn_form.addEventListener("click",function(){form_modal.style.display='block' ;})

</script>
</body>

</html>