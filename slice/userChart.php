
<div class="welcome_sec">
    <?php  

Include('slice/welcomeCard.php');
?>
    
    
    </div>
<div class="d-flex justify-content-start mb-3" >
  <!-- charts slice  -->

  
   <div class="col-md-6 charts-lg col-sm-12  align-items-center" >
     <?php
          $No_Appointments=('<span class="alert-warning  p-2 position-absolute " style="top:20%;left:20%">
                            No Appointments Available
                            </span>');
          $No_Patients=('<span class="alert-warning  p-2 position-absolute " style="bottom:10%; left:20%">
                        No Patients Data available 
                        </span>');
                        ?>

      <?php if($show_total===0){ echo $No_Appointments;} ?> 
     <canvas id="myChart1" class="bg-light "style="max-width:350px"></canvas> </br>  
     
     <?php if($show_total_bill==0){ echo $No_Patients;} ?>  
    <canvas id="myChart2" class="bg-light "style="max-width:350px"></canvas>

  </div>
</div>

