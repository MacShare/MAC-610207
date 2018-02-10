<?php
//Have $touserid, $toroomid, $togroupid From Bot
$touserid = "U554a18dbd36996fdb3dd95c218cf6db0";
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
  $userlicense =  "flase";
}
//Have $tTel From Bot
$TelCheck = file_get_contents("FlashNews.txt");
//$SorryTxt = strlen(substr($TelCheck,0,999));
$SorryTxt = substr($TelCheck,0,999);

?>
