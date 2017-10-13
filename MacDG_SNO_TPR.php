<?php
$Org1 = $ecsURL."SNO_1.JPG";
$Pv1 = $ecsURL."SW_SNO.JPG";

$Org2 = $ecsURL."STB_1.JPG";
$Pv2 = $ecsURL."SW_STB.JPG";

$Org3 = $ecsURL."STB_2.JPG";
$Pv3 = $ecsURL."SW_STB.JPG";

$Org4 = $ecsURL."TPR_1.JPG";
$Pv4 = $ecsURL."SW_TPR.JPG";

$url = 'https://api.line.me/v2/bot/message/reply';
$data = im4($replyToken,$Org1,$Pv1,$Org2,$Pv2,$Org3,$Pv3,$Org4,$Pv4);
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
