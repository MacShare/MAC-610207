<?php
	//Column 1
	$col1_1 = [
		'type' => 'postback',
		'label' => 'BK',
		'data' => 'action=DG_BK'	
		];
	$col1_2 = [
		'type' => 'postback',
		'label' => 'BN',
		'data' => 'action=DG_BN'	
		];
	$col1_3 = [
		'type' => 'postback',
		'label' => 'BPL',
		'data' => 'action=DG_BPL'	
		];
	$col1 = [
		'thumbnailImageUrl' => $ecsURL.'ColMenu_2.JPG',
		'title' => 'MAC',
		'text' => 'Switching Digram',
		'actions' => [$col1_1,$col1_2,$col1_3]
		];
	
	//Column 2
	$col2_1 = [
		'type' => 'postback',
		'label' => 'CHW',
		'data' => 'action=DG_CHW'	
		];
	$col2_2 = [
		'type' => 'postback',
		'label' => 'LLA',
		'data' => 'action=DG_LLA'	
		];
	$col2_3 = [
		'type' => 'postback',
		'label' => 'LPR',
		'data' => 'action=DG_LPR'	
		];
	$col2 = [
		'thumbnailImageUrl' => $ecsURL.'ColMenu_2.JPG',
		'title' => 'MAC',
		'text' => 'Switching Digram',
		'actions' => [$col2_1,$col2_2,$col2_3]
		];

	//Column 3
	$col3_1 = [
		'type' => 'postback',
		'label' => 'NB',
		'data' => 'action=DG_NB'	
		];
	$col3_2 = [
		'type' => 'postback',
		'label' => 'NCO',
		'data' => 'action=DG_NCO'	
		];
	$col3_3 = [
		'type' => 'postback',
		'label' => 'NV',
		'data' => 'action=DG_NV'	
		];
	$col3 = [
		'thumbnailImageUrl' => $ecsURL.'ColMenu_2.JPG',
		'title' => 'MAC',
		'text' => 'Switching Digram',
		'actions' => [$col3_1,$col3_2,$col3_3]
		];

	//Column 4
	$col4_1 = [
		'type' => 'postback',
		'label' => 'ON',
		'data' => 'action=DG_ON'	
		];
	$col4_2 = [
		'type' => 'postback',
		'label' => 'RPS',
		'data' => 'action=DG_RPS'	
		];
	$col4_3 = [
		'type' => 'postback',
		'label' => 'RS',
		'data' => 'action=DG_RS'	
		];
	$col4 = [
		'thumbnailImageUrl' => $ecsURL.'ColMenu_2.JPG',
		'title' => 'MAC',
		'text' => 'Switching Digram',
		'actions' => [$col4_1,$col4_2,$col4_3]
		];

	//Column 5
	$col5_1 = [
		'type' => 'postback',
		'label' => 'SB',
		'data' => 'action=DG_SB'	
		];
	$col5_2 = [
		'type' => 'postback',
		'label' => 'SNO',
		'data' => 'action=DG_SNO'	
		];
	$col5_3 = [
		'type' => 'postback',
		'label' => 'STB',
		'data' => 'action=DG_STB'	
		];
	$col5 = [
		'thumbnailImageUrl' => $ecsURL.'ColMenu_2.JPG',
		'title' => 'MAC',
		'text' => 'Switching Digram',
		'actions' => [$col5_1,$col5_2,$col5_3]
		];

	//Column 6
	$col6_1 = [
		'type' => 'postback',
		'label' => 'TPR',
		'data' => 'action=DG_TPR'	
		];
	$col6_2 = [
		'type' => 'postback',
		'label' => 'Future',
		'data' => 'action=Future'	
		];
	$col6_3 = [
		'type' => 'postback',
		'label' => 'Future',
		'data' => 'action=Future'	
		];
	$col6 = [
		'thumbnailImageUrl' => $ecsURL.'ColMenu_2.JPG',
		'title' => 'MAC',
		'text' => 'Switching Digram',
		'actions' => [$col6_1,$col6_2,$col6_3]
		];

	$messages = [
		'type' => 'template',
		'altText' => 'MAC Substation',
		'template' => [
			'type' => 'carousel',
			'columns' => [$col1,$col2,$col3,$col4,$col5,$col6]
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
