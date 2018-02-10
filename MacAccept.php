<?php
//Have $touserid, $toroomid, $togroupid, $userlicense, $text, $postbackdata From Bot
//Start $userlicense = "false" $License = file_get_contents("License.txt");
$SorryTxt = "ขออภัยคุณยังไม่ได้ลงทะเบียน โปรดติดต่อ MAC";

if (($text <> "") && ($userlicense == 'false') && (strlen($text) == 11) && (substr($string,0,2) == 't0')) {
  $SorryTxt = $text;
}
else {
  $SorryTxt = "ขออภัยคุณยังไม่ได้ลงทะเบียน และกรอกข้อมูลไม่ถูกต้อง";
}

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
