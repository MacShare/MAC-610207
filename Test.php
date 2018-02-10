<?php
echo file_get_contents("FlashNews.txt");
$TelCheck = file_get_contents("FlashNews.txt");
echo $TelCheck;
$SorryTxt = $TelCheck;
echo $SorryTxt;
echo strlen($SorryTxt); 
echo substr($SorryTxt,0,999);
echo strlen(substr($SorryTxt,0,999));
?>
