<div class="d-flex align-items-center mb-3 myChart4" >
<div class=" myChart4" >
  
    <canvas id="myChart4"  class="bg-light" style="min-width:400px;max-width:500px" ></canvas>
    </div>
    <div class="col-md-6 charts-lg " >
     <canvas id="myChart2" class="bg-light "style="max-width:350px"></canvas> </br>   
    <canvas id="myChart1" class="bg-light " style="max-width:350px"></canvas></br> 
    <canvas id="myChart3" class="bg-light  "style="max-width:350px"></canvas></br> 
    
  </div>
</div>

<div class="charts-sm p-2 " style="min-width:350px">

<div class="progress mt-2 p-0" style="height:50px">

  <div class="position-absolute mt-4 ml-2 text-white  ">Appointments:
    <p class="float-right ml-2 ">

  <span >  <?php echo $show_pending?> </span>/
  <span > <?php echo $show_total?></span>
 
</p> 
</div>
  <div class="progress-bar bg-cus" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:  <?php echo $appoint_percent ?>%" ></div>
</div>

<div class="progress mt-2" style="height:40px">

  <div class="position-absolute mt-4 ml-2 text-white  ">Rooms:
    <p class="float-right ml-2 ">

  <span >  <?php echo $show_assigned_room?> </span>/
  <span > <?php echo $show_total_room?></span>
 
</p> 
</div>
  <div class="progress-bar bg-cus " role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:  <?php echo $appoint_percent ?>%" ></div>
</div>

<div class="progress mt-2" style="height:50px">

  <div class="position-absolute mt-4 ml-2 text-white  ">Patients:
    <p class="float-right ml-2 ">

  <span >  <?php echo $show_discharged_patient?> </span>/
  <span > <?php echo $show_total_patient?></span>
 
</p> 
</div>
  <div class="progress-bar bg-cus " role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:  <?php echo $appoint_percent ?>%" ></div>
</div>



  </div>