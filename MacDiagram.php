<?php
	//Column 1
	$col1_1 = [
		'type' => 'postback',
		'label' => 'BK',
		'data' => 'action=BK_BN_BPL_CHW'	
		];
	$col1_2 = [
		'type' => 'postback',
		'label' => 'BN',
		'data' => 'action=LLA_LPR'	
		];
	$col1_3 = [
		'type' => 'postback',
		'label' => 'BPL',
		'data' => 'action=NB_NCO'	
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
		'data' => 'action=NV_ON'	
		];
	$col2_2 = [
		'type' => 'postback',
		'label' => 'LLA',
		'data' => 'action=RPS_RS_SB'	
		];
	$col2_3 = [
		'type' => 'postback',
		'label' => 'LPR',
		'data' => 'action=SNO_STB_TPR'	
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
		'data' => 'action=NV_ON'	
		];
	$col3_2 = [
		'type' => 'postback',
		'label' => 'NCO',
		'data' => 'action=RPS_RS_SB'	
		];
	$col3_3 = [
		'type' => 'postback',
		'label' => 'NV',
		'data' => 'action=SNO_STB_TPR'	
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
		'data' => 'action=NV_ON'	
		];
	$col4_2 = [
		'type' => 'postback',
		'label' => 'RPS',
		'data' => 'action=RPS_RS_SB'	
		];
	$col4_3 = [
		'type' => 'postback',
		'label' => 'RS',
		'data' => 'action=SNO_STB_TPR'	
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
		'data' => 'action=NV_ON'	
		];
	$col5_2 = [
		'type' => 'postback',
		'label' => 'SNO',
		'data' => 'action=RPS_RS_SB'	
		];
	$col5_3 = [
		'type' => 'postback',
		'label' => 'STB',
		'data' => 'action=SNO_STB_TPR'	
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
		'data' => 'action=NV_ON'	
		];
	$col6_2 = [
		'type' => 'postback',
		'label' => 'Future',
		'data' => 'action=RPS_RS_SB'	
		];
	$col6_3 = [
		'type' => 'postback',
		'label' => 'Future',
		'data' => 'action=SNO_STB_TPR'	
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
