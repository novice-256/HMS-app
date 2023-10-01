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
            <li class="nav-item ">
            <a href="insert" class="nav-link">Registration</a>
        </li>
        <li class="nav-item active">
            <a href="regWithvalid" class="nav-link">Validation</a>
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
            <a href="view" class="nav-link">View</a>
            
        </li>

        </ul>
    </div>
    </nav>
</div>
    </div>
<?php
if (isset ($_POST['btn']))
{

$name =mysqli_escape_string($con,$_POST['nme']);
$passwrd = mysqli_escape_string($con,$_POST['pswd']);
$confPasswrd = mysqli_escape_string($con,$_POST['confPswd']);
$number = mysqli_escape_string($con,$_POST['numbr']);
$date = mysqli_escape_string($con,$_POST['dte']);
$email = mysqli_escape_string($con,$_POST['emal']);
$encpasswrd =password_hash($passwrd,PASSWORD_BCRYPT);
$encconfPasswrd= password_hash($confPasswrd,PASSWORD_BCRYPT);

$compareQuery = mysqli_query($con,"select * from signup where Email ='$email'");


$check = mysqli_num_rows($compareQuery);
  if($check >= 1)
  {
     echo '<script> alert("Email Already Taken")</script>'; 
  }
  else
    {
     if($passwrd === $confPasswrd)
        {
            $query = "insert into signup (Name,Email,Password,Number,Date,conPassword) values('$name','$email','$encpasswrd','$number','$date','$encconfPasswrd')";

         if (mysqli_query($con, $query)) 
             { 
                $success="Successful";
                header("Refresh:1;URL=regWithValid");

             }
             else
             {
                echo '<script> alert("Problem in Registration")</script>'; 

             }
        }
        else
        {
            echo '<script> alert("Password Dont match")</script>'; 


        }
    }
}

?>

        <div class="row  justify-content-center  ">
            <div class="col-lg-8 col-sm-8 bg-info d-flex flex-nowrap " id="form_wrapper" >
                <div class="text-white col-sm-12 col-lg-6 col-md-8 ml-lg-5 m-lg-5 ">
                    <form method="POST"  class="form-group col-sm-12 col-lg-8 col-md-10 ">
                        <label>User Name</label>
                        
                        <input type=" text" class="form-control" name="nme"  value="<?php 
                        if(isset($_POST['btn'])){
                        echo $_POST['nme'];} ?>" required placeholder="Enter your name">
                        <label>Email Address</label>
                        <input type=" text" class="form-control" name="emal" required value="<?php if(isset($_POST['btn'])){
echo $_POST['emal'];} ?>"  placeholder="example@example.com">
                        <label>Password</label>
                        <input type=" password" class="form-control" name="pswd" required value="<?php if(isset($_POST['btn'])){
echo $_POST['pswd'];} ?>" 
                            placeholder="Must contain atleast 8 characters" minlength="8">
                            <label>Confirm Password</label>
                        <input type=" password" class="form-control" name="confPswd" required value="<?php if(isset($_POST['btn'])){
echo $_POST['confPswd'];} ?>" 
                            placeholder="Must contain atleast 8 characters" minlength="8">

                        <label>Contact Number</label>
                        <input type=" number" class="form-control" name="numbr" required value="<?php if(isset($_POST['btn'])){
echo $_POST['numbr'];} ?>" placeholder="Enter your Phone Number">
                        <label>Date of birth</label>
                        <input type="date" class=" form-control"name="dte" value="<?php if(isset($_POST['btn'])){
echo $_POST['dte'];} ?>" >
                        <input type="submit" class="  btn btn-group btn-danger  mt-3 " name="btn"
                            value="Submit">
                            <?php
                            if(isset($_POST['btn'])){?>
                            <br>
                            <br>
    <strong class=" alert alert-success"> <?php echo $success;}?></strong> 
      
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