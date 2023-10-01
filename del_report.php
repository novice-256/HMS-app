<?php
include("connection.php");
$id =$_GET ['id'];
mysqli_query($con , "DELETE FROM report WHERE id = '$id'");
header("location:report");
?>