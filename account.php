<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://use.fontawesome.com/cb7df9e51e.js"></script>

 
<?php
    Include("slice/link.php");
    $admin&&$header_link= '#';
    $admin&&$header_btn_text='Add Account';
    $user&& $header_link= 'add_appoint';
    $user&& $header_btn_text='New Appointment';
    $doctor&&  $header_link= 'edit_doctor';
    $doctor&& $header_btn_text='Edit Profile';
?>

</head>

    
 <?php 
     Include("connection.php");
     if (isset($_POST['btn']))
{
$amount = mysqli_escape_string($con,$_POST['amount']);
$user_id = mysqli_escape_string($con,$_POST['user_id']);
$user_get = mysqli_query($con,"select * from user where id = '$user_id' ");

if(mysqli_num_rows($user_get)>0)
{
  $query = "insert into account (amount,user_id)values('$amount','$user_id')";
if (mysqli_query($con, $query)) 
              { 
                 $success="Successful";
                 header("Refresh:1;URL=account.php");
 
              }
              else
              {
                 echo '<script> alert("Problem in Adding")</script>'; 
 
              }

}
else{

    $msgemail = 'User does not Exist';


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


    <!-- Header slice  -->
    <?php
  Include('slice/header.php');
  
  ?>  
  
  <div class="layer_border border-left" >

    

       <?php error_reporting(0); if(!empty($msg_successs)){?>
<strong class="alert alert-success " ><span class="spinner-border-sm spinner-border text-dark "></span>
<?php  echo $msg_success; }?> </strong> 
<?php
    if(!empty($msgemail)){?>
<strong class="text-danger" >* <?php error_reporting(0); echo $msgemail;  }?> </strong> 
 
    <div class="mid_wrap row col-12  ">
      
    <form method="POST" id='form-modal' class="form-modal bg-light form-group-lg border-cus col-12 p-4 mb-2">

    <div class='bg-cus p-2 text-center text-light'><label >Enter Details   </label></div>
<br>
<div class="form-outline flex-fill mb-2">  
<input type="number" id="form3Example1c " value="<?php if(isset($_POST['btn'])){
echo $_POST['amount'];} ?>" class="form-control" name="amount" 
placeholder="Enter amount in PKR" required>
</div>
<div class="form-outline flex-fill mb-2">  
<input type="number" id="form3Example1c " value="<?php if(isset($_POST['btn'])){
echo $_POST['user_id'];} ?>" class="form-control" name="user_id" 
placeholder="Enter User ID" required>
</div>

<br>
<div class="form-outline flex-fill mb-2 text-center">  


  <button  class="btn btn-outline-cus mr-4 pl-4 pr-4" id="cancelBtn" >Close</button>
<button  class="btn btn-outline-cus ml-4 pl-4 pr-4" type="submit"  name="btn" >Submit</button>

</div > 

                       <?php
                       if(isset($_POST['btn'])){?>
                       <br>
                       <br>
<strong class=" alert alert-success"> <?php echo $success;}?></strong> 
    <br>


</form>
 
<?php
    
   $admin && $view = mysqli_query($con, "select * from account");
   $user && $view = mysqli_query($con, "select * from account where id = $id");
   $doctor && $view = mysqli_query($con, "select * from account where id = $id");


    ?>  
   <table class="table border-cus table-hover " style="max-height:800px;overflow-y:auto">

        <tbody class="">
        <tr class="sticky_table bg-cus">        
        <th >Bill ID</th>
        <th>User Id</th>
        <th>amount</th>
        <th>status</th>

        <th>Action</th>
   
    </tr>
       
        <?php
       
        while($show = mysqli_fetch_array($view))
        {    
       
             ?>
            <tr class=" table-light text-dark">
            <td ><?php echo $show['id']; ?></td>
            <td ><?php echo $show['user_id']; ?></td>
            <td ><?php echo $show['amount']; ?></td>
            <td ><?php echo $show['bill_status']; ?></td>

            <td class="d-flex border-bottom" >
          <?php  if($admin) {    ?> 
                <!--admin authorization  -->
           <a href="del_bill?id=<?php echo $show['id']?>">
        <i class="fa-solid fa-trash-can text-danger"></i></a>
        <?php  } 
        if($user) {    ?> 
            <a href="bill?id=<?php echo $show['user_id']?>">
           
            <i class="fa-solid fa-eye"  data-toggle="modal" data-target="#exampleModal"></i></a>
            <?php  }   ?>
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