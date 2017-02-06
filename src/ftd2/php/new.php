<?php 
function recurse_copy($src,$dst) {
  $dir = opendir($src); 
  @mkdir($dst); 
  while(false !== ( $file = readdir($dir)) ) { 
      if (( $file != '.' ) && ( $file != '..' )) { 
         if ( is_dir($src . '/' . $file) ) { 
             recurse_copy($src . '/' . $file,$dst . '/' . $file); 
         } 
         else { 
             copy($src . '/' . $file,$dst . '/' . $file); 
         } 
      } 
  } 
 closedir($dir); 
}

$jsonString = file_get_contents('json.json');
$data = json_decode($jsonString, true);

$n=$data[0]['count'] = $data[0]['count']+1;


$filen="ftd$n";

$newJsonString = json_encode($data);
file_put_contents('json.json', $newJsonString);

$src = "/wamp64/www/Nex2Global/ftd/main";

$dst ="/wamp64/www/Nex2Global/ftd/src/$filen";
 
recurse_copy($src,$dst);

echo "New Quiz Created";
?>