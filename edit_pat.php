<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://use.fontawesome.com/cb7df9e51e.js"></script>

   
   <!-- Links slice  -->

   <?php
    Include("slice/link.php")
?>

<?php 
     Include("connection.php");
     $id =$_GET['id'];
     if (isset ($_POST['btn']))
{
  $Docid =mysqli_escape_string($con,$_POST['Docid']);

  $PatientName =mysqli_escape_string($con,$_POST['PatientName']);
  $PatientContno = mysqli_escape_string($con,$_POST['PatientContno']);
  $PatientEmail = mysqli_escape_string($con,$_POST['PatientEmail']);
  $PatientGender = mysqli_escape_string($con,$_POST['PatientGender']);
  $PatientAdd = mysqli_escape_string($con,$_POST['PatientAdd']);
  $PatientAge = mysqli_escape_string($con,$_POST['PatientAge']);
  $PatientMedhis	 = mysqli_escape_string($con,$_POST['PatientMedhis']);
  $pat_status	 = mysqli_escape_string($con,$_POST['pat_status']);

  

  $compareQuery = mysqli_query($con,"select * from tblpatient where PatientEmail ='$PatientEmail'");


  $check = mysqli_num_rows($compareQuery);
    if($check >= 2)
    {
       echo '<script> alert("Email Already Taken")</script>'; 
    }
    else
      {
       if($PatientEmail)
          {
          
                    
              $query ="UPDATE tblpatient SET Docid ='$Docid',PatientName ='$PatientName',PatientContno ='$PatientContno',
              PatientEmail ='$PatientEmail',PatientGender ='$PatientGender',PatientAdd ='$PatientAdd',PatientAge ='$PatientAge'
              ,PatientMedhis ='$PatientMedhis' ,pat_status ='$pat_status' WHERE id = '$id' ";
              if (mysqli_query($con, $query)) 
              { 
                 $success="Patient Successfully Updated";
                 header("Refresh:1;URL=patient");
 
              }
              else
              {
                 echo '<script> alert("Problem in Registration")</script>'; 
 
              }
         }
         else
         {
             echo '<script> alert("Password Does not match")</script>'; 
 
 
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
  <a class="nav-link" href="patient.php">Patient</a>
  <a class="nav-link" href="#">|</a>

  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Edit Patient</a>
</nav>

<!-- update PHP code  -->
<?php
    
 
    $get_pat= mysqli_query($con,"select * from tblpatient where id ='$id'");
    $show_pat= mysqli_fetch_array($get_pat);
    $doc_id= $show_pat['Docid'];
    $get_doc_name= mysqli_query($con,"select docName from doctor where id  ='$doc_id'");
    $show_doc_name= mysqli_fetch_array($get_doc_name);

    ?> 
    <!-- update PHP code end  -->
    <div class=" w-100 m-2  ">
     
     <div class="content-wrapper  d-flex align-items-center ">
       <div class="card col-lg-4  border-cus mx-auto">
         <div class="card-body  ">
           <h3 class="card-title border-cus-low text-left text-light bg-cus p-3 text-center">Update Patient Information</h3>
           <form method="POST"  class=" form-group-lg p-2 col-sm-12 col-lg-8 col-md-12 ">
                <br>
                <br>

           <div class="form-outline flex-fill mb-4">  
           <!-- values('$specilization','$','','$docFees','$','$','$','$')"; -->

                   <input type=" text" class="form-control" name="PatientName"  value="<?php echo $show_pat['PatientName']?> "required placeholder="Enter your name">
                       </div>
                       <div class="form-outline flex-fill mb-4">  

                   <input type=" text" class="form-control" name="PatientContno" required value="<?php echo $show_pat['PatientContno'] ?>"  placeholder="Contact">
                   </div>
                   <div class="form-outline flex-fill mb-4">  

                   <input type=" contactno" class="form-control" name="PatientEmail" required value="<?php echo $show_pat['PatientEmail'] ?>" placeholder="Email" >
                   </div>
                     
                       <div class="form-outline flex-fill mb-4">  
                   <input type=" text" class="form-control" name="PatientAdd" required value="<?php echo $show_pat['PatientAdd'] ?>" placeholder="Address">
                   </div>
                   <div class="form-outline flex-fill mb-4">  
                   <input type=" text" class="form-control" name="PatientAge" required value="<?php echo $show_pat['PatientAge'] ?>" placeholder="Age">
                   </div>
                   <div class="form-outline flex-fill mb-4">  
                   <input type=" text" class="form-control" name="PatientMedhis" required value="<?php echo $show_pat['PatientMedhis'] ?>" placeholder="Medical history">
                   </div>
                   <select id='pat_status' name="pat_status" class="form-select form-control form-select-lg mb-3" aria-label=".form-select-lg example">

<option value="<?php echo $show_pat['pat_status']?>" ><?php if($show_pat['pat_status']){echo 'Admitted';}else{echo 'Discharged';} ?></td></option>
<option value="<?php echo !$show_pat['pat_status'] ?>" ><?php if($show_pat['pat_status']){echo 'Discharged';}else{echo 'Admitted';} ?></option>


</select>

                   <select  name="PatientGender" class="form-select form-control form-select-lg mb-3" aria-label=".form-select-lg example">

<option value="male" >Male</option>
<option value="male" >Female</option>


</select>


                   <?php
    $pat_id= $show_pat['Docid'];
    $view = mysqli_query($con, "select * from doctor where id != '$pat_id'");
 
    ?> 
     <select  name="Docid" class="form-select form-control form-select-lg mb-3" aria-label=".form-select-lg example">
       
         <option class="text-capitalize" value="<?php echo $show_pat['Docid']; ?>" >Dr.<?php echo $show_doc_name['docName']; ?></option>
<?php
       while($show = mysqli_fetch_array($view))
       {           
            ?>
  <option class="text-capitalize" value="<?php echo $show['id']; ?>" >Dr.<?php echo $show['docName']; ?></option>
<?php
        }
          
           ?>

                  
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
   <!-- for checking inputs-->

    <!-- <button id="myBtn" >click me</button> -->
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