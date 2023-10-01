<?php
include("connection.php");
$id =$_GET ['id'];
mysqli_query($con , "DELETE FROM account WHERE id = '$id'");
header("location:account");
?>