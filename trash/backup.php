<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://use.fontawesome.com/cb7df9e51e.js"></script>
<script src="https://use.fontawesome.com/cb7df9e51e.js"></script>

    <title>Document</title>
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
</head>
<?php
    Include("connection.php")
    ?>
    <style>
      /* All styles */
      /* *{
        border:1px solid
      } */
      body{
        border: 5px solid rgb(50,66,162);

      }
     
.sign_out {
  padding:2%;
  bottom:5%;
  display: inline-block;

  
  
}
.btn-outline-cus{
  border: 1px solid rgb(50,66,162);
}
.btn-outline-cus:hover{
  background-color: rgb(50,66,162);
  color:white
}
.nav_active{
background-color:white ; 
color: black !important;

}
.nav_items td b,.sign_out a b{
  display:none;
}
.bg-cus{
  /* background-color:#19d4fa; */
  background: linear-gradient(90deg, rgba(50,66,162,1) 45%, rgba(56,72,167,1) 62%, rgba(74,89,172,1) 97%);
}
.nav_items td a {
  color:inherit
}

.sticky_table{
  position:sticky !important; top:0; background-color:black;;
}

        /* For small devices */


 @media only screen and (max-height:900px) {
.lower_wrap {
    height: 300px;
    overflow-y:scroll;
    overflow-x:hidden;
   
  }

.nav_items td ,.sign_out a 
{
  text-align: center;
  font-size:25px;
  color:white;
  background: linear-gradient(90deg, rgba(50,66,162,1) 45%, rgba(56,72,167,1) 62%, rgba(74,89,172,1) 97%);


}


        }
        /* For large devices */
@media only screen and (min-height:900px) {


.main{
    height:100vh
}
.layer_border{
    
    background-color:#c9c9c9;height:100%;

   
}
.nav_items td 
{
  text-align: center;
  font-size:20px;
  color:white;
  transition:all .2s ease-in
  
}
.sign_out a i{
  text-align: center;
  font-size:20px;
  transition:all .2s ease-in
}

.nav_items td:hover b,.sign_out:hover a b{
display:inline-block;

}
.nav_items td:hover, .sign_out:hover{
  text-align:center;
  width:180px;
  font-size:15px;
  position:absolute;
  background-color:white;
  color:black;
  z-index: 3;
}
.sign_out:hover{
  text-align:right !important;
  
}
.bg-cus{
  background: linear-gradient(90deg, rgba(50,66,162,1) 45%, rgba(56,72,167,1) 62%, rgba(74,89,172,1) 97%);}}
    </style>
<body class=" p-0 " >
<div class="container-fluid d-flex main m-0 p-0"    > 
    <section class="nav_wrapper bg-cus " id="main_sec"  >
    <div class="nav_items d-flex justify-content-around "style="height :100%" >

    <table class="table align-self-center " style="height:fit-content">
    <tbody>
        <tr class='table-items nav_items ' >
            <td class="nav_active">
           <a href="dashboard.php" ><i class="fa-solid fa-house-user p-3"></i><b>Home</b> 
           </a> 
            </td>
        </tr>
        <tr>
            <td>
            <a href="Employee.php" >
            <i class="fa-solid fa-user-doctor p-3"></i><b>Employee</b> 
            </a>   
          </td>
        </tr>
        <tr>
            <td>
            <a href="Patient.php" >
            <i class="fa-solid fa-bed-pulse p-3"></i><b>Patient</b> 
            </a>   
          </td>
        </tr>
        <tr>
            <td>
            <a href="Report.php" >
            <i class="fa-solid fa-briefcase-medical p-3"></i></i><b>Report</b> 
            </a>   
          </td>
        </tr>
        <tr>
            <td>
            <a href="Account.php" >
            <i class="fa-solid fa-receipt p-3"></i><b>Account</b> 
            </a>   
          </td>
        </tr>
        <tr>
            <td>
            <a href="Extra.php" >
            <i class="fa-solid fa-shuffle"></i><b>Extra</b> 
            </a>   
          </td>
        </tr>

        
    </tbody>
   
</table>

 
<div class="position-absolute sign_out ">

       
<a href="" class="link text-danger m-0 p-0">
  <i class="fa-solid fa-arrow-right-from-bracket mr-2 "></i></i><b>Logout</b> </a>


</div>

    </div> 

</section > 
 <section class="container-fluid upper_sec  m-0 p-0 border-right " >
  

    
    <div class="navbar_wrap ">
    <div class="col-12 m-0 p-0 "  >
    <nav class="navbar navbar-light bg-light">
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-cus my-2 my-sm-0" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
  </form>
  <div class="d-flex align-items-center">
  <span>
  <i class="fa-solid fa-message mr-3"></i>


      <img src="register1.gif" class="rounded img-fluid" width=50 alt="..."> <br>
  <p class="text-right mr-1"style="font-size:10pt;line-height:15px;">Name</p>
    </span>
  </div>
    </nav>

    </div>
    </div>   
   <!-- Main content area -->
    <div class="main-content ">

    <?php
    
    $view = mysqli_query($con, "select * from signup");
    $show = mysqli_fetch_array($view)
    ?>  



        <!-- <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>DOB</th>
        <th>Joining Date</th>
        <th>Action</th> -->
 

   <table class="table table-dark table-responsive table-bordered table-hover " style="max-height:800px;overflow-y:scroll">

        <tbody class="">
        <tr class="sticky_table bg-cus">
        <th >Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>DOB</th>
        <th>Joining Date</th>
        <th>Action</th>
    </tr>
       
        <?php
       
        while($show = mysqli_fetch_array($view))
        {           
             ?>
            <tr class=" table-light text-dark">
            <td ><?php echo $show['id']; ?></td>
            <td ><?php echo $show['Name']; ?></td>
            <td ><?php echo $show['Email']; ?></td>
            <td ><?php echo $show['Number']; ?></td>
            <td ><?php echo $show['Date']; ?></td>
            <td ><?php echo $show['regdate']; ?></td>
            <td class="d-flex border-bottom" ><a href="upd.php?id=<?php echo $show['id']?>">
            <i class="fa-solid fa-pen-to-square btn btn-primary "></i></i> </a> 
           <a href="del.php?id=<?php echo $show['id']?>">
            <i class="fa-solid fa-trash-can btn btn-danger"></i></a></td>
            </tr>
            <?php
        }
          
           ?>     
            
        </tbody>
    </table>

  </div>

</section>



</div>
<script src="assets/js/ajaxChart.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>


</body>

</html>