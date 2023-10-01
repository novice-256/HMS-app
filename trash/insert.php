<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>
</head>

<body>
    <?php 
     Include("connection.php");
    ?>
    <style>
        .main_container {
            background-image: url('bg1.jpg');
            height: 110%;
            width: 100%;
            background-size: 150%;
            position: absolute;
            background-repeat: no-repeat;
        }
        #form_wrapper
        {
            position: absolute;
            width: 80%;
            top: 13%;
        }
         @media  only screen and ( max-width:  760px){
            .main_container
            {
                height: 110%;
                width: 100%;
                background-size: cover;
                position: absolute;
            }
            #form_wrapper
        {
            position: absolute;
            width: 70%;
        }
        #form_wrapper img
        {
            display: none;
        }


        }
            
        .nav_main
        {
            z-index: 170;
        }
    </style>


    <div class="container-fluid main_container">
    <nav class="navbar navbar-expand-sm navbar-dark  nav_main " style="background-color:black;">
        <a href="#" class="navbar-brand">My Brand</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#MyNavbarBtn">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="MyNavbarBtn">
        <ul class="navbar-nav ">
            <li class="nav-item active">
            <a href="insert.php" class="nav-link">Registration</a>
        </li>
        <li class="nav-item ">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="drop">Services <span class="caret"></span></a>
            <ul class="dropdown-menu text-center bg-light text-black-50" area-labelledby="drop">
                <li class=" dropdown-item">Link 1</li>
                <div class="dropdown-divider"></div>
                <li class=" dropdown-item">Link 2</li>
                <div class="dropdown-divider"></div>
                <li class=" dropdown-item">Link 3</li>
                <div class="dropdown-divider"></div>
            </ul>
        </li>
        <li class="nav-item ">
            <a href="view.php" class="nav-link">View</a>
            
        </li>

        </ul>
    </div>
    </nav>
</div>
    </div>
<?php
if (isset ($_POST['btn']))
{

$name = $_POST['nme'];
$passwrd = $_POST['pswd'];
$number = $_POST['numbr'];
$date = $_POST['dte'];
$email = $_POST['emal'];

$query = "insert into signup (Name,Email,Password,Number,Date) values('$name','$email','$passwrd','$number','$date')";
if (mysqli_query($con, $query) ) 
{
  echo "successful";
}
else{
  echo "unsuccessful";
}

}

?>

        <div class="row  justify-content-center  ">
            <div class="col-lg-8 col-sm-8 bg-info d-flex flex-nowrap " id="form_wrapper" >
                <div class="text-white col-sm-12 col-lg-6 col-md-8 ml-lg-5 m-lg-5 ">
                    <form method="POST"  class="form-group col-sm-12 col-lg-8 col-md-10 ">
                        <label>User Name</label>
                        <input type=" text" class="form-control" name="nme" required placeholder="Enter your name">
                        <label>Email Address</label>
                        <input type=" text" class="form-control" name="emal" required placeholder="example@example.com">
                        <label>Password</label>
                        <input type=" password" class="form-control" name="pswd" required
                            placeholder="Must contain atleast 8 characters" minlength="8">
                        <label>Contact Number</label>
                        <input type=" number" class="form-control" name="numbr" required
                            placeholder="Enter your Phone Number">
                        <label>Date of birth</label>
                        <input type="date" class=" form-control"name="dte">
                        <input type="submit" class="  btn btn-group btn-danger  mt-3 " name="btn"
                            value="Submit">
                    </form>
                </div>
                <div class="col-lg-4 col-md-4  mt-5 ">
                    <img src="register1.gif" alt="" class=" img-fluid " >
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>

</body>

</html>