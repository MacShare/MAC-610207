<?php
//Have $touserid, $toroomid, $togroupid, $userlicense, $text, $postbackdata From Bot
//function iscontain($string,$find)  in MacLicense
//Start $userlicense = "false" $License = file_get_contents("License.txt");
$SorryTxt = "ขออภัยคุณยังไม่ได้ลงทะเบียน โปรดติดต่อ MAC";
$TelCheck = file_get_contents("FlashNews.txt");
if (($text <> "") && ($userlicense == 'false') && (strlen($text) == 11) && (substr($text,0,2) == 't0')) {
  if(iscontain($TelCheck,substr($text,1,11))) {
    $TelCheck =  "มีข้อมูลในระบบ"; 
  }
  else {
    $TelCheck =  "ไม่มีข้อมูลในระบบ";
  }
  $SorryTxt = "หมายเลขของคุณคือ ".substr($text,1,11)." ตรวจสอบแล้ว ".$TelCheck;
}
else {
  //$SorryTxt = "ขออภัยคุณยังไม่ได้ลงทะเบียน และกรอกข้อมูลไม่ถูกต้อง ".$text." ".$userlicense." ".strlen($text)." ".substr($text,0,2);
  $SorryTxt = "ขออภัยคุณยังไม่ได้ลงทะเบียน และกรอกข้อมูลไม่ถูกต้อง โปรดติดต่อ MAC";
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
