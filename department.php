<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://use.fontawesome.com/cb7df9e51e.js"></script>

   
 <!-- Links slice  -->

 <?php
    Include("slice/link.php");
    $header_link= '#';
    $header_btn_text='Add Department';
    
?>
</head>
<?php
    Include("connection.php")
    ?>
    
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

    
  <!-- Header slice  -->
  <?php
  Include('slice/header.php');

  ?>    <div class="mid_wrap row col-12  ">
      
    <form method="POST" id='form-modal' class="form-modal bg-light form-group-lg border-cus col-12 p-4 mb-2">

    <div class='bg-cus p-2 text-center text-light'><label >Enter New Department </label></div>
<br>
<?php
    if(!empty($msgemail)){?>
<strong class="text-danger" >* <?php error_reporting(0); echo $msgemail;  }?> </strong> 
<div class="form-outline flex-fill mb-2">  
<input type="text" id="form3Example1c " value="<?php if(isset($_POST['btn'])){
echo $_POST['specilization'];} ?>" class="form-control" name="specilization" placeholder="Enter Department" required>
</div>
<div class="form-outline flex-fill mb-2 text-center">  


  <button  class="btn btn-outline-cus mr-4 pl-4 pr-4" id="cancelBtn" >Close</button>
<button  class="btn btn-outline-cus ml-4 pl-4 pr-4" type="submit"  name="btn" >Submit</button>

</div > 

                      
                      </div>
                       <?php
                       if(isset($_POST['btn'])){?>
                       <br>
                       <br>
<strong class=" alert alert-success"> <?php echo $success;}?></strong> 
    <br>
<?php error_reporting(0); if(!empty($msg_successs)){?>
<strong class="alert alert-success " ><span class="spinner-border-sm spinner-border text-dark "></span>
<?php  echo $msg_success; }?> </strong> 

</form>
 
<?php
    
    $view = mysqli_query($con, "select * from doctorspecilization");

    ?>  
   <table class="table border-cus table-hover " style="max-height:800px;overflow-y:auto">

        <tbody class="">
        <tr class="sticky_table bg-cus">        
        <th >Department ID</th>
        <th>Department Name</th>
        <th>Action</th>
   
    </tr>
       
        <?php
       
        while($show = mysqli_fetch_array($view))
        {    
          // $_id=$show[0['id']];   
          //  $get_status= mysqli_query($con,"select pat_status from tblpatient where pat_status = 0 AND Docid ='$_id'");
       
             ?>
            <tr class=" table-light text-dark">
            <td ><?php echo $show['id']; ?></td>
            <td ><?php echo $show['specilization']; ?></td>

<?php //echo $get_status['pat_status']; ?>

            <td class="d-flex border-bottom" ><a href="edit_dep.php?id=<?php echo $show['id']?>">
            <i class="fa-solid fa-pen-to-square text-primary "></i></i> </a> 
           <a href="del_dep.php?id=<?php echo $show['id']?>">
            <i class="fa-solid fa-trash-can text-danger"></i></a>
            
          </td>
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