         <!--  patients  table  available for doctor  -->

         <div class="col-md-6 col-sm-12  ">
<table class="table  border-cus table-hover ">

<tbody class="">
<tr class="sticky_table bg-cus">        
<th >User ID</th>
<th >Appointment Date</th>
<th>Appointment time</th>
<th>Go to</th>

</tr>


<!--  -->

<?php
   $view_appoint = mysqli_query($con, "select * from appointment where userId= $id");

while($show_appoint = mysqli_fetch_array($view_appoint))
{    


     ?>
    <tr class=" table-light text-dark">
    <td ><?php echo $show_appoint['userId']; ?></td>
<td ><?php echo $show_appoint['appointmentDate']; ?></td>
<td ><?php echo $show_appoint['appointmentTime']; ?></td>

<td  data-toggle="tooltip" data-placement="top" title="View All" >
<a href="employee?id=<?php echo $show_appoint['id'];?>">view</a>

</td>
    </tr>
    <?php
}
  
   ?>     
 
</tbody>
</table>
<?php
   $view_appoint = mysqli_query($con, "select * from appointment where doctorId= $id");
   $show_appoint = mysqli_fetch_array($view_appoint);
if(empty($show_appoint['id'])){
  
   ?>  
<div class="d-flex align-items-center justify-content-center bg-transparent border-0 m-0 p-0">
 <b class="text-muted mb-4">No data available </b>
</div>

<?php
}
?>  
</div>
         <!--  patients  table  available for doctor  -->

         <div class="col-md-6 col-sm-12  ">
<table class="table  border-cus table-hover ">

<tbody class="">
<tr class="sticky_table bg-cus">        
<th >amount</th>
<th >bill_status</th>
<th>Pay Bill</th>

</tr>




<?php
   $view_patient = mysqli_query($con, "select * from account where user_id= $id");

while($show_patient = mysqli_fetch_array($view_patient) )
{    

   // !empty($show_appoint['id'])
     ?>
    <tr class=" table-light text-dark">
    <td ><?php echo $show_patient['amount']; ?></td>
<td ><?php echo $show_patient['bill_status']; ?></td>
<td  data-toggle="tooltip" data-placement="top" title="pay online" >
<a href="queries"target="_blank">
<i class="fa-solid fa-credit-card"></i></a> </td>


</td>

    </tr>
    <?php
}
  
   ?>     
 
</tbody>
</table>
<?php
   $view_patient = mysqli_query($con, "select * from appointment where doctorId= $id");
   $show_patient = mysqli_fetch_array($view_patient);

if(empty($show_patient['id'])){
  
   ?>  
<div class="d-flex align-items-center justify-content-center bg-transparent border-0 m-0 p-0">
 <b class="text-muted mb-4">No data available </b>
</div>

<?php
}
?>  
</div>
