<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://use.fontawesome.com/cb7df9e51e.js"></script>

   
                   <!-- Links slice  -->

                   <?php
                     Include("connection.php");
                     Include("slice/link.php");
                     Include("slice/chartsData.php");
                     $admin&&  $header_link= 'add_doctor';
                     $admin&&  $header_btn_text='Add Doctor';
                     $user&& $header_link= 'add_appoint';
                     $user&& $header_btn_text='New Appointment';
                     $doctor&&  $header_link= 'edit_doc';
                     $doctor&& $header_btn_text='Edit Profile';
?>
</head>

    
<body class=" m-0 " >
<div class="container-fluid d-flex main m-0 p-3"    > 
  <!-- Navigation slice  -->

  <?php  

  Include('slice/nav.php');
  ?>

 <section class="container-fluid upper_sec bg-cus-2 m-0 p-0 border-right " >
    <div class="layer_border border-left" >

  <!-- header slice  -->
    <?php  

Include('slice/header.php');
?>
    
    
    <div class="mid_wrap col-12  ">
      
<section class="col-12 m-0 p-0 charts-main" >
 
  <!-- header slice  -->
  <?php  

$admin&&Include('slice/adminChart.php');
$doctor&&Include('slice/doctorChart.php');
$user&&Include('slice/userChart.php');

?>
    
    
  
  
</section>
<section class="info-sec row  ">
 <div class="col-12 info-div ">

   <!-- Tables section slice  -->

   <?php
   $admin && Include("slice/adminTable.php");
   $doctor && Include("slice/doctorTable.php");
   $user  && Include("slice/userTable.php");

?>


</div>
      </div>
</section>


    </div>
    
   
    </div>

</section>

</div>
   <!-- JS Links slice  -->

   <?php
    Include("slice/script.php")
?>

<script>

      //         <!-- chart script for appointments  -->

var chartOne_X_val = ['<?php echo $chartOne_X_val[0]?>','<?php echo $chartOne_X_val[1]?>']
var chartOne_Y_val = ['<?php echo $chartOne_Y_val[0]?>','<?php echo $chartOne_Y_val[1]?>']

var chartTwo_X_val = ['<?php echo $chartTwo_X_val[0]?>','<?php  echo $chartTwo_X_val[1]?>']
var chartTwo_Y_val = ['<?php echo $chartTwo_Y_val[0]?>','<?php echo $chartTwo_Y_val[1]?>']

var xValues =chartOne_X_val;
var yValues = chartOne_Y_val;
var barColors = [
  "rgba(63,108,251,1)",
  "#00aba9",
 
];

new Chart("myChart1", {
  type: "doughnut",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Number of Appointments"
    }
  }
});
      //         <!-- chart script for rooms  -->





var xValues = chartTwo_X_val
var yValues =chartTwo_Y_val
var barColors = [
  "rgba(63,108,251,1)",
  "#00aba9",
 
];

new Chart("myChart2", {
  type: "doughnut",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Number of Rooms"
    }
  }
});
    


//         <!-- chart script for patients  -->



<?php 
if($admin){
?>
  var chartOne_X_val = ['<?php echo $chartOne_X_val[0]?>','<?php echo $chartOne_X_val[1]?>']
var chartOne_Y_val = ['<?php echo $chartOne_Y_val[0]?>','<?php echo $chartOne_Y_val[1]?>']

var chartTwo_X_val = ['<?php echo $chartTwo_X_val[0]?>','<?php  echo $chartTwo_X_val[1]?>']
var chartTwo_Y_val = ['<?php echo $chartTwo_Y_val[0]?>','<?php echo $chartTwo_Y_val[1]?>']


var chartThree_X_val = ['<?php echo $chartThree_X_val[0]?>','<?php echo $chartThree_X_val[1]?>']
var chartThree_Y_val = ['<?php echo $chartThree_Y_val[0]?>','<?php echo $chartThree_Y_val[1]?>']

new Chart("myChart3", {
  type: "doughnut",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Number of Patients"
    }
  }
});

      //         <!-- chart script for users  -->
 

var xValues = ["User", "Doctor", "Admin"];
var yValues = [<?php echo $show_total_user?>, <?php echo $show_total_doctor?>, <?php echo $show_total_admin ?>];
var barColors = [
  "#fcb045",
  "#0fb841",
  "#fd1d1d",

 
];

new Chart("myChart4", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "All Users"
    }
  }
});
<?php
}

?>

// alert(window.screen.width)
</script>



</body>

</html>