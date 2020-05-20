<?php
function updateurlofnewfile($institution,$department,$year,$coursetitle,$questioncontent,$path){
    $institution = ucwords("$institution");
    $department =ucwords("$department");
    $year =ucwords("$year");
    $path = str_replace('../','',$path);
$coursetitle= ucwords("$coursetitle");
$xmldoc = new DOMDocument();
$xmldoc->formatOutput = true;    
$xmldoc->preserveWhiteSpace = false;
$xmldoc->load("./resource.xml");
$tracker = "a";
$root = $xmldoc->firstChild;
$new = "none";

$institutes = $root->getElementsByTagName('institution');

foreach ($institutes as $institute){
    $tracker = "b";
    $at1 = $institute->getAttribute('name');
    if($at1==$institution){
        $tracker = "b1";
    $departs = $institute->getElementsByTagName('department');
      foreach ($departs as $depart){
          $tracker = "c";
         $at2 = $depart->getAttribute('name'); 
          if($at2==$department){
         
             $ys = $depart->getElementsByTagName('year');
              foreach ($ys as $y){
                  $tracker = "d";
                  
                   $at3 = $y->getAttribute('name');
                  if($at3==$year){
                      $yr = $y->getElementsByTagName('coursetitle');
                      $p="undefined";
                  foreach ($yr as $yrr){
                      $at4 = $yrr->getAttribute('name');
                      if($at4==$coursetitle){
                          
                      
 
$attribute2 = $yrr->setAttribute('url', "$path/$coursetitle.php");
// $attribute = $subnode_element2->setAttribute('mode', "bad guy");
//$y->appendChild($subnode_element2); //***
                  $xmldoc->save("./resource.xml");     
                  }
                  
              
          }}}}
   
   }
}
    
    
    
    
}
    
}
  
 function createnode($institution){
     $institution = ucwords("$institution");
    if(!is_file("resource.xml")){
        $dom = new DOMDocument();
$dom->encoding = 'UTF-8';
$dom->xmlVersion= '1.0';
$dom->formatOutput=true;
$filename = "resource.xml";
$root = $dom->createElement('pastquestions');
$dom->appendChild($root);

$dom->save("resource.xml");

    }



$xmldoc = new DOMDocument();
$xmldoc->formatOutput = true;    
$xmldoc->preserveWhiteSpace = false;
$xmldoc->load("./resource.xml");

$root = $xmldoc->firstChild;
$markers = $root->getElementsByTagName('institution');
      $param = 0;
foreach ($markers as $marker){
    $p = 0;
$subs = $marker->getAttribute('name');
    
        if($subs==$institution){$param = 1; }
}
  if($param == 0){ 
    
    
    
$newElement = $xmldoc->createElement('institution');
$attribute = $newElement->setAttribute('name', "$institution");
 
 

      
$root->appendChild($newElement);
        
        $xmldoc->save("./resource.xml");
            //this is for the linking of pages at the topic phase
        



  }}

?>
<?php



function createdepartment($department,$institution){
   $institution = ucwords("$institution");
    $department =ucwords("$department");
   

$xmldoc = new DOMDocument();
$xmldoc->formatOutput = true;    
$xmldoc->preserveWhiteSpace = false;
$xmldoc->load("./resource.xml");
$tracker = "a";
$root = $xmldoc->firstChild;


$markers = $root->getElementsByTagName('institution');
foreach ($markers as $marker){
    $tracker = "b";
$subs = $marker->getAttribute('name');
if($subs==$institution){
      $es = $marker->getElementsByTagName("department");
     $p=1;
    $p="undefined";
        foreach ($es as $e){
             
            $tracker = "d";
        $f = $e->getAttribute('name');
            if($f=="$department"){
                $p="match";
            }
            
        
        }
    if($p=="undefined"){
        
      
          $tracker = "e";
$subnode_element2 = $xmldoc->createElement("department","$department");
 $attribute = $subnode_element2->setAttribute('name', "$department");
// $attribute = $subnode_element2->setAttribute('mode', "bad guy");
$marker->appendChild($subnode_element2); //***
    
    }

$xmldoc->save("./resource.xml");
}}return $tracker;}
  
?>

    
  <?php
    
function createyear($institution,$department,$year){
    $institution = ucwords("$institution");
    $department =ucwords("$department");
    $year =ucwords("$year");

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
    if($at1==$institution){
        $tracker = "b1";
    $departs = $institute->getElementsByTagName('department');
      foreach ($departs as $depart){
          $tracker = "c";
         $at2 = $depart->getAttribute('name'); 
          if($at2==$department){
         
             $ys = $depart->getElementsByTagName('year');
              $p="undefined";
              foreach ($ys as $y){
                  $tracker = "d";
                  
                   $at3 = $y->getAttribute('name');
                  if($at3=="$year"){
                      $p="match";
              }}
                  if($p=="undefined"){
                      
                      $subnode_element2 = $xmldoc->createElement("year","$year");
 $attribute = $subnode_element2->setAttribute('name', "$year");
// $attribute = $subnode_element2->setAttribute('mode', "bad guy");
$depart->appendChild($subnode_element2); //***
                       
                  }
                  
              $xmldoc->save("./resource.xml");
          }}
   
   }
} return $tracker;
}
   
?>  
    
    
<?php
    
function createcoursetitle($institution,$department,$year,$coursetitle){
    $institution = ucwords("$institution");
    $department =ucwords("$department");
    $year =ucwords("$year");
$coursetitle= ucwords("$coursetitle");
$xmldoc = new DOMDocument();
$xmldoc->formatOutput = true;    
$xmldoc->preserveWhiteSpace = false;
$xmldoc->load("./resource.xml");
$tracker = "a";
$root = $xmldoc->firstChild;
$new = "none";

$institutes = $root->getElementsByTagName('institution');

foreach ($institutes as $institute){
    $tracker = "b";
    $at1 = $institute->getAttribute('name');
    if($at1==$institution){
        $tracker = "b1";
    $departs = $institute->getElementsByTagName('department');
      foreach ($departs as $depart){
          $tracker = "c";
         $at2 = $depart->getAttribute('name'); 
          if($at2==$department){
         
             $ys = $depart->getElementsByTagName('year');
              foreach ($ys as $y){
                  $tracker = "d";
                  
                   $at3 = $y->getAttribute('name');
                  if($at3==$year){
                      $yr = $y->getElementsByTagName('coursetitle');
                      $p="undefined";
                  foreach ($yr as $yrr){
                      $at4 = $yrr->getAttribute('name');
                      if($at4==$coursetitle){
                          $p="match";
                  }}
                  if($p=="undefined"){
                      $new = "new";
                      $subnode_element2 = $xmldoc->createElement("coursetitle","$coursetitle");
 $attribute = $subnode_element2->setAttribute('name', "$coursetitle");
$attribute2 = $subnode_element2->setAttribute('url', "Past Questions/$institution/$department/$session$coursetitle.pdf");
// $attribute = $subnode_element2->setAttribute('mode', "bad guy");
$y->appendChild($subnode_element2); //***
                       
                  }
                  
              $xmldoc->save("./resource.xml");
          }}}}
   
   }
} return $new;
}
    








?>


<?php
if(isset($_GET['action']) && $_GET['action']== 'showdepartment'){
$param = $_POST['p'];
    
//$param = "Federal University Of Agriculture Abeokuta";   
    
    
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
    
    ?>
    <option value="<?php echo $at2;?>" ><?php echo $at2;?></option>
    <?php
    }}}
    
    
    
    
    
    
    
    


}
?>
