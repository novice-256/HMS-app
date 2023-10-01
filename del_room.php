<?php
include("connection.php");
$id =$_GET ['id'];
mysqli_query($con , "DELETE FROM room WHERE id = '$id'");
header("location:room");
?>