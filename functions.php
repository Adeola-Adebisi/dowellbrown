<?php
//require_once('config.php');
//this function is used to insert data into the database
function createnewrecord($institution,$department,$year,$coursetitle,$db_server){
//require_once('config.php');
$institution = str_replace(' ', '-', $institution);
    $department = str_replace(' ', '-', $department);
    $year = str_replace(' ', '-', $year);
    $coursetitle = str_replace(' ', '-', $coursetitle);
$verify = "SELECT * FROM `resource`";

$result = mysqli_query($db_server, $verify);
if(mysqli_num_rows($result)==null){

$table='CREATE TABLE `resource` (
  `id` int(255) NOT NULL auto_increment,
  `institution` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `coursetitle` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB';
if (mysqli_query($db_server, $table)) {
//echo "New table created successfully";
} 


} 


$yes =  "SELECT * FROM resource WHERE institution = '$institution' AND department = '$department' AND year = '$year' AND coursetitle='$coursetitle'";
$result = mysqli_query($db_server, $yes);
if(mysqli_num_rows($result)==null){
  
 $yess = "INSERT INTO resource (institution, department, year,coursetitle)
SELECT * FROM (SELECT '$institution', '$department', '$year','$coursetitle') AS tmp
WHERE NOT EXISTS (
    SELECT * FROM resource WHERE institution = '$institution' AND department = '$department' AND year = '$year' AND coursetitle='$coursetitle'
) LIMIT 1";


if(mysqli_query($db_server, $yess)) {
$report = "file created successfully";
} else {
$report = "an error occured please try again later";
}

}else {
$report = "file already exists";
   
}
return $report;
}

//createnewrecord("futa","mcew","tt","thermoey",$db_server);









//this functions are used to read from the database very good for ajax nav bar





function selectnamesofallinstitutions($db_server){
    
//$query="SELECT * FROM resource";
$query = "SELECT DISTINCT institution FROM resource";
$result = mysqli_query($db_server,$query);
 
 
    while($row = mysqli_fetch_array($result)){;
 ?>
     <option value=" <?php echo $row['institution'];?>"> <?php echo $row['institution'];?></option>
       
        //echo $row['department'];  
        //echo $row['year'];
        //echo $row['coursetitle'];
    <?;
    }
    
}

function selectnamesofalldepartments($db_server){
    
//$query="SELECT * FROM resource";
$query = "SELECT DISTINCT department FROM resource";
$result = mysqli_query($db_server,$query);
 
 
    while($row = mysqli_fetch_array($result)){;
 ?>
     <option value=" <?php echo $row['department'];?>"> <?php echo $row['department'];?></option>
       
        //echo $row['department'];  
        //echo $row['year'];
        //echo $row['coursetitle'];
    <?;
    }
    
}

function selectnamesofallyears($db_server){
    
//$query="SELECT * FROM resource";
$query = "SELECT DISTINCT year FROM resource";
$result = mysqli_query($db_server,$query);
 
 
    while($row = mysqli_fetch_array($result)){;
       $row = str_replace('-', '/', $row['year']);                                       
 ?>
     <option value=" <?php echo $row;?>"> <?php echo $row;?></option>
       
        //echo $row['department'];  
        //echo $row['year'];
        //echo $row['coursetitle'];
    <?;
    }
    
}












//selectnamesofallinstitutions($db_server);
function selectnamesofalldepatmentsinaninstitution($institution,$db_server){
    //require_once('config.php');
$query = "SELECT DISTINCT  department FROM resource WHERE institution='$institution' ";


$result = mysqli_query($db_server,$query);
 
 
    while($row = mysqli_fetch_array($result)){
 
    
        //echo $row['institution'];   
        echo $row['department']; 
    }
   // mysqli_close($db_server);
}


















function selectalltheyearscontainedinaninstitutionanddepartment($institution,$department,$db_server){
   // require_once('config.php');
$query = "SELECT DISTINCT  year FROM resource WHERE institution='$institution' AND department='$department' ";


$result = mysqli_query($db_server,$query);
 
 
    while($row = mysqli_fetch_array($result)){
 
     echo $row['year']; }
//mysqli_close($db_server);
}

function loadpage1($institution,$department,$year,$db_server){
    
    
$query = "SELECT DISTINCT  coursetitle FROM resource WHERE institution='$institution' AND department='$department' AND year='$year' ORDER BY id DESC";
$result = mysqli_query($db_server,$query);
 ?>
 
            <?php
    while($row = mysqli_fetch_array($result)){
        $coursetitle=$row['coursetitle'];
        $queryy = "SELECT  url FROM resource WHERE institution='$institution' AND department='$department' AND year='$year' AND  coursetitle='$coursetitle' ";
$resultt =mysqli_query($db_server, $queryy); 

 while($roww = mysqli_fetch_array($resultt)){
 //$roww['url']=str_replace($roww['url'],'..', '');
 $ow = str_replace('../', ' ', $roww['url']);
     ?>
     
  <a href="<?php echo $ow;?>/<?php echo $row['coursetitle'];?>.php" class="list-group-item list-group-item-action flex-column align-items-start bg-light">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1"><?php echo $institution;?></h5>
      <small><?php echo $year;?></small>
    </div>
    <p class="mb-1"><?php echo $row['coursetitle'];?>.</p>
    <small>Donec id elit non mi porta.</small>
  </a>   
      
        
     <?php   
        
 }
        
    }
    ?>
    
<?php
//mysqli_close($db_server);
}


//ajax page load for directory level 2
function loadpage2($institution,$department,$year,$db_server){
    
    
$query = "SELECT DISTINCT  coursetitle FROM resource WHERE institution='$institution' AND department='$department' AND year='$year' ORDER BY id DESC";;
$result = mysqli_query($db_server,$query);
 ?>
 <div class="row">
        <div class="list-group col-sm-12 col-md-9">
            <?php
    while($row = mysqli_fetch_array($result)){
        $coursetitle=$row['coursetitle'];
        $queryy = "SELECT  url FROM resource WHERE institution='$institution' AND department='$department' AND year='$year' AND  coursetitle='$coursetitle'";
$resultt =mysqli_query($db_server, $queryy); 

 while($roww = mysqli_fetch_array($resultt)){
 $roww['url'];
 
     ?>
     
  <a href="<?php echo $roww['url'];?>/<?php echo $row['coursetitle'];?>.php" class="list-group-item list-group-item-action flex-column align-items-start bg-light">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1"><?php echo $institution;?></h5>
      <small><?php echo $year;?></small>
    </div>
    <p class="mb-1"><?php echo $row['coursetitle'];?>.</p>
    <small>Donec id elit non mi porta.</small>
  </a>   
      
        
     <?php   
        
 }
        
    }
    ?>
    </div></div> 
<?php
//mysqli_close($db_server);
}


function loadpage3($institution,$department,$year,$db_server){
    
    
$query = "SELECT DISTINCT  coursetitle FROM resource WHERE institution='$institution' AND department='$department' AND year='$year'ORDER BY id DESC";;
$result = mysqli_query($db_server,$query);
 ?>
 
            <?php
    while($row = mysqli_fetch_array($result)){
        $coursetitle=$row['coursetitle'];
        $queryy = "SELECT  url FROM resource WHERE institution='$institution' AND department='$department' AND year='$year' AND  coursetitle='$coursetitle'";
$resultt =mysqli_query($db_server, $queryy); 

 while($roww = mysqli_fetch_array($resultt)){
 $roww['url'];
 
     ?>
     
  <a href="../<?php echo $roww['url'];?>/<?php echo $row['coursetitle'];?>.php" class="list-group-item list-group-item-action flex-column align-items-start bg-light">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1"><?php echo $institution;?></h5>
      <small><?php echo $year;?></small>
    </div>
    <p class="mb-1"><?php echo $row['coursetitle'];?>.</p>
    <small>Donec id elit non mi porta.</small>
  </a>   
      
        
     <?php   
        
 }
        
    }
    ?>
    
<?php
//mysqli_close($db_server);
}



















//selectallthecoursetitlescontainedinaninstitutiondepartmentandyear('futa','mce','tt',$db_server);


function updateurlofnewfile($institution,$department,$year,$coursetitle,$path,$db_server){
    $institution = str_replace(' ', '-', $institution);
    $department = str_replace(' ', '-', $department);
    $year = str_replace(' ', '-', $year);
    $coursetitle = str_replace(' ', '-', $coursetitle);

$query = "UPDATE resource SET url='$path' WHERE institution='$institution' AND department='$department' AND year='$year' AND coursetitle ='$coursetitle'";
if (mysqli_query($db_server, $query)) {
$report = "file created successfully";
} else {
$report = "an error occured please try again later";
}




}

?>
<?php
// new html page from form
function createpage($institution,$department,$year,$coursetitle,$questioncontent,$file_names,$db_server){
    
    $button= str_replace(' ', '-', "../../institutions/$institution/$department/$year/$coursetitle");
    
    
    
    
    
    
    
          $foldername = rand();
        //$contentformat = preg_replace("/[\n\r]/","</p><p class='indentpagetext'>",$questioncontent);
          $titles=$institution." ".$department." ".$year." ".$coursetitle; 
    $coursetitle = str_replace(' ', '-', $coursetitle);
    
    if (!is_dir("../Questions/$foldername")) {
    mkdir("../Questions/$foldername", 0777, true);}
          if(!is_file("../Questions/$foldername/$coursetitle.php")){
              $path = "../Questions/$foldername";
//$fh = fopen("../Questions/$foldername/$coursetitle.php", 'w') or die("Failed to create file");
$text = <<<_END
<?php include_once("../../session.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> $titles</title>
<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link href="../../fontawesome/css/all.min.css" rel="stylesheet">
    <script defer src="../../fontawesome/js/all.js"></script>
    <script defer src="../../js/alt3.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="../../js/jquery.min.js"></script>
    <script type="text/javascript" src="../../bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.form.js"></script>
    <link rel="stylesheet" href="../../css/alt.css">
    
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta name="Description" content="$questioncontent">
        <meta http-equiv="x-UA-compatible" content="ie=edge">
        
        <meta property="og:title" content="$titles">
        <meta property="og:description" content="$questioncontent">
        <meta property="og:type" content= "website" />
        <meta property="og:url" content="https://examstark.com/Questions/$foldername/$coursetitle.php"/>
        <meta property="og:site_name" content="exam stark" />
        <meta property="og:image" itemprop="image primaryImageOfPage" content="https://examstark.com/mylogo.png" />
        <meta name="twitter:card" content="summary"/>
        <meta name="twitter:domain" content="examstark.com"/>
        <meta name="twitter:title" property="og:title" itemprop="name" content="$titles" />
        <meta name="twitter:description" property="og:description" itemprop="description" content="$questioncontent" />

    <link rel="icon" sizes="16x16" href="../../Favicon-16x16.png" type="image/png">
    <link rel="icon" type="image/png" sizes="32x32" href="/icons/favicon-32x32.png">
    <link rel="shortcut icon" href="../../favicon.ico">
    
       
    </head> 
        
        
  
        
        
        
        
   <body>
  <nav class="navbar navbar-default no-margin navbar-expand-md navbar-dark bg-dark  navbar-default fixed-top " style="background-color: #000;" id="top-navbar">
    
    
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
     
    <div id="page-content-wrapper" class="page pt-5 p-0">
        <div class="container rounded-pill ">
        <div class="row">
        <div class="col-sm-12 col-md-9 p-0 m-0" id="centerpage">
        <?php include("../../ads1.php");?>
     <div class="card mb-3 wow fadeIn">
    <div class="card-header font-weight-bold"><a href="#" class="list-group-item list-group-item-action flex-column align-items-start bg-light">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">$institution</h5>
      <small>$year</small>
    </div>
    <p class="mb-1">$department $year $coursetitle.</p>
    <small>Donec id elit non mi porta.</small>
  </a></div>
    <div class="card-body">
        <span style="white-space:pre-wrap;" class='indentpagetext' >$questioncontent.
        </span>
       <div class ="row"> $file_names</div>
        
         </div>
      <div class="text-center my-1">
            <label class=" col-form-label form-control-label"></label>
                            <div class="text-center col-lg-4 m-0 mx-auto">
            <a href="$button.pdf"  class="text-center btn-success btn-lg btn-block " id="download-button" >Download PDF</a>
            </div>
        </div>
        <?php include("../../ads2.php");?>
         
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
        <div class="text-center col-lg-4 m-0 mx-auto">
            <button type="submit" class="btn btn-success btn-lg btn-block" id="submitcomment">Submit</button>
        </div>
           <input hidden id="pathused" value="$foldername/$coursetitle">
        </form>
        <!-- Default form reply -->



    </div>
</div>
<!--/.Reply-->   
            
            
      
        
</div>

  <div class="col-sm-12 col-md-3">
  <div id= "right-sidebar" class="col-12">right side bar</div>
  <div class=col-12><?php include_once("../../ads3.php"); ?></div>
  </div>  
    </div>
    
   </div>
   <div id="page-footer">
              <!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4" >

  <!-- Footer Links -->
  <div class="container text-center text-md-left" >

    <!-- Footer links -->
    
    <!-- Footer links -->

    <hr>

    <!-- Grid row -->
    <div class="row d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-7 col-lg-8">

        <!--Copyright-->
        <p class="text-center text-md-left">© 2020 Copyright:
          <a href="https://examstark.com">
            <strong> Examstrark.com</strong>
          </a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-5 col-lg-4 ml-lg-0">

        <!-- Social buttons -->
        <div class="text-center text-md-right">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-google-plus-g"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

</footer> 
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
//fwrite($fh, $text) or die("Could not write to file");
    //create index for the directory          
     
//create page
              file_put_contents("../Questions/$foldername/$coursetitle.php", $text);
              
$index = <<<_END
  <?php
  header("location: $coursetitle.php");
  ?>
_END;
              
              //create index.php
        file_put_contents("../Questions/$foldername/index.php", $index);            
              
              
              
              
              
echo "File 'testfile.php' written successfully";
echo "<div id='filecreationstatus'>created</div>";
$id = $_SESSION["id"];
     $sql = "UPDATE member SET posts =posts + 1 WHERE id= $id"; //update by adding new transaction value to previous balance 
$result = mysqli_query($db_server, $sql);
	//Perform necessary action
    // Close connection
    //mysqli_close($db_server);          
              
              
              
              
              
              
              
              
          }
    return $path;
      }

















//this function sets new image height and width
function resizeimage($file_tmp){
    list($width, $height) = getimagesize($file_tmp);
$MAX_WIDTH=400;
$MAX_HEIGHT=400;
if ($width > $height) {
                if ($width > $MAX_WIDTH) {
                    $height *= $MAX_WIDTH / $width;
                    $width = $MAX_WIDTH;
                }
            } else {
                if ($height > $MAX_HEIGHT) {
                    $width *= $MAX_HEIGHT / $height;
                    $height = $MAX_HEIGHT;
                }
            }
   
return array($height, $width);
}



		
		//this function changes the image height and width
		function resizeimg($file_tmp, $newfile, $newwidth, $newheight){
			

			list($width, $height) = getimagesize($file_tmp);
			// prepare for creating a new image that would be the thumbnail image
			$thumb = imagecreatetruecolor($newwidth, $newheight);
			$pathinfo = pathinfo($file_tmp);

			switch(strtolower($pathinfo['extension'])){
				case "jpeg" || "jpg":
					$source = imagecreatefromjpeg($file_tmp);
					imagecopyresized($thumb, $source, 0, 0, 0, 0, floor($newwidth), floor($newheight), $width, $height);
					imagejpeg($thumb, $newfile);
				break;

				case "png":
					$source = imagecreatefrompng($file_tmp);
					imagecopyresized($thumb, $source, 0, 0, 0, 0, floor($newwidth), floor($newheight), $width, $height);
					imagepng($thumb, $newfile);
				break;

				case "gif":
					$source = imagecreatefromgif($file_tmp);
					imagecopyresized($thumb, $source, 0, 0, 0, 0, floor($newwidth), floor($newheight), $width, $height);
					imagegif($thumb, $newfile);
				break;
			

				default:
					$newfile = 'false';
				break;
			}
			imagedestroy($thumb);
			return $newfile;
		}



function resize($newwidth, $newfile, $file_tmp) {

    $info = getimagesize($file_tmp);
    $mime = $info['mime'];

    switch ($mime) {
            case 'image/jpeg':
                    $image_create_func = 'imagecreatefromjpeg';
                    $image_save_func = 'imagejpeg';
                    $new_image_ext = 'jpg';
                    break;

            case 'image/png':
                    $image_create_func = 'imagecreatefrompng';
                    $image_save_func = 'imagepng';
                    $new_image_ext = 'png';
                    break;

            case 'image/gif':
                    $image_create_func = 'imagecreatefromgif';
                    $image_save_func = 'imagegif';
                    $new_image_ext = 'gif';
                    break;

            default: 
                    throw new Exception('Unknown image type.');
    }

    $img = $image_create_func($file_tmp);
    list($width, $height) = getimagesize($file_tmp);

    $newHeight = ($height / $width) * $newwidth;
    $tmp = imagecreatetruecolor($newwidth, $newHeight);
    imagecopyresampled($tmp, $img, 0, 0, 0, 0, $newwidth, $newHeight, $width, $height);

    if (file_exists($newfile)) {
            unlink($newfile);
    }
    $image_save_func($tmp, "$newfile");
}































 function uploadquestionimages($path){
	// check if there is avalid post request 
	if(isset($_FILES['questionphoto']))
		{$error=array();
         
         $extension=array("jpeg","jpg","png","gif");
    foreach($_FILES["questionphoto"]["name"] as $key=>$tmp_name) {
         $file_name=$_FILES["questionphoto"]["name"][$key];
         $file_tmp=$_FILES["questionphoto"]["tmp_name"][$key];
         $ext=pathinfo($file_name,PATHINFO_EXTENSION);

    if(in_array($ext,$extension)) {
        if(!file_exists("$path/".$file_tmp)) {
         
    list($height, $width) = resizeimage($file_tmp);           
            
            
            
            
            resize($width, "$path/".$file_name, $file_tmp);
          //move_uploaded_file($file_tmp,"$path/".$file_name);
        }
        else {
            $filename=basename($file_name,$ext);
            $newFileName=$filename.time().".".$ext;
            move_uploaded_file($file_tmp,"$path/".$newFileName);
            resizeimg($new_file_path, "$path/".$actual_file_name, 100, 100);
        }
    }
    else {
        array_push($error,"$file_name, ");
    }
    
    
}

}
        }




function passimagetopage(){
    
    $countfiles = count($_FILES['questionphoto']['name']);
 
 // Looping all files
 for($i=0;$i<$countfiles;$i++){
   $file_name = $_FILES['questionphoto']['name'][$i];
     $file_name = "<div class='p-2 mx auto'><img class='img-responsive question-images' src='$file_name'></div>";
       (string)$file_names[$file_name]=$file_name;
           
             }
             
          $file_names=implode($file_names);   
             return $file_names;
             }

//create pdf
function createpdf($institution,$department,$year,$coursetitle,$path,$questioncontent,$questionheader){
    if (!is_dir("../institutions/$institution/$department/$year/")) {
    mkdir("../institutions/$institution/$department/$year/", 0777, true);}
    
    
require('fpdf182/fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
	// Arial bold 15
	$this->SetFont('Arial','B',15);
	// Calculate width of title and position
	$w = $this->GetStringWidth($this->questionheader)+6;
	//$this->SetX((210-$w)/2);
	// Colors of frame, background and text
	$this->SetDrawColor(0,80,180);
	$this->SetFillColor(230,230,0);
	$this->SetTextColor(220,50,50);
	// Thickness of frame (1 mm)
	$this->SetLineWidth(1);
	// Title
	$this->MultiCell(0,10,$this->questionheader,'C');
	// Line break
	$this->Ln(20);
}

// Page footer
function Footer()
{
	// Position at 1.5 cm from bottom
	$this->SetY(-15);
	// Arial italic 8
	$this->SetFont('Arial','I',8);
	// Page number
	$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}




// Instanciation of inherited class
$pdf = new PDF();
$pdf->questionheader = $questionheader;
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

	$pdf->MultiCell(0,10,$questioncontent,0,1);
    $pdf->Ln(20);

 foreach($_FILES["questionphoto"]["name"] as $key=>$tmp_name) {
     if(is_file("$path/".$_FILES["questionphoto"]["name"][$key]))
		{
     $pdf->Image("$path/".$_FILES["questionphoto"]["name"][$key],50);
 $pdf->Ln(20);}}

$pdf->Output("../institutions/$institution/$department/$year/$coursetitle.pdf","F");
    
    $killer = <<<_END
  <?php
  die();
  ?>
_END;
              
              //create index.php
        file_put_contents("../institutions/$institution/$department/$year/index.php", $killer);            
              
     
    
    
    
}






 
?>  
   