<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://use.fontawesome.com/cb7df9e51e.js"></script>

   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/brands.css" integrity="sha512-g9hNU97Dxb6qJZumYbKXC10tDP8J2rQdRxQoqona1LU0k0L8Hki+mOMHLbljf2TxSjgGl8f/PzUyGN3/XvA14w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"

        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.css" integrity="sha512-/Jsoj+nRoCkEHw4HnymLk48dWblqtN+0rW+UMAanfbHZjzgphJipQOEuuOEdZ0IzSEYgK0NXCNda8r+4juGbPg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.css" integrity="sha512-FA9cIbtlP61W0PRtX36P6CGRy0vZs0C2Uw26Q1cMmj3xwhftftymr0sj8/YeezDnRwL9wtWw8ZwtCiTDXlXGjQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/regular.css" integrity="sha512-NtY13r7ytP+tA7+GX3QMxZ9U5Fno7DiyCe30mraDoOJmjc1T+f7VAY4IoK2/4VbWfkxd5ryg5wGAiLxONjh3fw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/solid.min.js" integrity="sha512-F0Gp9qi8/3qyo+62Pi1ZgGe6hAUxPbzOnqhhpJYAMUGDmOys95dCRCVYfQawlUeoGp1Rj/K9V7NboA9sQ9BtKw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/edit_dep.css">
<?php     Include("slice/session.php")?>
</head>
<?php
Include("connection.php");
$id =$_GET ['id'];
$view= mysqli_query($con,"select * from doctorspecilization where id ='$id'");
$show= mysqli_fetch_array($view);
$id =$_GET ['id'];    
if (isset($_POST['btn']))
{
  
  if(mysqli_num_rows($view)===1)
  {
  $specilization  = $_POST['specilization']; 
  $query = "UPDATE doctorspecilization SET specilization = '$specilization'  where id ='$id' ";
if (mysqli_query($con, $query)) 
              { 
                 $success="Update Successful";
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
    
    <div class="mid_wrap row col-12  ">
    <nav class="nav">
<a class="nav-link" href="Department.php">Department</a>
  <a class="nav-link" href="#">|</a>

  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Add Doctor</a>
</nav>
    <form method="POST" id='form-modal' class="form-modal bg-light form-group-lg border-cus col-12 p-4 mb-2">

    <div class='bg-cus p-2 text-center text-light '><label >Edit Department </label></div>
<br>
<?php
    if(!empty($msgemail)){?>
<strong class="text-danger" >* <?php error_reporting(0); echo $msgemail;  }?> </strong> 
<div class="form-outline flex-fill mb-2">  
<input type="text" id="form3Example1c "  value="<?php echo $show['specilization']; ?>" class="form-control" name="specilization" placeholder="Enter Department" required>
</div >
<br>
<div class="form-outline flex-fill mb-2 text-center">  

  <a href="department.php" class="btn btn-group btn-outline-cus pl-4 pr-4  "> Close 
  </a>
<input type="submit" class="btn btn-group btn-outline-cus pl-4 pr-4  " name="btn"
value="update"/>

</div > 

<?php if(isset($_POST['btn'])){?>
  <strong class=" alert alert-success"> <?php echo $success;}?></strong> </div>

  

</form>
 
<?php
    
    $view = mysqli_query($con, "select * from doctorspecilization");

    ?>  
   <table class="table border-cus table-hover " style="max-height:800px;overflow-y:auto">

        <tbody class="">
        <tr class="sticky_table bg-cus">        <th >Department ID</th>
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

</div>  <!-- JS Links slice  -->

<?php
    Include("slice/script.php")
?>

<script>
    

</script>
</body>

</html>