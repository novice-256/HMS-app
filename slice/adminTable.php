
   <div class="col-md-6 col-sm-12  ">
<table class="table  border-cus table-hover ">

<tbody class="">
<tr class="sticky_table bg-cus">        
<th >Department</th>
<th>Add</th>

</tr>




<?php
   $view_depart = mysqli_query($con, "select * from doctorspecilization");

while($show_depart = mysqli_fetch_array($view_depart))
{    


     ?>
    <tr class=" table-light text-dark">
    <td ><?php echo $show_depart['specilization']; ?></td>
    <td> <a href="department"><i class="fa-solid fa-plus"></i></a></td>

    </tr>
    <?php
}
  
   ?>     
    
</tbody>
</table>
</div>
<div class="col-md-4 col-sm-12   ">
<table class="table border-cus table-hover col-12" >

<tbody class="">
<tr class="sticky_table bg-cus"> 
<th >name</th>
<th >Queries</th>
<th>Go to</th>

</tr>




<?php
$view_queries= mysqli_query($con, "select * from contactUs");

while($show_queries = mysqli_fetch_array($view_queries))
{    


?>
<tr class=" table-light text-dark">
<td ><?php echo $show_queries['user_name']; ?></td>
<td ><?php echo $show_queries['message']; ?></td>
<td  data-toggle="tooltip" data-placement="top" title="View All" >
<a href="queries"target="_blank">
<i class="fa-solid fa-up-right-from-square"></i></a> </td>


</td>
</tr>
<?php
}

?>     

</tbody>
</table>
</div>
<div class="col-md-4 col-sm-12  ">
<table class="table border-cus text-center table-hover  " >

<tbody class="">
<tr class="sticky_table bg-cus">        

<th>Dr. Name</th>
<th>Assigned room</th>
<th></th>


</tr>




<?php
$view_doc = mysqli_query($con, "select * from doctor");

while($show_doc = mysqli_fetch_array($view_doc))
{    


?>
<tr class=" table-light text-dark">

<td ><?php echo $show_doc['docName']; ?></td>
<td ><?php echo $show_doc['room_id']; ?></td>

<td> <a href="employee?id=<?php echo $show_doc['id'];?>">view</a></td>

</tr>
<?php
}

?>     

</tbody>
</table>
</div>