<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://use.fontawesome.com/cb7df9e51e.js"></script>

   
   <!-- Links slice  -->

   <?php
    Include("slice/link.php");
    $admin&&  $header_link= 'add_doctor';
    $admin&&$header_btn_text='Add Doctor';
    
    $user&& $header_link= 'add_appoint';
    $user&& $header_btn_text='New Appointment';
    $doctor&&  $header_link= 'edit_doc';
    $doctor&& $header_btn_text='Edit Profile';

?>
</head>

<?php
    Include("connection.php")
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
      
    <?php
    
    $view = mysqli_query($con, "select * from doctor");
  
    

    
    
       
    ?>  
    
   <table class="table border-cus table-hover " style="max-height:800px;overflow-y:auto">

        <tbody class="">
        <tr class="sticky_table bg-cus">        <th >Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Department</th>
        <th>Action</th>
    </tr>
    <?php
      while( $admin&& $show = mysqli_fetch_array($view) )
      {  
          
           ?> 
       
            <tr class=" table-light text-dark">
            <td ><?php echo $show['id']; ?></td>
            <td ><?php echo $show['docName']; ?></td>
            <td ><?php echo $show['docEmail']; ?></td>
            <td ><?php echo $show['specilization']; ?></td>

            <td class="d-flex border-bottom" ><a href="edit_doc.php?id=<?php echo $show['id']?>">
            <i class="fa-solid fa-pen-to-square text-primary "></i></i> </a> 
           <a href="del_doc.php?id=<?php echo $show['id']?>">
            <i class="fa-solid fa-trash-can text-danger"></i></a>
            <a href="employee.php?id=<?php echo $show['id']?>">
           
            <i class="fa-solid fa-eye"  data-toggle="modal" data-target="#exampleModal"></i></a>
          </td>
            </tr>
           <?php
        }
          
           ?> 
            
        </tbody>
    </table>

     
    
    <?php  if($doctor) { 
          $doctor && $view = mysqli_query($con, "select * from doctor where id = $id");
          $show_doc = mysqli_fetch_array($view) ;
  
          $get_appoint= mysqli_query($con,"select * from appointment where doctorId ='$id'");
          $get_total= mysqli_query($con,"select count(id) AS NumberOfAppoint from appointment where doctorId ='$id'");
          $get_active= mysqli_query($con,"select count(id) AS NumberOfActive from appointment where doctorId ='$id' AND doctorStatus =1");
          $show_active= mysqli_fetch_array($get_active);
          $show_total= mysqli_fetch_array($get_total);
    
          $show_room_id = $show_doc['room_id'];
          $get_room= mysqli_query($con,"select * from room where id ='$show_room_id'");
          $show_room= mysqli_fetch_array($get_room);
      
      ?> 
<h1 class="h1 text-center w-100 bg-cus mt-2 pt-2 pb-2">Doctor Profile</h1>
    <table class="table table-hover  text-right card p-4  doc-profile  " style="max-height:800px;overflow-y:auto">
<tbody  class="m-4 p-2 border">
  <tr class=" " ><th class="th" >Personal Information</th></tr>

<tr ><td >Id:</td> <td ><?php echo $show_doc['id']; ?></td></tr>
<tr ><td >Name:</td>   <td >Dr.<?php echo $show_doc['docName']; ?></td></tr></tbody>
<tbody  class="m-4 p-2 border">
<tr class=""><th class="th">Profession Details</th></tr>
<tr> <td>Department:</td>  <td ><?php echo $show_doc['specilization']; ?></td></tr>
<tr><td>Fee:</td>   <td ><?php echo $show_doc['docFees']; ?></td></tr>
</tbody>
<tbody  class="m-4 p-2 border">

<tr class=""><th class="th">Contact Details</th></tr>
<tr> <td>Email:</td>  <td ><?php echo $show_doc['docEmail']; ?></td></tr>

<tr> <td>Contact:</td>  <td ><?php echo $show_doc['contactno']; ?></td></tr>
<tr><td>Address:</td> <td ><?php echo $show_doc['address']; ?></td></tr>
</tbody>
<tbody  class="m-4 p-2 border">
<tr class=""><th class="th">Appointments</th></tr>

<tr> <td>Total Appointments:</td>  <td ><?php echo  $show_total['NumberOfAppoint']; ?></td></tr>
<tr> <td>Active Appointments:</td>  <td ><?php echo $show_active['NumberOfActive']; ?></td></tr>
<tr> <td>Assigned Room:</td>  <td ><?php echo !empty($show_room['roomNo'])?$show_room['roomNo']:'No Data'; ?></td></tr>


   
</tbody>
</table>
<?php  }
?> 
    </div>
    
   
    </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable"> 
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Doctor Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  <table class="table border-cus table-hover " style="max-height:800px;overflow-y:auto">

<tbody class="">
<?php  
if($admin) { 
    
    $id =$_GET['id'];
    $get_doc= mysqli_query($con,"select * from doctor where id ='$id'");
    $get_appoint= mysqli_query($con,"select * from appointment where doctorId ='$id'");
    $get_total= mysqli_query($con,"select count(id) AS NumberOfAppoint from appointment where doctorId ='$id'");
    $get_active= mysqli_query($con,"select count(id) AS NumberOfActive from appointment where doctorId ='$id' AND doctorStatus =1");
    
    $show_active= mysqli_fetch_array($get_active);
    $show_total= mysqli_fetch_array($get_total);
    $show_doc= mysqli_fetch_array($get_doc);
    $show_room_id = $show_doc['room_id'];
    $get_room= mysqli_query($con,"select * from room where id ='$show_room_id'");
    $show_room= mysqli_fetch_array($get_room);?>
<tr><th>Id:</th> <td ><?php echo $show_doc['id']; ?></td></tr>
<tr><th>Name:</th>   <td >Dr.<?php echo $show_doc['docName']; ?></td></tr>
<tr> <th>Email:</th>  <td ><?php echo $show_doc['docEmail']; ?></td></tr>
<tr> <th>Department:</th>  <td ><?php echo $show_doc['specilization']; ?></td></tr>
<tr><th>Address:</th> <td ><?php echo $show_doc['address']; ?></td></tr>
<tr><th>Fee:</th>   <td ><?php echo $show_doc['docFees']; ?></td></tr>
<tr> <th>Contact:</th>  <td ><?php echo $show_doc['contactno']; ?></td></tr>
<tr> <th>Total Appointments:</th>  <td ><?php echo  $show_total['NumberOfAppoint']; ?></td></tr>
<tr> <th>Active Appointments:</th>  <td ><?php echo $show_active['NumberOfActive']; ?></td></tr>
<tr> <th>Assigned Room:</th>  <td ><?php echo !empty($show_room['roomNo'])?$show_room['roomNo']:'No Data'; ?></td></tr>

<?php  
} ?>
    <script>
    </script>
</tbody>
</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</section>

</div>
                        <!-- JS Links slice  -->

<?php
    Include("slice/script.php")
?>

<script>
<?php if(!empty($show_doc['id']) && $admin){?>
$(window).on('load', function () {
    $('#exampleModal').modal('show');
})
  
<?php } ?>

    

</script>
</body>

</html>