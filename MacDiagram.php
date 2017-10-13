<?php
	//Column 1
	$col1_1 = [
		'type' => 'postback',
		'label' => 'BK, BN, BPL, CHW',
		'data' => 'action=BK_BN_BPL_CHW'	
		];
	$col1_2 = [
		'type' => 'postback',
		'label' => 'LLA, LPR',
		'data' => 'action=LLA_LPR'	
		];
	$col1_3 = [
		'type' => 'postback',
		'label' => 'NB, NCO',
		'data' => 'action=NB_NCO'	
		];
	$col1 = [
		'thumbnailImageUrl' => $ecsURL.'SW_BK.JPG',
		'title' => 'MAC',
		'text' => 'Switching Digram',
		'actions' => [$col1_1,$col1_2,$col1_3]
		];
	
	//Column 2
	$col2_1 = [
		'type' => 'postback',
		'label' => 'NV, ON',
		'data' => 'action=NV_ON'	
		];
	$col2_2 = [
		'type' => 'postback',
		'label' => 'RPS, RS, SB',
		'data' => 'action=RPS_RS_SB'	
		];
	$col2_3 = [
		'type' => 'postback',
		'label' => 'SNO, STB, TPR',
		'data' => 'action=SNO_STB_TPR'	
		];
	$col2 = [
		'thumbnailImageUrl' => $ecsURL.'SW_ON.JPG',
		'title' => 'MAC',
		'text' => 'Switching Digram',
		'actions' => [$col2_1,$col2_2,$col2_3]
		];	

	$messages = [
		'type' => 'template',
		'altText' => 'MAC Substation',
		'template' => [
			'type' => 'carousel',
			'columns' => [$col1,$col2]
			]
		];

$url = 'https://api.line.me/v2/bot/message/reply';
$data = data1($replyToken,$messages);
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
