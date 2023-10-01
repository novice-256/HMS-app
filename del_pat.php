<?php
include("connection.php");
$id =$_GET ['id'];
mysqli_query($con , "DELETE FROM tblpatient WHERE id = '$id'");
header("location:employee");
?>