<?php
#################################################
#  Raspberry Pi Cam SMS image Requester         #
# 												#
#												#
# Made by Robert Wiggins						#
# Donate or questions email txt3rob@gmail.com	#
#												#
#################################################

 
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_VERBOSE, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible;)");
    curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_URL, 'http://uploads.im/api' );
	//most importent curl assues @filed as file field
    $post_array = array(
        "upload"=>"@".$image."",
		"format"=>"xml"
    );
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_array);
    $response = curl_exec($ch);
	//echo $response;
	$xml = simplexml_load_string($response);
	$url = $xml->data[0]->img_url;
	echo $url;
	
?>