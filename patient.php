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
    $doctor && $view = mysqli_query($con, "select * from tblpatient where Docid = $id");
    $user && $view = mysqli_query($con, "select * from tblpatient where PatientEmail = '$email'");
 
 
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
    
   $admin&& $view = mysqli_query($con, "select * from tblpatient");

    ?>  
   <table class="table border-cus table-hover " style="max-height:800px;overflow-y:auto">

        <tbody class="">
        <tr class="sticky_table bg-cus">        
        <th>Patient Id</th>
        <th>Patient Name</th>
        <th>Contact</th>
        <th>Status</th>

        <th>Action</th>
    </tr>
       
        <?php
       
        while($show = mysqli_fetch_array($view))
        {    
      
             ?>
            <tr class=" table-light text-dark">
            <td ><?php echo $show['ID']; ?></td>
            <td ><?php echo $show['PatientName']; ?></td>
            <td ><?php echo $show['PatientContno']; ?></td>
         <?php if($show['pat_status']==0){echo
          '<td class="text-success">Discharged</td>';}
          else{echo '<td class="text-warning">Admitted</td>';} ?>
            

            <td class="d-flex border-bottom" >
              <?php  if($admin) {    ?> 
              
            <a href="edit_pat?id=<?php echo $show['ID']?>">
            <i class="fa-solid fa-pen-to-square text-primary "></i></i> </a> 
           <a href="del_doc?id=<?php echo $show['ID']?>">
            <i class="fa-solid fa-trash-can text-danger"></i></a>     <?php  }    ?> 
            <a href="patient?id=<?php echo $show['ID']?>">
            <i class="fa-solid fa-eye"  data-toggle="modal" data-target="#exampleModal"></i></a>
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
      <?php
    
    $id =$_GET['id'];

    
    $get_pat= mysqli_query($con,"select * from tblpatient where id ='$id'");
    $show_pat= mysqli_fetch_array($get_pat);
    $doc_id= $show_pat['Docid'];
    $get_doc_name= mysqli_query($con,"select docName from doctor where id  ='$doc_id'");
    $show_doc_name= mysqli_fetch_array($get_doc_name);

    ?> 
  
  <table class="table border-cus table-hover " style="max-height:800px;overflow-y:auto">

<tbody class="">
<tr><th>Id:</th> <td ><?php echo $show_pat['ID']; ?></td></tr>
<tr> <th>Patient Name:</th>  <td ><?php echo $show_pat['PatientName']; ?></td></tr>
<tr> <th>Patient Contact:</th>  <td ><?php echo $show_pat['PatientContno']; ?></td></tr>
<tr><th>Patient Email:</th> <td ><?php echo $show_pat['PatientEmail']; ?></td></tr>
<tr><th>Gender:</th>   <td ><?php echo $show_pat['PatientGender']; ?></td></tr>
<tr> <th>Address:</th>  <td ><?php echo $show_pat['PatientAdd']; ?></td></tr>
<tr> <th>Age:</th>  <td ><?php echo  $show_pat['PatientAge']; ?></td></tr>
<tr> <th>Medical History:</th>  <td ><?php echo $show_pat['PatientMedhis']  ?></td></tr>
<tr> <th>Admission Date:</th>  <td ><?php echo $show_pat['CreationDate'] ?></td></tr>
<tr> <th>Assigned Doctor:</th>  <td style="text-transform:capitalize">Dr.<?php echo $show_doc_name['docName'] ?></td></tr>


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


<?php if(!empty($show_pat['ID'])){?>
$(window).on('load', function () {
    $('#exampleModal').modal('show');
})
  
<?php } ?>

    

</script>
</body>

</html>