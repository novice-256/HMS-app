<?php


Include("connection.php");

session_start();
if(empty($_SESSION['role'])){
     header("Location:login.php");}else{
$doctor=false;
$user=false;
$admin=false;
$role = $_SESSION['role'][0];
$user_name;
$id=$_SESSION['role'][1];
$query = mysqli_query($con,"select * from $role where id = '$id' ");
$auth_user = mysqli_fetch_array( $query);

if($role=='doctor'){
    $doctor=true;

    $user_name=$auth_user['docName'];
}

if($role =='user'){
    $user=true;
    $user_name=$auth_user['fullName'];
    // echo '<script> alert("',$user_name,'")</script>';


}
if($role =='admin'){
    $admin=true;
    $user_name=$auth_user['role'];

}
}
?>