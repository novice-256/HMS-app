<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://use.fontawesome.com/cb7df9e51e.js"></script>

   
                   <!-- Links slice  -->

                   <?php
    Include("slice/link.php");
    // $header_link= 'add_patient';
    $admin&&  $header_btn_text='Add Report';
    $user&& $header_link= 'add_appoint';
    $user&& $header_btn_text='New Appointment';
    $doctor&&  $header_link= 'edit_doctor';
    $doctor&& $header_btn_text='Edit Profile';
?>
</head>
<?php
    Include("connection.php");
 

    ?>
    
 <?php 
     Include("connection.php");
     if (isset($_POST['btn']))
{   $reportName = mysqli_escape_string($con,$_POST['reportName']);
  $reportDesc = mysqli_escape_string($con,$_POST['reportDesc']);

  $file = $_FILES['file'];
  
  $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $filetType= $_FILES['file']['type'];
  
  $filetExt = explode('.',$fileName);
  $allowed= array('docx','xls','pdf','xlm','txt');
  $filetActualExt = strtolower(end($filetExt));
  
      if (in_array($filetActualExt,$allowed)){
          if ($fileError===0){
              if ($fileSize<1000000){
               $filetNewName = uniqid('',true).".".$filetActualExt;
               $fileDest = 'uploads/'. $filetNewName;
               move_uploaded_file($fileTmpName,$fileDest);
               $query = "insert into report (reportName,reportDesc,file_dest)
               values('$reportName','$reportDesc','$fileDest')";
                   if (mysqli_query($con, $query)) {
                  $success="Successful";
                  header("Refresh:1;URL=report");
                   } else{ echo '<script> alert("Problem in query")</script>';} 
  
             
              }else{ echo '<script> alert("Problem in size")</script>';} 
          }else{ echo '<script> alert("file error")</script>';} 
      } else{ echo '<script> alert("Problem in file array ")</script>';}   
  
 
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
      
    <form method="POST" id='form-modal' class="form-modal bg-light form-group-lg border-cus col-12 p-4 mb-2" enctype="multipart/form-data">

    <div class='bg-cus p-2 text-center text-light'><label >Enter Details </label></div>
<br>
<?php
    if(!empty($msgemail)){?>
<strong class="text-danger" >* <?php error_reporting(0); echo $msgemail;  }?> </strong> 
<div class="form-outline flex-fill mb-2">  
<input type="text" id="form3Example1c " value="<?php if(isset($_POST['btn'])){
echo $_POST['reportName'];} ?>" class="form-control" name="reportName" placeholder="Enter Name" required>
</div>
<div class="form-outline flex-fill mb-2">  
<input type="text" id="form3Example1c " value="<?php if(isset($_POST['btn'])){
echo $_POST['reportDesc'];} ?>" class="form-control" name="reportDesc" placeholder="Enter Description" required>
</div>

<div class="form-outline flex-fill mb-2">  
<input type="file" id="form3Example1c " value="<?php if(isset($_POST['btn'])){
echo $_POST['file_dest'];} ?>" class="form-control" name="file"  required>
</div>

<div class="form-outline flex-fill mb-2 text-center">  


  <button  class="btn btn-outline-cus mr-4 pl-4 pr-4" id="cancelBtn" >Close</button>
<button  class="btn btn-outline-cus ml-4 pl-4 pr-4" type="submit"  name="btn" >Submit</button>

</div >                        <?php
                       if(isset($_POST['btn'])){?>
                       <br>
                       <br>
<strong class=" alert alert-success"> <?php echo $success;}?></strong> 
    <br>
<?php error_reporting(0); if(!empty($msg_successs)){?>
<strong class="alert alert-success " ><span class="spinner-border-sm spinner-border text-dark "></span>
<?php  echo $msg_success; }?> </strong> 

</form>
 
 
   <table class="table border-cus table-hover " style="max-height:800px;overflow-y:auto">

        <tbody class="">
        <tr class="sticky_table bg-cus">        
        <th >Report ID</th>
        <th>Report Name</th>
        <th>Description</th>

        <th>Link</th>
        <?php  if($admin) {    ?>       <th>Action</th> <?php  }   ?> 
   
    </tr>

    


        <?php
           $view = mysqli_query($con, "select * from report");

        while($show = mysqli_fetch_array($view))
        {    
         $link =explode( '/',$show['file_dest']);
       
             ?>
            <tr class=" table-light text-dark">
            <td ><?php echo $show['id']; ?></td>
            <td ><?php echo $show['reportName']; ?></td>
            <td ><?php echo $show['reportDesc']; ?></td>
          <td  data-toggle="tooltip" data-placement="top" title="Download report" > <a href="<?php echo $show['file_dest'] ?> "target="_blank"><?php echo end($link)  ?></a> </td>

          <?php  if($admin) {    ?> 
            <td class="d-flex border-bottom" data-toggle="tooltip" data-placement="top" title="Delete Item">
            
           <a href="del_report.php?id=<?php echo $show['id']?>"
          
           >
            <i class="fa-solid fa-trash-can text-danger"></i></a>
            
          </td>
          <?php  }    ?> 
            </tr>
            <?php
        }
          
           ?>     
            
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
  var btn_form_cancel = document.getElementById("cancelBtn");

  btn_form.addEventListener("click",function(){form_modal.style.display='block' ;})
  btn_form_cancel.addEventListener("click",function(){form_modal.style.display='none' ;})

</script>
</body>

</html>