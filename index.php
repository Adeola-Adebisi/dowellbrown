<?php session_start();
if($_SESSION["admin"] != true){
    header("location:../index.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset = "UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="x-UA-compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link href="../fontawesome/css/all.min.css" rel="stylesheet">
    <script defer src="../fontawesome/js/all.js"></script>
    <script defer src="../js/alt2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/jquery.form.js"></script>
    <link rel="stylesheet" href="../css/alt.css">
     <link rel="stylesheet" type="text/css" href="jQKeyboard.css">
  <title>find your dream job</title>
</head>
<body>
  <nav class="navbar navbar-default no-margin navbar-expand-md navbar-dark bg-dark  navbar-default fixed-top" style="background-color: #000;" id="top-navbar">
    
    <div class="navbar-header fixed-brand ">
      <button type="button" class="navbar-toggle collapsed d-xl-none d-lg-none d-md-inline" data-toggle="collapse" id="menu-toggle" aria-expanded="false">
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

     
        <a class="nav-link" href="#"><span class="fas fa-user"></span> Sign Up</a>
      
      
        <a class="nav-link" href="#"><span class="fas fa-sign-in-alt"></span> Login</a>
  
  

    <!-- bs-example-navbar-collapse-1 -->
  </nav>
  <div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
      <ul class="nav flex-column flex-nowrap overflow-hidden">
          <li class="nav-item active">
             
          <a class="nav-link collapsed text-truncate" href="#submenu2" data-toggle="collapse" data-target="#submenu2"><i class="fa fa-table"></i> <span class="d-none d-sm-inline pull-left"> Dashboard</span></a>
                    <div class="collapse" id="submenu2" aria-expanded="false">
          <ul class="nav-pills nav-stacked" style="list-style-type:none;">
            <li><a href="#">link1</a></li>
            <li><a href="#">link2</a></li>
          </ul>
              </div>
        </li>
                <li class="nav-item">
                    <a class="nav-link text-truncate" href="#"><span class="d-none d-sm-inline"><i class="fa fa-home"></i></span>Overview</a>
                </li>
                <div id="pastquestions"></div>
        <li>
          <a href="#submenu3" class="nav-link collapsed text-truncate" data-toggle="collapse" data-target="#submenu3"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span> Shortcut</a>
            <div class="collapse" id="submenu3" aria-expanded="false">
          <ul class="nav-pills nav-stacked" style="list-style-type:none;">
              
            <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link1</a></li>
            <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link2</a></li>
              
          </ul>
                </div>
        </li>
        <li>
          <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-cloud-download fa-stack-1x "></i></span>Overview</a>
        </li>
        <li>
          <a href="#"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-cart-plus fa-stack-1x "></i></span>Events</a>
        </li>
        <li>
          <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-youtube-play fa-stack-1x "></i></span>About</a>
        </li>
        <li>
          <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-wrench fa-stack-1x "></i></span>Services</a>
        </li>
          
        <li>
          <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-server fa-stack-1x "></i></span>Contact</a>
        </li>
      </ul>
    </div>
    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper" class="page">
        <div class="container border rounded-pill ">
        
            
            
            
            
            
            
            
         <div class="box">
    <div class="container">
     	<div class="row p-2">
			 
			    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12  p-2">
               
					<div class="box-part text-center card p-2">
                        <div class="box-part text-center card-inner p-2">
                            <a href="posts.php" class="text-decoration-none d-block">
                        <i class="fas fa-newspaper fa-3x" aria-hidden="true"></i>
                        
						<div class="title">
							<h4>Write Post</h4>
						</div>
                        
						<div class="text">
							<span>Post a new past question from your school on examstark .</span>
						</div>
                        
						</a>
                        </div>
					 </div>
				</div>	 
				
				 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12   p-2">
               
					<div class="box-part text-center card p-2">
					    <div class="box-part text-center card-inner p-2">
                            <a href="profile.php" class="text-decoration-none d-block">
					    <i class="fas fa-user fa-3x" aria-hidden="true"></i>
                    
						<div class="title">
							<h4>Profile</h4>
						</div>
                        
						<div class="text">
							<span>Edit your profile and display name on you posts.</span>
						</div>
                        
						</a>
                        </div>
					 </div>
				</div>	 
				
		
		</div>		
    </div>
            </div>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
        </div>
      </div>
    </div>
    </body>
</html>