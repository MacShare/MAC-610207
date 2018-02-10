<?php
//$TelCheck = file_get_contents("https://still-inlet-83395.herokuapp.com/FlashNews.txt",FILE_USE_INCLUDE_PATH);
$TelCheck = file_get_contents("FlashNews.txt");
$SorryTxt = $TelCheck;

$url = 'https://api.line.me/v2/bot/message/reply';
$postbackdata = t1($SorryTxt);
$data = data1($replyToken,$postbackdata);
$post = json_encode($data);
$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);
echo $result . "\r\n";	
?>
