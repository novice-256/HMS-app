<!DOCTYPE html>
<html lang="en">
<head>
    <?php session_start();
    empty($_SESSION['role'])?header("Location: login.php"):'';
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMS</title>
</head>
<body>
    <style>
.error {
position: absolute;
top:40%;
left:30%;
color:red;
text-shadow: .5px .5px black;

  font-family: Arial, Helvetica, sans-serif;
  font-size:30px


}
@media only screen and (max-width:768px) {
    .error {

top:30%;
left:0;
color:red;
text-shadow: .5px .5px black;
text-align:center;

  font-family: Arial, Helvetica, sans-serif;
  font-size:20px


}
}
    </style>
    <div class="error">
<h1>401 Authorization Required</h1>

    </div>
</body>
</html>