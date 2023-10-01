

                <!-- header for large screen  -->

<div class="navbar_wrap mt-0 col-12 mb-3 p-2 header-lg bg-cus">
    <div class="row col-md-12 col-sm-12  " >
    <nav class="navbar bg-transparent  ">
  <form class="form-inline border-cus  bg-white ">
    <input class="form-control   bg-transparent border-0  " type="search" placeholder="Search" aria-label="Search">
    <button class="btn border-0" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
  </form>
  <div class="">
  
  
  <span  class="mt-4">
  <span id="form-butn" class="btn btn-outline-cus m-0 p-0 border-cus-low bg-light  ">
  <a href="<?php echo $header_link?>">
  <?php if($user || $doctor) {?>
  <a href="<?php echo $header_link.'?id='.$id?>">
<?php } ?>

    <button  class="btn border-0 order-cus-low" ><?php echo $header_btn_text ?> </button>
    <button class="btn border-0 fa-solid bg-cus fa-plus " type="submit"></button></span>
  </a>
  <i class="fa-solid fa-bell h5 ml-4 mr-4 "></i>


    </span>
    <div class="chip">
  <img src="assets\images\img_avatar.png" alt="Person" width="96" height="96">
  <?php echo $user_name?>
</div>

  </div>
    </nav>

    </div>
    </div>



                <!-- header for small screen  -->

    <div class="navbar_wrap mb-3 p-2 header-sm  bg-cus">
    <div class="row col-md-12 col-sm-12 bg-light  pl-2 bg-cus" >
    <nav class="navbar pb-4 pl-0 bg-cus text-light">
  <form class="form-inline col-6 m-0 p-0  ">
    <input class="form-control  bg-light border  " type="search" placeholder="Search" aria-label="Search">
    <button class="btn  btn-magnifying bg-light border border-right-0" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
  </form>
   <a href="add_doctor"><button class="btn border-0 fa-solid bg-cus-2 fa-plus " type="submit"></button>
 </a> <div class="d-flex align-items-center ">
    
    <div class="">
      
      
    <i class="fa-solid fa-bell mr-3  align-self-center " style="font-size:14pt !important"></i>
      
      
    </span></div>
    <div class="chip d-flex-column">
      
      <img src="assets\images\img_avatar.png" alt="Person" width="50" height="50"><br>
      <span class="text text-bold"><?php echo $user_name?></span> 
      
</div>

  </div>
    </nav>

    </div>
    </div>