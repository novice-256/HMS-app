
     
                <div class="card-horizontal bg-light">
                    <div class="img-square- m-0 p-3 ">
                    <img class="img-thumbnail" src="assets\images\img_avatar.png" alt="Card image cap">
                    </div>
                    <div class="card-body shadow">
                        <?php if($user){?>
                        <h4 class="card-title text-center bg-cus pb-2 pt-2  "><?php echo $auth_user['fullName'] ?></h4>
                        <div class="user-data">
   <li class="list-inline-item "><span><?php echo $auth_user['email'] ?></li> <br> 
   <li class="list-inline-item text-capitalize "> <span><?php echo $auth_user['gender'] ?></li><br> 
   <li class="list-inline-item text-capitalize "> <span><?php echo $auth_user['city'] ?></li>
   <li class="list-inline-item text-capitalize "> <span><?php echo $auth_user['address'] ?></li>
   <a href="user_profile?id=<?php echo $id?>">  <small class="text-muted ">View Profile</small> </a>
   <a href="update_user?id=<?php echo $id?>">  <small class="text-muted float-right mr-3 ">Edit profile</small> </a>
   </div> 
   <?php }?>

<?php if($doctor){?>

   <h4 class="card-title text-center bg-cus  pb-2 pt-2  ">Dr.<?php echo $auth_user['docName'] ?></h4>
                        <div class="user-data">
   <li class="list-inline-item "><span><?php echo $auth_user['docEmail'] ?></li> <br> 
   <li class="list-inline-item text-capitalize "> <span><?php echo $auth_user['contactno'] ?></li><br> 
   <li class="list-inline-item text-capitalize "> <span><?php echo $auth_user['specilization'] ?></li>
   <li class="list-inline-item text-capitalize "> <span><?php echo $auth_user['address'] ?></li>
   <a href="Employee">  <small class="text-muted ">View Profile</small> </a>
   <a href="edit_doc?id=<?php echo $id?>"> <small class="text-muted float-right mr-3">Edit profile</small> </a>

</div>                        
<?php }?>
                    </div>
                </div>
              
        
  