<?php

// $file = $_FILES['file'];

// $fileName = $_FILES['file']['name'];
// $fileTmpName = $_FILES['file']['tmp_name'];
// $fileSize = $_FILES['file']['size'];
// $fileError = $_FILES['file']['error'];
// $filetType= $_FILES['file']['type'];

// $filetExt = explode('.',$fileName);
// $allowed= array('jpg','svg','png','jpeg');
// $filetActualExt = strtolower(end($filetExt));

//     if (in_array($filetActualExt,$allowed)){
//         if ($fileError===0){
//             if ($fileSize<1000000){
//              $filetNewName = uniqid('',true).".".$filetActualExt;
//              $fileDest = 'uploads/'.$filetNewName;
//              move_uploaded_file($fileTmpName,$fileDest);
//              $query = "insert into report (reportName,reportDesc,file_dest)
//              values('$reportName','$reportDesc','$file_dest')";
//                  if (mysqli_query($con, $query)) {
//                 $success="Successful";
//                 header("Refresh:1;URL=report.php");
//                  } else{ echo '<script> alert("Problem in query")</script>';} 

           
//             }else{ echo '<script> alert("Problem in size")</script>';} 
//         }else{ echo '<script> alert("file error")</script>';} 
//     } else{ echo '<script> alert("Problem in file array ")</script>';}   

?>


<!-- }else{ echo '<script> alert("',$fileError,'")</script>';}  -->
