<?php
$Org1 = $ecsURL."LLA_1.JPG";
$Pv1 = $ecsURL."SW_LLA.JPG";

$Org2 = $ecsURL."LPR_1.JPG";
$Pv2 = $ecsURL."SW_LPR.JPG";

$Org3 = $ecsURL."LPR_2.JPG";
$Pv3 = $ecsURL."SW_LPR.JPG";


$url = 'https://api.line.me/v2/bot/message/reply';
$data = im3($replyToken,$Org1,$Pv1,$Org2,$Pv2,$Org3,$Pv3);
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
