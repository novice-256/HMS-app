<?php
include("connection.php");
$id =$_GET ['id'];
mysqli_query($con , "DELETE FROM doctorspecilization WHERE id = '$id'");
header("location:department");
?>