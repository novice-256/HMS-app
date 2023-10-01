<?php
include("connection.php");
$id =$_GET ['id'];
mysqli_query($con , "DELETE FROM doctor WHERE id = '$id'");
header("location:employee");
?>