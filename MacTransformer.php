<?php
	//Column 1
	$col1_1 = [
		'type' => 'postback',
		'label' => 'Energy Last Day',
		'data' => 'action=Energy_Last_Day'	
		];
	$col1_2 = [
		'type' => 'postback',
		'label' => 'Transfermer Load Last Day',
		'data' => 'action=TxLoad2_Last_Day'	
		];
	$col1_3 = [
		'type' => 'postback',
		'label' => 'Transmission Line Last Day',
		'data' => 'action=TLLoad_Last_Day'	
		];
	$col1 = [
		'thumbnailImageUrl' => $ecsURL.'ColMenu_3.JPG',
		'title' => 'MAC',
		'text' => 'Report Record',
		'actions' => [$col1_1,$col1_2,$col1_3]
		];
	
	
	$messages = [
		'type' => 'template',
		'altText' => 'MAC Report',
		'template' => [
			'type' => 'carousel',
			'columns' => [$col1]
			]
		];


//$SorryTxt = "ขออภัย อยุ่ระหว่างจัดทำ";
$url = 'https://api.line.me/v2/bot/message/reply';
//$postbackdata = t1($SorryTxt);
//$data = data1($replyToken,$postbackdata);
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
