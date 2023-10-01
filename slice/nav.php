

  <section class="nav_wrapper  bg-cus  "   >
    <div class="nav_items  d-flex justify-content-around"style="height :100%;" >

    <table class="table align-self-center" style="height:fit-content">
    <tbody>
   
<?php
$role=array($doctor,$user);
$nav='';
$class;
switch ($role) {
  case $doctor===true:
    $nav = array('dashboard','Employee','Patient','Appointment');
    $class = array(
      'fa-solid fa-home ',
      'fa-solid fa-user-doctor ',
      'fa-solid fa-bed-pulse ',     
      'fa-solid fa-calendar-check',
    ); 


    break;
    case $user:
      $nav = array('dashboard','Patient','Report','Account','Appointment');
      $class = array(
        'fa-solid fa-home ',
        'fa-solid fa-bed-pulse ',
        'fa-solid fa-briefcase-medical ',
        'fa-solid fa-receipt ',
        'fa-solid fa-calendar-check',
       ); 
      break;
  default:
  $nav = array('dashboard','Employee','Patient','Department','Report','Account','Appointment','room');

  $class = array(
    'fa-solid fa-home ',
    'fa-solid fa-user-doctor ',
    'fa-solid fa-bed-pulse ',
    'fa-solid fa-building ',
    'fa-solid fa-briefcase-medical ',
    'fa-solid fa-receipt ',
    'fa-solid fa-calendar-check',
    'fa-solid fa-person-booth',); 
  
}
 for($i=0;$i<=count($nav)-1;$i++){
  
?>

       
        <tr>
            <td class="border-0"  >
            <a href="<?php echo $nav[$i]?>" >
            <i class="<?php echo $class[$i]?> p-3" id="<?php echo strtolower( $nav[$i])?>" ></i><b class="text-capitalize"><?php echo $nav[$i]?></b> 
            </a>   
          </td>
        </tr>
        <tr>
      
        <?php
   }
      ?>
    </tbody>
   
</table>

 

<div class="position-absolute sign_out p-3">

       
<a href="logout" class="link text-danger m-0 p-0">
  <i class="fa-solid fa-arrow-right-from-bracket mr-2 "></i></i><b>Logout</b> </a>


</div>

    </div> 

</section > 

<script>
// function toggle_nav(){
//   if()
// $("#id").css("display", "none");
// $("#id").css("display", "block");}
</script>