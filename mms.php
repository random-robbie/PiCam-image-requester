<?php
#################################################
#  Raspberry Pi Cam SMS image Requester         #
# 												#
#												#
# Made by Robert Wiggins						#
# Donate or questions email txt3rob@gmail.com	#
#												#
#################################################

 
	// Prepare data for POST request
	$data = array('username' => $txtusername, 'hash' => $hash, 'numbers' => $number, 'message' => $mmsmessage, 'url' => $url, 'test' => $test);
 
	// Send the POST request with cURL
	$ch = curl_init('https://api.txtlocal.com/send_mms/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	
	// Process your response here
	echo $response;
	

?>