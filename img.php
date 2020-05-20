<?php

//$param = $_POST['p'];
    
$param = "Federal University Of Agriculture Abeokuta";   
    
    
    $param = ucwords("$param");
   

$xmldoc = new DOMDocument();
$xmldoc->formatOutput = true;    
$xmldoc->preserveWhiteSpace = false;
$xmldoc->load("./resource.xml");
$tracker = "a";
$root = $xmldoc->firstChild;


$institutes = $root->getElementsByTagName('institution');

foreach ($institutes as $institute){
    $tracker = "b";
    $at1 = $institute->getAttribute('name');
    if($at1==$param){
        $tracker = "b1";
    $departs = $institute->getElementsByTagName('department');
      foreach ($departs as $depart){ 
    
    $at2 = $depart->getAttribute('name');
    
    
    $call="<option value='$at2' > $at2</option>";

(string)$institutions[$call]=$call;
    
    }
    
   
    
    }}
    
    
    //$results = print_r($institutions, true);
    
   $test = json_encode($institutions);
$test = str_replace('{"', '', $test);
$test = str_replace('"}', '', $test);
$test = str_replace('":"', '', $test);
$test = str_replace('","', '', $test);
$test = str_replace("\\", '', $test);
    
    $fp = fopen('file.txt', 'w');
fwrite($fp, $institutions);
fclose($fp);
    

$institutions = serialize($test);
file_put_contents("your-file.txt", $institutions);






$fh = fopen("hop.php", 'w') or die("Failed to create file");
$text = <<<_END

$test
<!DOCTYPE html>
<html lang="en">
<head>
<title> $titles</title>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="x-UA-compatible" content="ie=edge">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link href="../../fontawesome/css/all.min.css" rel="stylesheet">
    <script defer src="../../fontawesome/js/all.js"></script>
    <script defer src="../../alt.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="../../jquery.min.js"></script>
    <script type="text/javascript" src="../../bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../jquery.form.js"></script>
    <link rel="stylesheet" href="../../alt.css">
   <meta property="og:title" content="$titles">
<meta property="og:description" content="$questioncontent">



<meta property="og:type" content= "website" />
        <meta property="og:url" content="$path/Questions/$foldername/$coursetitle.phpp"/>
        <meta property="og:site_name" content="exam stark" />
        <meta property="og:image" itemprop="image primaryImageOfPage" content="http://examstark.com/mylogo.png" />
        <meta name="twitter:card" content="summary"/>
        <meta name="twitter:domain" content="examstark.com"/>
        <meta name="twitter:title" property="og:title" itemprop="name" content="$titles" />
        <meta name="twitter:description" property="og:description" itemprop="description" content="$questioncontent" />

    <link rel="stylesheet/shortcut icon" href="../../Favicon.ico.bmp" type="image/jpg">
    
    
       
    </head> 
        
        
  
        
        
        
        
   <body>
  <nav class="navbar navbar-default no-margin navbar-expand-md navbar-dark bg-dark  navbar-default fixed-top " style="background-color: #000;">
    
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

      <button  type="button" class="navbar-link navbar-left btn btn-secondary " id="buttonsearch">
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
                    <a class="nav-link text-truncate" href="#"><i class="fa fa-home"></i> <span class="d-none d-sm-inline">Overview</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed text-truncate" href="#submenu1" data-toggle="collapse" data-target="#submenu1"><i class="fa fa-table"></i><span class="d-none d-sm-inline">Past questions </span></a>
                    <div class="collapse" id="submenu1" aria-expanded="false">
                        <ul class="flex-column pl-2 nav">
                            <li class="nav-item"><a class="nav-link py-0" href="#"><span>select school</span></a></li>
                            <li class="nav-item">
                                <a class="nav-link collapsed py-1" href="#submenu1sub1" data-toggle="collapse" data-target="#submenu1sub1"><span>FUNAAB</span></a>
                                <div class="collapse" id="submenu1sub1" aria-expanded="false">
                                    <ul class="flex-column nav pl-4">
                                        <li class="nav-item">
                                            <a class="nav-link p-1" href="#">
                                                <i class="fa fa-fw fa-clock-o"></i> Select Deparment </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link collapsed py-1" href="#submenu1sub1sub1" data-toggle="collapse" data-target="#submenu1sub1sub1" href="#">
                                                <i class="fa fa-fw fa-dashboard"></i> Mce</a>
                                            <div class="collapse" id="submenu1sub1sub1" aria-expanded="false">
                                    <ul class="flex-column nav pl-4">
                                        <li class="nav-item">
                                            <a class="nav-link p-1" href="#">
                                                <i class="fa fa-fw fa-clock-o"></i> select year </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-1" href="#">
                                                <i class="fa fa-fw fa-dashboard"></i> 2018/2019</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-1" href="#">
                                                <i class="fa fa-fw fa-bar-chart"></i> 2017/2018 </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-1" href="#">
                                                <i class="fa fa-fw fa-compass"></i>2016/2019</a>
                                        </li>
                                    </ul>
                                </div>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
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
        <div class="container border rounded-pill row">
        <div class="list-group col-sm-12 col-md-9">
  
     
            
     <div class="card mb-3 wow fadeIn">
    <div class="card-header font-weight-bold"><a href="#" class="list-group-item list-group-item-action flex-column align-items-start bg-light">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">$institution</h5>
      <small>3 days ago</small>
    </div>
    <p class="mb-1">$department $year $coursetitle.</p>
    <small>Donec id elit non mi porta.</small>
  </a></div>
    <div class="card-body">
        <p style="white-space:pre-wrap;" class="">$questioncontent.
        </p>
        
        
         </div>
      
         
</div>
        
            
            
    <!--Comments-->
<div class="card card-comments mb-3 wow fadeIn">
    <div class="card-header font-weight-bold">comments</div>
    <div class="card-body">

        
                        <div id="commentsection"></div>
            
            </div>
       
       
    </div>

            
            
            
            
            
            
            
            
            
<!--/.Comments-->

<!--Reply-->
<div class="card mb-3 wow fadeIn">
    <div class="card-header font-weight-bold">Leave a reply</div>
    <div class="card-body">

        <!-- Default form reply -->
        <form>

            <!-- Comment -->
            <div class="form-group">
                <label for="commentform">Your comment</label>
                <textarea class="form-control" id="commentform" rows="5"></textarea>
            </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" id="submitcomment">Login</button>
        </div>
           <input hidden id="pathused" value="$foldername/$coursetitle">
        </form>
        <!-- Default form reply -->



    </div>
</div>
<!--/.Reply-->   
            
            
      
        
</div>

  <div class="col-md-2 ads"><hi>right side bar</hi></div>  
    
    
   </div>
   
       
        
    
    </div>
    
    </div>
    
    </body>
</html>
<script>
  $(document).ready(function() { 
$('#submitcomment').on('click', function()			{ 
              var  ppp = document.getElementById("commentform").value;
var  pp = document.getElementById("pathused").value;
      
              
            $.ajax({
    url: "../../Dashboard/comments.php",
    type: 'POST',
  
    cache: false,
    data:{'pp':pp,'c':ppp},
    success: function(data) {
    
    document.getElementById("commentform").value="";
             
            
        }});    });
  });

 </script>














<script>
  $(document).ready(function() { 

              var  pp = document.getElementById("pathused").value;

      
              
            $.ajax({
    url: "../../Dashboard/comments.php?action=showcomments",
    type: 'POST',
  
    cache: false,
    data:{'pp':pp},
    success: function(data) {
    
    document.getElementById("commentsection").innerHTML=data.
    replace(/\\r/g, '').
    replace(/\\n/g, '');;
             
            
        }});    
  });

 </script>




 

_END;
fwrite($fh, $text) or die("Could not write to file");
fclose($fh);












?>


