
<?php
//         <!-- chart data for appointment  -->
if($admin){
          $get_total= mysqli_query($con,"select count(id) AS NumberOfAppoint from appointment ");
          $get_pending= mysqli_query($con,"select count(id) AS NumberOfActive from appointment where userStatus=0");
          $no_of_total= mysqli_fetch_array($get_total);
          $no_of_pending= mysqli_fetch_array($get_pending);
          $show_total= $no_of_total['NumberOfAppoint'];
          $show_pending=$no_of_pending['NumberOfActive'];
         $appoint_percent= $show_pending /$show_total *100;
          
      
        //         <!-- chart data for room  -->
      
          $get_total_room= mysqli_query($con,"select count(id) AS NumberOfRooms from room ");
          $get_assigned_room= mysqli_query($con,"select count(id) AS NumberOfActiveRooms from doctor where room_id>0");
          $no_of_total_room= mysqli_fetch_array($get_total_room);
          $no_of_assigned_room= mysqli_fetch_array($get_assigned_room);
          $show_total_room= $no_of_total_room['NumberOfRooms'];
          $show_assigned_room=$no_of_assigned_room['NumberOfActiveRooms'];
          $room_percent= $show_assigned_room /$show_total_room *100;
      
            //         <!-- chart data for patients  -->
      
            $get_total_patient= mysqli_query($con,"select count(ID) AS NumberOfPatients from tblpatient ");
            $get_admitted_patient= mysqli_query($con,"select count(ID) AS NumberOfActivePatients from tblpatient where pat_status=0");
            $no_of_total_patient= mysqli_fetch_array($get_total_patient);
            $no_of_discharged_patient= mysqli_fetch_array($get_admitted_patient);
            $show_total_patient= $no_of_total_patient['NumberOfPatients'];
            $show_discharged_patient=$no_of_discharged_patient['NumberOfActivePatients'];
         $patient_percent= $show_discharged_patient /$show_total_patient *100;
      
           //echo '<script> alert("',$show_discharged_patient,'")</script>';
            
            //         <!-- chart data for users  -->
      
             $get_total_user= mysqli_query($con,"select count(ID) AS NumberOfUser from user ");
             $get_total_doctor= mysqli_query($con,"select count(ID) AS NumberOfDoctor from doctor ");
             $get_total_admin= mysqli_query($con,"select count(ID) AS NumberOfAdmin from admin ");
             $no_of_total_user= mysqli_fetch_array($get_total_user);
             $no_of_total_doctor= mysqli_fetch_array($get_total_doctor);
             $no_of_total_admin= mysqli_fetch_array($get_total_admin);
          $show_total_user=$no_of_total_user['NumberOfUser'];
          $show_total_doctor=$no_of_total_doctor['NumberOfDoctor'];
          $show_total_admin=$no_of_total_admin['NumberOfAdmin'];
          
          $chartOne_X_val = array('Un-approved','Total'); 
          $chartTwo_X_val = array('Assigned','Available'); 
          $chartThree_X_val = array('Admitted','Discharged'); 
          
          $chartOne_Y_val = array( $show_pending, $show_total); 
          $chartTwo_Y_val = array( $show_assigned_room, $show_total_room); 
          $chartThree_Y_val = array( $show_discharged_patient, $show_total_patient); 
}
else if($doctor){
//         <!-- chart data for appointment  -->

  $get_total= mysqli_query($con,"select count(id) AS NumberOfAppoint from appointment where doctorId='$id' ");
  $get_pending= mysqli_query($con,"select count(id) AS NumberOfActive from appointment where userStatus=0 && doctorId='$id'");
  $no_of_total= mysqli_fetch_array($get_total);
  $no_of_pending= mysqli_fetch_array($get_pending);
  $show_total=!empty( $no_of_total['NumberOfAppoint'])?$no_of_total['NumberOfAppoint']:0;
  $show_pending=!empty( $no_of_pending['NumberOfActive'])?$no_of_total['NumberOfAppoint']:0;
  
//         <!-- chart data for patient  -->
  
  $get_total_patient= mysqli_query($con,"select count(ID) AS NumberOfPatients from tblpatient where Docid='$id' ");
  $get_admitted_patient= mysqli_query($con,"select count(ID) AS NumberOfActivePatients from tblpatient where pat_status=0 && Docid='$id'");
  $no_of_total_patient= mysqli_fetch_array($get_total_patient);
  $no_of_discharged_patient= mysqli_fetch_array($get_admitted_patient);
  $show_total_patient= $no_of_total_patient['NumberOfPatients'];
  $show_discharged_patient=$no_of_discharged_patient['NumberOfActivePatients'];

  $chartOne_X_val = array('Un-approved','Total'); 
  $chartOne_Y_val = array( $show_pending, $show_total); 
  
  $chartTwo_X_val = array('Discharged','Admitted'); 
  $chartTwo_Y_val = array( $show_discharged_patient, $show_total_patient); 


}
else if($user){
  $get_total= mysqli_query($con,"select count(id) AS NumberOfAppoint from appointment where userId='$id' ");
  $get_pending= mysqli_query($con,"select count(id) AS NumberOfActive from appointment where userStatus=0 && userId='$id'");
  $no_of_total= mysqli_fetch_array($get_total);
  $no_of_pending= mysqli_fetch_array($get_pending);
  $show_total=!empty( $no_of_total['NumberOfAppoint'])?$no_of_total['NumberOfAppoint']:0;
  $show_pending=!empty( $no_of_pending['NumberOfActive'])?$no_of_total['NumberOfAppoint']:0;
  

  $get_total_bill= mysqli_query($con,"select count(ID) AS NumberOfBills from account  where bill_status=0 && user_id='$id' ");
  $get_unpaid_bill= mysqli_query($con,"select count(ID) AS NumberOfActiveBills from account where bill_status=0 && user_id='$id'");
  $no_of_total_bill= mysqli_fetch_array($get_total_bill);
  $no_of_unpaid_bill= mysqli_fetch_array($get_unpaid_bill);
  $show_total_bill= $no_of_total_bill['NumberOfBills'];
  $show_unpaid_bill=$no_of_unpaid_bill['NumberOfActiveBills'];

  
  
  $chartOne_X_val = array('Un-approved','Total'); 
  $chartOne_Y_val = array( $show_pending, $show_total); 
  
  $chartTwo_X_val = array('Un-Paid','Total'); 
  $chartTwo_Y_val = array( $show_unpaid_bill, $show_total_bill); 

}
