<?php
//Have $touserid, $toroomid, $togroupid From Bot
$License = file_get_contents("License.txt");
function iscontain($string,$find) {
  $check = strpos($string, $find); 
  if ($check === false) { 
    return 0; }
  else { 
    return 1; 
  } 
} 
if(iscontain($License,$touserid)) {
  $userlicense =  "true"; 
}
else {
  $userlicense =  "false";
}
?>
