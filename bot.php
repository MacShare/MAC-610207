<?php
include 'headbot.php';
include 'functionbot.php';

// Get POST body content
$content = file_get_contents('php://input');
$events = json_decode($content, true);

if (!is_null($events['events'])) {
  foreach ($events['events'] as $event) {
    // Reply only when Follow me.
		if (($event['type'] == 'follow') or ($event['type'] == 'join')) {
			// Get user follow or join me
			$touserid = $event['source']['userId'];
			$toroomid = $event['source']['roomId'];
			$togroupid = $event['source']['groupId'];
			// Gen Text Reply
			$gentext = "ขอบคุณที่ติดตามเรา";
			// Get Replytoken
			$replyToken = $event['replyToken'];
			//Make a POST Request to Messaging API to reply to follower
			$messages = t1($gentext);
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
			
			// Find User Data
			$url = 'https://api.line.me/v2/bot/profile/'.$touserid;
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			$result = curl_exec($ch);
			curl_close($ch);
			//echo $result . "\r\n";
			$events = json_decode($result, true);
			// Make Push Messageing
			$displayName = $events['displayName'];
			$userId = $events['userId'];
			$text = $displayName." User\n".$userId;
			$messages = [
				'type' => 'text',
				'text' => $text
				//.'\nRequest '.$reqtext
			];
			$url = 'https://api.line.me/v2/bot/message/push';
			$data = [
				'to' => 'U554a18dbd36996fdb3dd95c218cf6db0',
				'messages' => [$messages]
			];
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
			
			// To group Mac Share
			$data = [
				'to' => 'Cc7ac9ccc51f05b2a60a1abed8cf85723',
				'messages' => [$messages]
			];
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
			
			// Find Group Data
			$text = "Group\n".$togroupid;
			$messages = [
				'type' => 'text',
				'text' => $text
				//.'\nRequest '.$reqtext
			];
			$url = 'https://api.line.me/v2/bot/message/push';
			$data = [
				'to' => 'U554a18dbd36996fdb3dd95c218cf6db0',
				'messages' => [$messages]
			];
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
		}
    // Reply only when MacShare.
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			$touserid = $event['source']['userId'];
			$toroomid = $event['source']['roomId'];
			$togroupid = $event['source']['groupId'];
			$replyToken = $event['replyToken'];
			$text = $event['message']['text'];			
			//Select Group
			if (($togroupid == 'Cd90b89c39f5a695f6d6996c80829e269') or ($togroupid == 'Cc7ac9ccc51f05b2a60a1abed8cf85723') or ($touserid == 'U554a18dbd36996fdb3dd95c218cf6db0')) {
				switch ($text) {
					case "MacShare":
						// MacShare Menu Last Time
						$url = 'https://api.line.me/v2/bot/message/reply';
						$data = temp2imgcol3($replyToken,$ecsURL);			
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
						break;						
					case "action=Powerflow":
						// Power Flow Last Time
						include 'MacPowerFlow.php';
						break;					
					case "action=SwitchingDiagram":
						// Switching Diagram
						include 'MacDiagram.php';
						break;
					case "action=TransformerLoading":
						// Transformer Last Day
						include 'MacTransformer.php';
						break;	
					case "action=TelCheck":
						// Tel Check
						include 'TelCheck.php';
						//include 'MacSorry.php';
						break;							
					default:
						include 'MacSorry.php';						
				}									
			}	
		}
    // Action Postback only when MacShare.
	  	if ($event['type'] == 'postback') {
			$touserid = $event['source']['userId'];
			$toroomid = $event['source']['roomId'];
			$togroupid = $event['source']['groupId'];
			$replyToken = $event['replyToken'];
			$timedata = $event['timestamp'];
			$postbackdata = $event['postback']['data'];
			//$postbackdata = $postbackdata;
			//$postbackdata = "Test Postback";
			if (($togroupid == 'Cd90b89c39f5a695f6d6996c80829e269') or ($togroupid == 'Cc7ac9ccc51f05b2a60a1abed8cf85723') or ($touserid == 'U554a18dbd36996fdb3dd95c218cf6db0')) {
				switch ($postbackdata) {
					case "action=Powerflow":
						// Power Flow Last Time
						include 'MacPowerFlow.php';
						break;					
					case "action=SwitchingDiagram":
						// Switching Diagram
						include 'MacDiagram.php';
						break;
					case "action=TransformerLoading":
						// Transformer Last Day
						include 'MacTransformer.php';
						break;	
					case "action=DG_BK":
						include 'MacDG_BK.php';
						break;	
					case "action=DG_BN":
						include 'MacDG_BN.php';
						break;		
					case "action=DG_BPL":
						include 'MacDG_BPL.php';
						break;	
					case "action=DG_CHW":
						include 'MacDG_CHW.php';
						break;	
					case "action=DG_LLA":
						include 'MacDG_LLA.php';
						break;		
					case "action=DG_LPR":
						include 'MacDG_LPR.php';
						break;	
					case "action=DG_NB":
						include 'MacDG_NB.php';
						break;		
					case "action=DG_NCO":
						include 'MacDG_NCO.php';
						break;		
					case "action=DG_NV":
						include 'MacDG_NV.php';
						break;	
					case "action=DG_ON":
						include 'MacDG_ON.php';
						break;		
					case "action=DG_RPS":
						include 'MacDG_RPS.php';
						break;
					case "action=DG_RS":
						include 'MacDG_RS.php';
						break;	
					case "action=DG_SB":
						include 'MacDG_SB.php';
						break;		
					case "action=DG_SNO":
						include 'MacDG_SNO.php';
						break;	
					case "action=DG_STB":
						include 'MacDG_STB.php';
						break;	
					case "action=DG_TPR":
						include 'MacDG_TPR.php';
						break;						
					case "action=BK_BN_BPL_CHW":
						include 'MacDG_BK_CHW.php';
						break;
					case "action=LLA_LPR":
						include 'MacDG_LLA_LPR.php';
						break;
					case "action=NB_NCO":
						include 'MacDG_NB_NCO.php';
						break;
					case "action=NV_ON":
						include 'MacDG_NV_ON.php';
						break;
					case "action=RPS_RS_SB":
						include 'MacDG_RPS_SB.php';
						break;
					case "action=SNO_STB_TPR":
						include 'MacDG_SNO_TPR.php';
						break;
					case "action=Energy_Last_Day":
						include 'MacEnergy_Last_Day.php';
						break;	
					case "action=TxLoad2_Last_Day":
						include 'MacTxLoad2_Last_Day.php';
						break;	
					case "action=TLLoad_Last_Day":
						include 'MacTLLoad_Last_Day.php';
						break;							
					default:
						include 'MacSorry.php';						
				}
			}	
		} 
  }
}

?>
