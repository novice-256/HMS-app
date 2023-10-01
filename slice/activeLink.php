
<!-- add after mid_wrap -->

<nav class="nav">
<a class="nav-link" href="Employee.php">Employee</a>
  <a class="nav-link" href="#">|</a>

  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Add Doctor</a>
</nav>



<script>

      //         <!-- chart script for appointments  -->

var xValues = [ "Un-approved", "Total"];
var yValues = [ <?php echo $show_pending?>, <?php echo $show_total?>];
var barColors = [
  " rgb(50,66,162)",
  "#cceff9",
 
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



var xValues = [ "Assigned", "Total"];
var yValues = [ <?php echo $show_assigned_room?>, <?php echo $show_total_room?>];
var barColors = [
  " rgb(50,66,162)",
  "#cceff9",
 
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


var xValues = [ "Admitted", "Total"];
var yValues = [ <?php echo $show_discharged_patient?>, <?php echo $show_total_patient?>];
var barColors = [
  " rgb(50,66,162)",
  "#cceff9",
 
];

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
  "#2b5797",
  "#00aba9",
  "#b91d47",

 
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