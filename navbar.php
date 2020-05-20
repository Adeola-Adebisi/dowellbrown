
<?php
function shownavbar3($db_server){
$query = "SELECT DISTINCT institution FROM resource";
$result = mysqli_query($db_server,$query);
 ?>
 <ul class="nav flex-column flex-nowrap overflow-hidden">
          <li class="nav-item">
                    <a class="nav-link text-truncate" href="../../Dashboard/index.php"><span class="p-1 d-none d-sm-inline pull-left"><i class="fa fa-table"></i></span>Dashboard</a>
                </li>
          
                <li class="nav-item">
                    <a class="nav-link text-truncate" href="../../index.php"><span class="p-1 d-none d-sm-inline pull-left"><i class="fa fa-home"></i></span>Home</a>
                </li>




 <?php
    while($row = mysqli_fetch_array($result)){
 
    
        $institution = $row['institution'];   
        //echo $row['department'];  
        //echo $row['year'];
        //echo $row['coursetitle'];
    (string)$institutions[$institution]=$institution;
    }

   
   
     ?>
<li class="nav-item">
                    <a class="nav-link collapsed text-truncate" href="#submenu1" data-toggle="collapse" data-target="#submenu1"><span class="p-1 d-none d-sm-inline"> <i class="fa fa-table"></i></span>Past questions</a>
    <div class="collapse" id="submenu1" aria-expanded="false">
                        <ul class="flex-column pl-2 nav">
                            <li class="nav-item"><a class="nav-link py-0" href="#"><span>select school</span></a></li>
                            <li class="nav-item">
                          
<?php
   
    
    
   
    ksort($institutions);
     foreach($institutions as $institution){
         $id = str_replace(' ', '-', $institution).rand();
       ?>


                            
                                <a class="nav-link collapsed py-1 bg-light " href="#<?php echo $id;?>" data-toggle="collapse" data-target="#<?php echo $id;?>"><span><?php echo $institution;?></span></a>
                                <div class="collapse" id="<?php echo $id;?>" aria-expanded="false">
                                    <ul class="flex-column nav pl-4">
                                        <li class="nav-item"><a class="nav-link py-0" href="#"><span>select department</span></a></li>
                                        <li class="nav-item">
          <?php
     $query = "SELECT DISTINCT  department FROM resource WHERE institution='$institution' ORDER BY department ASC";


$result = mysqli_query($db_server,$query);
 
 
    while($row = mysqli_fetch_array($result)){
 
    
        //echo $row['institution'];   
        $department = $row['department']; 
        (string)$departments[$department]=$department;
  
         $id2 = str_replace(' ', '-', $department).rand();
             
          ?>
             
             
                                            <a class="nav-link collapsed py-1 bg-light" href="#<?php echo $id2;?>" data-toggle="collapse" data-target="#<?php echo $id2;?>" href="#">
                                                <i class="fa fa-fw fa-dashboard"></i> <?php echo $department;?></a>
                                         <div class="collapse" id="<?php echo $id2;?>" aria-expanded="false">
                                    <ul class="flex-column nav pl-4">
                                      <li class="nav-item"><a class="nav-link py-0" href="#"><span>select year</span></a></li>
                                        <li class="nav-item">    
                                            
                                            
                                            
                   <?php
        
       $queryy = "SELECT DISTINCT  year FROM resource WHERE institution='$institution' AND department='$department' ";


$resultt = mysqli_query($db_server,$queryy);
 
 
    while($roww = mysqli_fetch_array($resultt)){
 
     $year = $roww['year']; 
//mysqli_close($db_server);
        $id3 = str_replace(' ', '-', $year).rand();
            ?>                          
                                            <li class="nav-item">
                                            <a class="nav-link p-1 bg-light" href="#" 
                                             onclick="showallcoursetitle('<?php echo $institution ?>','<?php echo $department?>','<?php echo $year ; ?>')">
                                                <i class="fa fa-fw fa-clock-o"></i><?php echo $year;?></a>
                                        
                                            
                                            
                                       
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
              <?php
       }?>                              
                                        </li>  
         </ul>
       </div>                              
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
    
          
          <?php
       }?>
                                           
                                          
                                            </li>  
         </ul>
       </div>
    
    
<?php
    
     }?>
    </li></ul></div></li> 
     
       
        <li class="nav-item active">
             
          <a class="nav-link collapsed text-truncate" href="#submenu2" data-toggle="collapse" data-target="#submenu2"><span class="p-1 d-none d-sm-inline pull-left"><i class="fa fa-info"></i> </span> About</a>
                    <div class="collapse" id="submenu2" aria-expanded="false">
          <ul class="nav-pills nav-stacked" style="list-style-type:none;">
            <li><a href="../../terms.php">Terms of use</a></li>
            <li><a href="../../privacy-policy.php">Privacy policies</a></li>
          </ul>
              </div>
        </li>
        
          
        <li>
          <a href="../../contact.php" class="nav-link collapsed text-truncate"><span class="p-1 d-none d-sm-inline pull-left"><i class="fa fa-phone "></i></span>Contact Us</a>
        </li>
      </ul>
<?php
}
?>




<?php
  function shownavbar2($db_server){
$query = "SELECT DISTINCT institution FROM resource";
$result = mysqli_query($db_server,$query);
 
  ?>

      <ul class="nav flex-column flex-nowrap overflow-hidden">
          <li class="nav-item">
                    <a class="nav-link text-truncate" href="../Dashboard/index.php"><span class="p-1 d-none d-sm-inline pull-left"><i class="fa fa-table"></i></span>Dashboard</a>
                </li>
          
                <li class="nav-item">
                    <a class="nav-link text-truncate" href="../index.php"><span class="p-1 d-none d-sm-inline pull-left"><i class="fa fa-home"></i></span>Home</a>
                </li>



 <?php
    while($row = mysqli_fetch_array($result)){
 
    
        $institution = $row['institution'];   
        //echo $row['department'];  
        //echo $row['year'];
        //echo $row['coursetitle'];
    (string)$institutions[$institution]=$institution;
    }

   
   
     ?>
<li class="nav-item">
                    <a class="nav-link collapsed text-truncate" href="#submenu1" data-toggle="collapse" data-target="#submenu1"><span class="p-1 d-none d-sm-inline pull-left"><i class="fa fa-table"></i></span>Past questions </a>
    <div class="collapse" id="submenu1" aria-expanded="false">
                        <ul class="flex-column pl-2 nav">
                            <li class="nav-item"><a class="nav-link py-0" href="#"><span>select school</span></a></li>
                            <li class="nav-item">
                          
<?php
   
    
    
   
    ksort($institutions);
     foreach($institutions as $institution){
         $id = str_replace(' ', '-', $institution).rand();
       ?>


                            
                                <a class="nav-link collapsed py-1 bg-light " href="#<?php echo $id;?>" data-toggle="collapse" data-target="#<?php echo $id;?>"><span><?php echo $institution;?></span></a>
                                <div class="collapse" id="<?php echo $id;?>" aria-expanded="false">
                                    <ul class="flex-column nav pl-4">
                                        <li class="nav-item"><a class="nav-link py-0" href="#"><span>select department</span></a></li>
                                        <li class="nav-item">
          <?php
     $query = "SELECT DISTINCT  department FROM resource WHERE institution='$institution' ORDER BY department ASC";


$result = mysqli_query($db_server,$query);
 
 
    while($row = mysqli_fetch_array($result)){
 
    
        //echo $row['institution'];   
        $department = $row['department']; 
        (string)$departments[$department]=$department;
  
         $id2 = str_replace(' ', '-', $department).rand();
             
          ?>
             
             
                                            <a class="nav-link collapsed py-1 bg-light" href="#<?php echo $id2;?>" data-toggle="collapse" data-target="#<?php echo $id2;?>" href="#">
                                                <i class="fa fa-fw fa-dashboard"></i> <?php echo $department;?></a>
                                         <div class="collapse" id="<?php echo $id2;?>" aria-expanded="false">
                                    <ul class="flex-column nav pl-4">
                                      <li class="nav-item"><a class="nav-link py-0" href="#"><span>select year</span></a></li>
                                        <li class="nav-item">    
                                            
                                            
                                            
                   <?php
        
       $queryy = "SELECT DISTINCT  year FROM resource WHERE institution='$institution' AND department='$department' ";


$resultt = mysqli_query($db_server,$queryy);
 
 
    while($roww = mysqli_fetch_array($resultt)){
 
     $year = $roww['year']; 
//mysqli_close($db_server);
        $id3 = str_replace(' ', '-', $year).rand();
            ?>                          
                                            <li class="nav-item">
                                            <a class="nav-link p-1 bg-light" href="#" 
                                             onclick="showallcoursetitle('<?php echo $institution ?>','<?php echo $department?>','<?php echo $year ; ?>')">
                                                <i class="fa fa-fw fa-clock-o"></i><?php echo $year;?></a>
                                        
                                            
                                            
                                       
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
              <?php
       }?>                              
                                        </li>  
         </ul>
       </div>                              
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
    
          
          <?php
       }?>
                                           
                                          
                                            </li>  
         </ul>
       </div>
    
    
<?php
    
     }?>
    </li></ul></div></li> 
        
        
        <li class="nav-item active">
             
          <a class="nav-link collapsed text-truncate" href="#submenu2" data-toggle="collapse" data-target="#submenu2"><span class="p-1 d-none d-sm-inline pull-left"><i class="fa fa-info"></i> </span> About</a>
                    <div class="collapse" id="submenu2" aria-expanded="false">
          <ul class="nav-pills nav-stacked" style="list-style-type:none;">
            <li><a href="../terms.php">Terms of use</a></li>
            <li><a href="../privacy-policy.php">Privacy policies</a></li>
          </ul>
              </div>
        </li>
        
          
        <li>
          <a href="../contact.php" class="nav-link collapsed text-truncate"><span class="p-1 d-none d-sm-inline pull-left"><i class="fa fa-phone "></i></span>Contact</a>
        </li>
      </ul>
     
          
          
<?php
}
?>




<?php
function shownavbar1($db_server){
$query = "SELECT DISTINCT institution FROM resource";
$result = mysqli_query($db_server,$query);
 ?>
 <ul class="nav flex-column flex-nowrap overflow-hidden">
          <li class="nav-item">
                    <a class="nav-link text-truncate" href="Dashboard/index.php"><span class="p-1 d-none d-sm-inline pull-left"><i class="fa fa-table"></i></span>Dashboard</a>
                </li>
          
                <li class="nav-item">
                    <a class="nav-link text-truncate" href="index.php"><span class="p-1 d-none d-sm-inline pull-left"><i class="fa fa-home"></i></span>Home</a>
                </li>




 <?php
    while($row = mysqli_fetch_array($result)){
 
    
        $institution = $row['institution'];   
        //echo $row['department'];  
        //echo $row['year'];
        //echo $row['coursetitle'];
    (string)$institutions[$institution]=$institution;
    }

   
   
     ?>
<li class="nav-item">
                    <a class="nav-link collapsed text-truncate" href="#submenu1" data-toggle="collapse" data-target="#submenu1"><span class="p-1 d-none d-sm-inline"><i class="fa fa-table"></i> </span>Past questions</a>
    <div class="collapse" id="submenu1" aria-expanded="false">
                        <ul class="flex-column pl-2 nav">
                            <li class="nav-item"><a class="nav-link py-0" href="#"><span></span>select school</a></li>
                            <li class="nav-item">
                          
<?php
   
    
    
   
    ksort($institutions);
     foreach($institutions as $institution){
         $id = str_replace(' ', '-', $institution).rand();
       ?>


                            
                                <a class="nav-link collapsed py-1 bg-light " href="#<?php echo $id;?>" data-toggle="collapse" data-target="#<?php echo $id;?>"><span><?php echo $institution;?></span></a>
                                <div class="collapse" id="<?php echo $id;?>" aria-expanded="false">
                                    <ul class="flex-column nav pl-4">
                                        <li class="nav-item"><a class="nav-link py-0" href="#"><span>select department</span></a></li>
                                        <li class="nav-item">
          <?php
     $query = "SELECT DISTINCT  department FROM resource WHERE institution='$institution' ORDER BY department ASC";


$result = mysqli_query($db_server,$query);
 
 
    while($row = mysqli_fetch_array($result)){
 
    
        //echo $row['institution'];   
        $department = $row['department']; 
        (string)$departments[$department]=$department;
  
         $id2 = str_replace(' ', '-', $department).rand();
             
          ?>
             
             
                                            <a class="nav-link collapsed py-1 bg-light" href="#<?php echo $id2;?>" data-toggle="collapse" data-target="#<?php echo $id2;?>" href="#">
                                                <i class="fa fa-fw fa-dashboard"></i> <?php echo $department;?></a>
                                         <div class="collapse" id="<?php echo $id2;?>" aria-expanded="false">
                                    <ul class="flex-column nav pl-4">
                                      <li class="nav-item"><a class="nav-link py-0" href="#"><span>select year</span></a></li>
                                        <li class="nav-item">    
                                            
                                            
                                            
                   <?php
        
       $queryy = "SELECT DISTINCT  year FROM resource WHERE institution='$institution' AND department='$department' ";


$resultt = mysqli_query($db_server,$queryy);
 
 
    while($roww = mysqli_fetch_array($resultt)){
 
     $year = $roww['year']; 
//mysqli_close($db_server);
        $id3 = str_replace(' ', '-', $year).rand();
            ?>                          
                                            <li class="nav-item">
                                            <a class="nav-link p-1 bg-light" href="#" 
                                             onclick="showallcoursetitle('<?php echo $institution ?>','<?php echo $department?>','<?php echo $year ; ?>')">
                                                <i class="fa fa-fw fa-clock-o"></i><?php echo $year;?></a>
                                        
                                            
                                            
                                       
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
              <?php
       }?>                              
                                        </li>  
         </ul>
       </div>                              
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
    
          
          <?php
       }?>
                                           
                                          
                                            </li>  
         </ul>
       </div>
    
    
<?php
    
     }?>
    </li></ul></div></li> 
     
       
        <li class="nav-item active">
             
          <a class="nav-link collapsed text-truncate" href="#submenu2" data-toggle="collapse" data-target="#submenu2"><span class="p-1 d-none d-sm-inline pull-left"> <i class="fa fa-info"></i></span> About</a>
                    <div class="collapse" id="submenu2" aria-expanded="false">
          <ul class="nav-pills nav-stacked" style="list-style-type:none;">
            <li><a href="terms.php">Terms of use</a></li>
            <li><a href="privacy-policy.php">Privacy policies</a></li>
          </ul>
              </div>
        </li>
       
          
        <li>
          <a href="contact.php" class="nav-link collapsed text-truncate"><span class="p-1 d-none d-sm-inline pull-left"><i class="fa fa-phone  "></i></span>Contact</a>
        </li>
      </ul>
<?php
}
?>



















 <?php
function showtopnavbar1(){
    ?>
  
    
    <div class="navbar-header fixed-brand">
      <button type="button" class="navbar-toggle collapsed d-xl-none d-lg-none d-md-inline" data-toggle="collapse" id="menu-toggle" aria-expanded="false" onclick="menu_toggle();">
        <span class="navbar-toggler-icon" aria-hidden="true"></span>
      </button>
      <a class="navbar-brand " href="#"><i class="fa fa-rocket"></i> EXAMSTARK</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active">
          
        </li>
      </ul>
    </div>
   <div class=" searchbardiv " id="formsearch">
      <form role="search" method="get" id="searchform" style="width: 100%">
      <div class="input-group mb-4 border rounded-pill p-1">
            <div class="input-group-prepend border-0">
              <button id="button-addon4" type="button" class="btn btn-link text-info" id="searchsubmit"  type="submit"><i class="fa fa-search"></i></button>
            </div>
            <input type="search" placeholder="What're you searching for?" aria-describedby="button-addon4" class="form-control bg-none border-0" id="searchbox">
           <button  type="button" class="navbar-link navbar-left btn btn-secondary ml-auto showbtn" id="buttonsearch2">
            <i class="fa fa-times openclosesearch" ></i><i class="fa fa-times openclosesearch" style="display:none"></i>
        </button>
          </div>
         
        </form>
          
      </div>

       <button  type="button" class="navbar-link navbar-left btn-secondary " id="buttonsearch">
            <i class="fa fa-search openclosesearch"></i><i class="fa fa-search openclosesearch" style="display:none"></i>
        </button>
    <!-- navbar-header-->
      <?php if(isset($_SESSION["username"])){?>
      <div class="row">
       <a href="dashboard/profile.php"><img src="uploads/profilepics/<?php echo "100".$_SESSION["id"]."100";?>.jpg" class="rounded-circle topuserimage">
     </a>
      
      <a class="nav-link" href="logout.php"><span class="fas fa-user"></span> Log out</a>
      </div><?;}else{?>
      <div class="row">
        
        <a class="nav-link" href="Sign-In.php"><span class="fas fa-sign-in-alt"></span> Login</a>
  <a class="nav-link" href="Sign-Up.php"><span class="fas fa-user"></span> Sign Up</a>
      </div>


<?;}}?>



<?php
function showtopnavbar2(){
    ?>
  
    
    <div class="navbar-header fixed-brand">
      <button type="button" class="navbar-toggle collapsed d-xl-none d-lg-none d-md-inline" data-toggle="collapse" id="menu-toggle" aria-expanded="false" onclick="menu_toggle();">
        <span class="navbar-toggler-icon" aria-hidden="true"></span>
      </button>
      <a class="navbar-brand " href="#"><i class="fa fa-rocket"></i> EXAMSTARK</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active">
          
        </li>
      </ul>
    </div>
     <div class=" searchbardiv " id="formsearch">
      <form role="search" method="get" id="searchform" style="width: 100%">
      <div class="input-group mb-4 border rounded-pill p-1">
            <div class="input-group-prepend border-0">
              <button id="button-addon4" type="button" class="btn btn-link text-info" id="searchsubmit"  type="submit"><i class="fa fa-search"></i></button>
            </div>
            <input type="search" placeholder="What're you searching for?" aria-describedby="button-addon4" class="form-control bg-none border-0" id="searchbox">
           <button  type="button" class="navbar-link navbar-left btn btn-secondary ml-auto showbtn" id="buttonsearch2">
            <i class="fa fa-times openclosesearch" ></i><i class="fa fa-times openclosesearch" style="display:none"></i>
        </button>
          </div>
         
        </form>
          
      </div>

       <!--<button  type="button" class="navbar-link navbar-left btn-secondary " id="buttonsearch">
            <i class="fa fa-search openclosesearch"></i><i class="fa fa-search openclosesearch" style="display:none"></i>
        </button>-->
    <!-- navbar-header-->
      <?php if(isset($_SESSION["username"])){?>
      <div class="row">
       <a href="../dashboard/profile.php"><img src="../uploads/profilepics/<?php echo "100".$_SESSION["id"]."100";?>.jpg" class="rounded-circle topuserimage">
     </a>
      
      <a class="nav-link" href="../logout.php"><span class="fas fa-user"></span> Log out</a>
      </div><?;}else{?>
      <div class="row">
        
        <a class="nav-link" href="../Sign-In.php"><span class="fas fa-sign-in-alt"></span> Login</a>
  <a class="nav-link" href="../Sign-Up.php"><span class="fas fa-user"></span> Sign Up</a>
      </div>


<?;}}?>
   
  
    <?php
function showtopnavbar3(){
    ?>
  
    
    <div class="navbar-header fixed-brand">
      <button type="button" class="navbar-toggle collapsed d-xl-none d-lg-none d-md-inline" data-toggle="collapse" id="menu-toggle" aria-expanded="false" onclick="menu_toggle();">
        <span class="navbar-toggler-icon" aria-hidden="true"></span>
      </button>
      <a class="navbar-brand " href="#"><i class="fa fa-rocket"></i> EXAMSTARK</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active">
          
        </li>
      </ul>
    </div>
      <div class=" searchbardiv " id="formsearch">
      <form role="search" method="get" id="searchform" style="width: 100%">
      <div class="input-group mb-4 border rounded-pill p-1">
            <div class="input-group-prepend border-0">
              <button id="button-addon4" type="button" class="btn btn-link text-info" id="searchsubmit"  type="submit"><i class="fa fa-search"></i></button>
            </div>
            <input type="search" placeholder="What're you searching for?" aria-describedby="button-addon4" class="form-control bg-none border-0" id="searchbox">
           <button  type="button" class="navbar-link navbar-left btn btn-secondary ml-auto showbtn" id="buttonsearch2">
            <i class="fa fa-times openclosesearch" ></i><i class="fa fa-times openclosesearch" style="display:none"></i>
        </button>
          </div>
         
        </form>
          
      </div>

       <!--<button  type="button" class="navbar-link navbar-left btn-secondary " id="buttonsearch">
            <i class="fa fa-search openclosesearch"></i><i class="fa fa-search openclosesearch" style="display:none"></i>
        </button>-->
    <!-- navbar-header-->
      <?php if(isset($_SESSION["username"])){?>
      <div class="row">
       <a href="../../dashboard/profile.php"><img src="../../uploads/profilepics/<?php echo "100".$_SESSION["id"]."100";?>.jpg" class="rounded-circle topuserimage">
     </a>
      
      <a class="nav-link" href="../../logout.php"><span class="fas fa-user"></span> Log out</a>
      </div><?;}else{?>
      <div class="row">
        
        <a class="nav-link" href="../../Sign-In.php"><span class="fas fa-sign-in-alt"></span> Login</a>
  <a class="nav-link" href="../../Sign-Up.php"><span class="fas fa-user"></span> Sign Up</a>
      </div>


<?;}}?>
   

<?php
function showrightsidebar3(){?>
    <h1>this is the proposed right side bar where ads will reside</h1>
    
    


<?};?>

<?php
function showrightsidebar2(){?>
    <h1>this is the proposed right side bar where ads will reside</h1>
    
    


<?};?>


<?php
function showrightsidebar1(){?>
    <h1>this is the proposed right side bar where ads will reside</h1>
    
    


<?};?>



