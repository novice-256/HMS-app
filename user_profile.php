<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://use.fontawesome.com/cb7df9e51e.js"></script>

   
             <!-- Links slice  -->

             <?php
    Include("slice/link.php");
    $admin&&  $header_link= 'add_patient';
    $admin&& $header_btn_text='Add Patient';
    $user&& $header_link= 'add_appoint';
    $user&& $header_btn_text='New Appointment';
    $doctor&&  $header_link= 'edit_doctor';
    $doctor&& $header_btn_text='Edit Profile';
?>
</head>

<?php
    Include("connection.php");
    $user && $email= $auth_user['email'];
    $user && $view = mysqli_query($con, "select * from user where id = '$id'");
 
 
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

  ?>    <div class="mid_wrap row col-12  ">
      
   

<?php  if($user) { 
      $show = mysqli_fetch_array($view)
      ?> 
<h1 class="h1 text-center w-100 bg-cus mt-2 pt-2 pb-2">User Profile</h1>
    <table class="table table-hover border border-dark text-right card p-4  doc-profile  " style="max-height:800px;overflow-y:auto">
<tbody class="m-4 p-2 border">
  <tr class=" " ><th class="th" >Personal Information</th></tr></tbody>
  <tbody class="m-4  ">

<tr ><td >Id:</td> <td ><?php echo $show['id']; ?></td></tr> 
<tr ><td >Name:</td>   <td >Dr.<?php echo $show['fullName']; ?></td></tr>
<tr> <td>city:</td>  <td ><?php echo $show['city']; ?></td></tr>
<tr><td>gender:</td>   <td ><?php echo $show['gender']; ?></td></tr>


<tr> <td>Email:</td>  <td ><?php echo $show['email']; ?></td></tr>

<tr><td>Address:</td> <td ><?php echo $show['address']; ?></td></tr>



<tr> <td>regDate:</td>  <td ><?php echo  $show['regDate']; ?></td></tr>
<tr> <td>role:</td>  <td ><?php echo $show['role']; ?></td></tr>


   
</tbody>
</table>
<?php  }
?> 
