<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<style>
    .container_main{
        background-image: url('bg2.jpg');
            height: 100%;
            width: 100%;
            background-size: 100%;
            position: absolute;
            background-repeat: no-repeat;
        

    }
</style>
<body>
    <div class="container-fluid container_main m-0 p-0">
<nav class="navbar navbar-expand-sm navbar-dark  nav_main " style="background-color:black;">
        <a href="#" class="navbar-brand">My Brand</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#MyNavbarBtn">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="MyNavbarBtn">
        <ul class="navbar-nav ">
            <li class="nav-item ">
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
        <li class="nav-item  active">
            <a href="view.php" class="nav-link">View</a>
            
        </li>

        </ul>
    </div>
    </nav>

    <?php
    Include("connection.php")
    ?>
<table class="table table-dark table-bordered mt-5 table-hover ">
    <?php
    
    $view = mysqli_query($con, "select * from signup");

    ?>
        <tbody>
            <tr>
                <th>Id</th>
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
            <td ><a href="upd.php?id=<?php echo $show['id']?>"><input type="button" value="Update" class="btn btn-primary"> </a>
            <a href="del.php?id=<?php echo $show['id']?>"><input type="button" value="Delete" class="btn btn-danger"> </a></td>

            </tr>
            <?php
        }
          
           ?>     
            
        </tbody>
    </table>

    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>