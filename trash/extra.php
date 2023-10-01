<!DOCTYPE html>
<html lang="en">

<head>
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


 @media only screen and (max-height:900px) {
.lower_wrap {
    height: 300px;
    overflow-y:scroll;
    overflow-x:hidden;
   
  }
  .layer_border{
  
    background-color:#c9c9c9;height:100%;

}
.nav_items td 
{
  text-align: center;
  font-size:25px;
  color:white
}
.nav_items td b{
display:none;
}
        }
@media only screen and (min-height:900px) {

    .nav_wrapper{
   background-color:blue;
   border-radius: 25px 0 0 25px
}
.upper_sec{
    border-radius: 0 25px 25px 0
}
.lower_wrap {

border-radius:0px 0px 0px 25px
}

.main{
    height:100vh
}
.layer_border{
    border-radius: 25px;
    background-color:#c9c9c9;height:100%;

}
}
    </style>
<body class="m-1 p-0 " >
<div class="container-fluid d-flex main m-0 p-0"    > 
    <section class="nav_wrapper bg-dark col-2 "   >
    <div class="nav_items d-flex justify-content-around"style="height :100%;" >

    <table class="table align-self-center bg-success " style="height:fit-content">
    <tbody>
        <tr class='table-items nav_items' >
            <td>
            <i class="fa-solid fa-house mb-2 p-3"></i><b>Home</b> 

            </td>
        </tr>
        <tr>
            <td>
            <i class="fa-solid fa-house mb-2 p-3"></i><b>Home</b> 
            </td>
        </tr>
       
        
    </tbody>
   
</table>

 
<div class="position-absolute" style=" bottom:5%">

       
<a href="" class="link text-danger"><i class="fa-solid fa-arrow-right-from-bracket mr-3"></i>signout</i></a>


</div>

    </div> 

</section > 
 <section class="container-fluid upper_sec bg-dark m-0 p-0 border-right " >
    <div class="layer_border border-left" >

    
    <div class="navbar_wrap  col-12 ">
    <div class="col-12 mt-3" >
    <nav class="navbar navbar-light bg-light">
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
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
    <div class="mid_wrap row col-12  ">
        <div class="col-md-6 col-sm-12 ml-2 p-3 d-flex">
        
            <img src="assets/face17.jpg"  class="img-thumbnail " alt="" style="height:200px">
         <div class=" border-0" >
        <div class="card-body ">
             <h5 class="card-title">Dr. ABC</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
     <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  
</div>
<div class="col-md-6 row col-sm-12 ">
<canvas id="myChart1" style="width:100%;max-width:300px"></canvas>
<canvas id="myChart2" style="width:100%;max-width:300px"></canvas>
<canvas id="myChart3" style="width:100%;max-width:300px"></canvas>
</div>

  </div>
  
  <div class="lower_wrap border col-lg-6 col-sm-12 bg-light " 
  style="   ">
        <?php
    
    $view = mysqli_query($con, "select * from signup");

    ?>
    <table class="table table-responsive"  >
        <tbody >
            <tr>
                <!-- <th>Id</th> -->
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <!-- <th>DOB</th> -->
                <!-- <th>Joining Date</th> -->
                <th>Action</th>
            </tr>
       
        <?php
       
        while($show = mysqli_fetch_array($view))
        {           
             ?>
            <tr class=" table-light text-dark">
            <!-- <td ><?php echo $show['id']; ?></td> -->
            <td ><?php echo $show['Name']; ?></td>
            <td ><?php echo $show['Email']; ?></td>
            <td ><?php echo $show['Number']; ?></td>
            <!-- <td ><?php echo $show['Date']; ?></td> -->
            <!-- <td ><?php echo $show['regdate']; ?></td> -->
            <td ><a href="upd.php?id=<?php echo $show['id']?>"><input type="button" value="Update" class="btn btn-primary"> </a>
            <a href="del.php?id=<?php echo $show['id']?>"><input type="button" value="Delete" class="btn btn-danger"> </a></td>

            </tr>
            <?php
        }
           ?>   
         
            
        </tbody>
        </table>
   <p class="text-center link "><a href=''>
   </a></p>

    </div>
      <div class=" border col-lg-6 col-sm-12 bg-light " 
  style="">
 

    </div>

    
    </div>
    
   
    </div>

</section>

</div>
<script src="assets/js/ajaxChart.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>

<script>
   <?php  
        $view = mysqli_query($con, "select * from signup");

    $show = mysqli_fetch_array($view);
?>
     var value ="<?php echo $show['id'];?>"
    
var xValues = ["Rooms","booked"];
var yValues = ["60",value];
var barColors = [
  "white",
  "red",

];

new Chart("myChart1", {
  type: "doughnut",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Rooms availiblity"
    }
  }
});
new Chart("myChart2", {
  type: "doughnut",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Rooms availiblity"
    }
  }
});
new Chart("myChart3", {
  type: "doughnut",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Rooms availiblity"
    }
  }
});
</script>
</body>

</html>