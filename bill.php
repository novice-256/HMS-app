<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://use.fontawesome.com/cb7df9e51e.js"></script>

   
 
<?php
    Include("slice/link.php");
    $user&& $header_link= 'add_appoint';
    $user&& $header_btn_text='New Appointment';
    
    $admin&&header("Location: error401.php");
    $doctor&&header("Location: error401.php");
  
?>
</head>

<?php 
  Include("connection.php");
$userId = $_GET['id'];
   $query = mysqli_query($con,"select * from user where id ='$userId'");
   $query_account= mysqli_query($con,"select * from account where user_id ='$userId'");

   $get_items = mysqli_fetch_array($query);
   $get_account = mysqli_fetch_array($query_account);


     if (isset($_POST['btn']))
{

$bill_id = $get_account['id'];
  if($get_account['bill_status']==0){
    $query ="UPDATE account SET bill_status	=1 where id =$bill_id"; 
                
    if(mysqli_query($con, $query)){ 
      echo '<script> alert("Successful")</script>';
      header("Refresh:1;URL=account.php");}
  }
  else if( $get_account['bill_status']==1 ){
    echo '<script> alert("User already have paid this bill")</script>';
  }             
  else{
    //   echo '<script> alert("Some thing went wrong")</script>';
    
      echo '<script> alert("', $get_account['bill_status'],'")</script>';

  }
}
 ?>
    <style>

    </style>
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
  <a class="nav-link" href="Account.php">Account</a>
  <a class="nav-link" href="#">|</a>

  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Book Appointment</a>
</nav>
    <div class=" w-100 m-2  ">
     
     <div class="content-wrapper justify-content-center" >
       <div class="bg-light border-cus">
         <div class=" col-12  ">
           
                <br>
                <br>

        <div >

            <legend class="text-capitaliz text-center mt-2 bg-cus p-2"> ABC Hospital </legend>
            
            <p class="text-capitaliz text-center mt-2"><strong>Generated Bill</strong>  </p>

            <div  class="col-12 d-flex justify-content-between p-0">
                
                <p class="text-capitalize " style="font-size:12px"> 
                    Generated At <br>  <span class="text-left">
                        <?php echo $get_account['created_at']; ?></span>
                        
                    </p>
                    <p class="text-capitalize text-center" style="font-size:12px"> 
                    Date <br>  <span class="text-left">
                        <?php echo date("Y/m/d"); ?></span>
                        
                    </p>
                </div>           
                 <p class="text-capitalize "> Bill Id <span class="float-right"> <?php echo $get_account['id']; ?></span></p>

                <p class="text-capitalize ">  Name: <span class="float-right"><?php echo $get_items['fullName']; ?></span> </p>

<p class="text-lowercase ">Email :<span class="float-right"> <?php echo $get_items['email']; ?></span></p>

       
                </div>        


            
      <div class="border ">
              <p class="text-capitalize "> <b class="text-dark" >Fee</b> <span class="float-right"> <?php echo $get_account['amount']; ?></span></p>
              <p class="text-capitalize ">
                 <b class="text-dark" >Tax</b> 
                 <span class="float-right"> 
                    <?php $tax= (int)$get_account['amount']*.3/100 ; 
                    echo $tax ; ?></span></p>
      <div class="border-bottom border-dark"></div> 
              <p class="text-capitalize "> <b class="text-dark" > Total amount</b> <span class="float-right"> <?php echo $tax+$get_account['amount']; ?></span></p>

      </div>
           
               <form method="POST"  class="form-group col-12 text-center">
              <?php   if($get_account['bill_status']==0){?>
               <button class="btn btn-outline-cus btn-sm mt-3 mb-3" name='btn' type="submit">Pay Online</button>
                  <?php }else{?>
                    <p class="text-success mt-3 mb-3 text-capitalize">this Bill has been paid</p>
                    <?php }?>
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
actual_active=='bill'?actual_active='account':alert('nav error')


document.getElementById(actual_active).classList.add("nav_active")

  



    

</script>
</body>

</html>