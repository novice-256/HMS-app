<?php
$con = mysqli_connect('localhost','root','','registration');
$name = $_POST['nme'];
$passwrd = $_POST['pswd'];
$number = $_POST['numbr'];
$date = $_POST['dte'];
$email = $_POST['emal'];

$query = "insert into signup (Name,Email,Password,Number,Date) values('$name','$email','$passwrd','$number','$date')";

if (mysqli_query($con, $query))
{
  echo "successful";
}
else{
  echo "unsuccessful";
}
?>

<html>
<body>

Welcome <?php echo $_POST["nme"]; ?><br>
Your email address is: <?php echo $_POST["emal"];?>

</body>
</html>















































