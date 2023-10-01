<?php
include("connection.php");
$id =$_GET ['id'];
mysqli_query($con , "DELETE FROM appointment WHERE id = '$id'");
header("location:appointment");
?>