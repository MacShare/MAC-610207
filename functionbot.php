<?php

function t1($tt1)
{
	$messages = [
		'type' => 'text',
		'text' => $tt1
		];
	return $messages;
}
function im1($originalContentUrl,$previewImageUrl)
{
	$messages = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl ,
		'previewImageUrl' => $previewImageUrl
		];
	return $messages;
}
// Function Return data
function im2($replyToken,$originalContentUrl1,$previewImageUrl1,$originalContentUrl2,$previewImageUrl2)
{
	$image1 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl1 ,
		'previewImageUrl' => $previewImageUrl1
		];
	$image2 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl2 ,
		'previewImageUrl' => $previewImageUrl2
		];
	$data = [
		'replyToken' => $replyToken,
		'messages' => [$image1,$image2]
		];	
	return $data;
}
function im3($replyToken,$originalContentUrl1,$previewImageUrl1,$originalContentUrl2,$previewImageUrl2,$originalContentUrl3,$previewImageUrl3)
{
	$image1 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl1 ,
		'previewImageUrl' => $previewImageUrl1
		];
	$image2 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl2 ,
		'previewImageUrl' => $previewImageUrl2
		];
	$image3 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl3 ,
		'previewImageUrl' => $previewImageUrl3
		];
	$data = [
		'replyToken' => $replyToken,
		'messages' => [$image1,$image2,$image3]
		];	
	return $data;
}
function im4($replyToken,$originalContentUrl1,$previewImageUrl1,$originalContentUrl2,$previewImageUrl2,$originalContentUrl3,$previewImageUrl3,$originalContentUrl4,$previewImageUrl4)
{
	$image1 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl1 ,
		'previewImageUrl' => $previewImageUrl1
		];
	$image2 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl2 ,
		'previewImageUrl' => $previewImageUrl2
		];
	$image3 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl3 ,
		'previewImageUrl' => $previewImageUrl3
		];
	$image4 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl4 ,
		'previewImageUrl' => $previewImageUrl4
		];
	$data = [
		'replyToken' => $replyToken,
		'messages' => [$image1,$image2,$image3,$image4]
		];	
	return $data;
}
function im5($replyToken,$originalContentUrl1,$previewImageUrl1,$originalContentUrl2,$previewImageUrl2,$originalContentUrl3,$previewImageUrl3,$originalContentUrl4,$previewImageUrl4,$originalContentUrl5,$previewImageUrl5)
{
	$image1 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl1 ,
		'previewImageUrl' => $previewImageUrl1
		];
	$image2 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl2 ,
		'previewImageUrl' => $previewImageUrl2
		];
	$image3 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl3 ,
		'previewImageUrl' => $previewImageUrl3
		];
	$image4 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl4 ,
		'previewImageUrl' => $previewImageUrl4
		];
	$image5 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl5 ,
		'previewImageUrl' => $previewImageUrl5
		];	
	$data = [
		'replyToken' => $replyToken,
		'messages' => [$image1,$image2,$image3,$image4,$image5]
		];	
	return $data;
}
function t1im2($replyToken,$tt1,$originalContentUrl1,$previewImageUrl1,$originalContentUrl2,$previewImageUrl2)
{
	$messages = [
		'type' => 'text',
		'text' => $tt1
		];
	$image1 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl1 ,
		'previewImageUrl' => $previewImageUrl1
		];
	$image2 = [
		'type' => 'image',
		'originalContentUrl' => $originalContentUrl2 ,
		'previewImageUrl' => $previewImageUrl2
		];
	$data = [
		'replyToken' => $replyToken,
		'messages' => [$messages,$image1,$image2]
		];	
	return $data;
}
// Function Return data
function data1($replyToken,$messages)
{
	$data = [
		'replyToken' => $replyToken,
		'messages' => [$messages]
		];
	return $data;
}
// Function Return data AS Image Coloum 3
function temp2imgcol3($replyToken,$ecsURL)
{
	$imgUrl1 = $ecsURL."ColMenu_1.jpg";
	$imgUrl2 = $ecsURL."ColMenu_2.jpg";
	//$ecsURL = "https://ecs.egat.co.th/index.php/apps/gallery/ajax/image.php?file=fd20b4335410e38c017713bd6d458deb%2F%2F";
	$imgUrl3 = $ecsURL."ColMenu_3.JPG";
	$col1_act = [
		'type' => 'postback',
		'label' => 'Power Flow',
		'data' => 'action=Powerflow'	
		];
	$col1 = [
		//'imageUrl' => 'https://ecs.egat.co.th/index.php/apps/gallery/ajax/image.php?file=fd20b4335410e38c017713bd6d458deb%2F%2FColMenu_1.jpg',
		'imageUrl' => 'https://still-inlet-83395.herokuapp.com/img/ColMenu_1.jpg',
		'title' => 'This is menu.',
		'text' => 'Discription',
		'action' => $col1_act
		];
		
	$col2_act = [
		'type' => 'postback',
		'label' => 'Sw.Diagram',
		'data' => 'action=SwitchingDiagram'	
		];
	$col2 = [
		//'imageUrl' => 'https://ecs.egat.co.th/index.php/apps/gallery/ajax/image.php?file=fd20b4335410e38c017713bd6d458deb%2F%2FColMenu_2.jpg',
		'imageUrl' => 'https://still-inlet-83395.herokuapp.com/img/ColMenu_2.jpg',
		'title' => 'This is menu.',
		'text' => 'Discription',
		'action' => $col2_act
		];	
	$col3_act = [
		'type' => 'postback',
		'label' => 'Tx.Loading',
		'data' => 'action=TransformerLoading'	
		];
	$col3 = [
		//'imageUrl' => 'https://ecs.egat.co.th/index.php/apps/gallery/ajax/image.php?file=fd20b4335410e38c017713bd6d458deb%2F%2FColMenu_3.jpg',
		'imageUrl' => $imgUrl3,
		'title' => 'This is menu.',
		'text' => 'Discription',
		'action' => $col3_act
		];			
	
	$messages = [
		'type' => 'template',
		'altText' => 'MAC Share Menu',
		'template' => [
			'type' => 'image_carousel',
			'columns' => [$col1,$col2,$col3]
			]
		];
	$data = [
		'replyToken' => $replyToken,
		'messages' => [$messages]
		];
	return $data;	
}
?>
