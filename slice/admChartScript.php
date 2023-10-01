<script>
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
  "#0763f7",
  "#006910",
  "#52010e",

 
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

</script>