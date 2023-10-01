<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://use.fontawesome.com/cb7df9e51e.js"></script>

   
    <?php
    Include("slice/link.php");
    $admin&&$header_link= 'add_patient';
    $admin&&$header_btn_text='Add Patient'; 
    $user&& $header_link= 'add_appoint';
    $user&& $header_btn_text='New Appointment';
    $doctor&&  $header_link= 'edit_doc';
    $doctor&& $header_btn_text='Edit Profile';
    Include("connection.php");
    $user && $email= $auth_user['email'];
    $doctor && $view = mysqli_query($con, "select * from appointment where doctorId = $id");
    $user && $view = mysqli_query($con, "select * from appointment where userId = '$id'");
 
 
    ?>
    


</head>

    
 <?php 
     Include("connection.php");
     if (isset($_POST['btn']))
{
$specilization = mysqli_escape_string($con,$_POST['specilization']);
$specilizationquery = mysqli_query($con,"select * from doctorspecilization where specilization = '$specilization' ");
if(mysqli_num_rows($specilizationquery)===0)
{
  $query = "insert into doctorspecilization (specilization)values('$specilization')";
if (mysqli_query($con, $query)) 
              { 
                 $success="Successful";
                 header("Refresh:1;URL=department");
 
              }
              else
              {
                 echo '<script> alert("Problem in Adding")</script>'; 
 
              }

}
else{

    $msgemail = 'Department already Exist';


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

    <?php
    
   $admin&& $view = mysqli_query($con, "select * from appointment");
   $admin&&$show = mysqli_fetch_array($view)
    ?>
     <!-- Header slice  -->
  <?php
  Include('slice/header.php');

  ?> 
    <div class="mid_wrap row col-12  ">
      
    

  
  
   <table class="table border-cus table-hover" style="max-height:800px;overflow-y:auto">

        <tbody class="">
        <tr class="sticky_table bg-cus">          
        <th>Doctor Specialization</th>
        <th>Doctor Id</th>
        <th>User Id</th>
        <th>Fees</th>
        <th>Date</th>
        <th>Time</th>
        <th>Admin approval</th>
        <th>Doctor approval</th>
        <th>Action</th>

   
    </tr>
       
        <?php
       
    
      
   
        while($show = mysqli_fetch_array($view))
        {    
       
             ?>
            <tr class=" table-light text-dark">
            <td ><?php echo $show['doctorSpecialization']; ?></td>
            <td ><?php echo $show['doctorId']; ?></td>
            <td ><?php echo $show['userId']; ?></td>
            <td ><?php echo $show['consultancyFees']; ?></td>
            <td ><?php echo $show['appointmentDate']; ?></td>
            <td ><?php echo $show['appointmentTime']; ?></td>
      
            <?php if($show['userStatus']){echo
          '  <td class="text-success text-center"><i class="fa-solid fa-check"></i></td>';}else{echo '<td class="text-warning text-center"><i class="fa-solid fa-xmark"></i></td>';} ?>
            <?php if($show['doctorStatus']){echo
          '  <td class="text-success text-center"><i class="fa-solid fa-check"></i></td>';}else{echo '<td class="text-warning text-center"><i class="fa-solid fa-xmark"></i></td>';} ?>




            <td class="d-flex border-bottom" >
            <?php  if($admin || $doctor) {    ?> 
            <a href="edit_appoint?id=<?php echo $show['id']?>">
            <i class="fa-solid fa-pen-to-square text-primary "></i></i> </a> 
            <?php  }    ?> 
            <?php  if($admin || $user) {    ?> 
           <a href="del_appoint?id=<?php echo $show['id']?>">
            <i class="fa-solid fa-trash-can text-danger"></i></a>
            <?php  }    ?> 
          </td>
            </tr>
            <?php
        }
       
           ?>     
            
        </tbody>
    </table>

    <?php
    $doctor && $view = mysqli_query($con, "select * from tblpatient where Docid = $id");
    $user && $view = mysqli_query($con, "select * from tblpatient where PatientEmail = '$email'");
    $admin && $view = mysqli_query($con, "select * from tblpatient ");

    $show = mysqli_fetch_array($view);
if(empty($show['ID'])){
  
   ?>  
<div class="d-flex align-items-center justify-content-center bg-transparent border-0 m-0 p-0 " style="height:800px;width:100%">
 <b class="text-muted mb-4">No data available </b>
</div>

<?php
}
?>  
    
    </div>
    
   
    </div>

</section>

</div>
<?php
    Include("slice/script.php")
?>
<script>

</script>
</body>

</html>