<?php
#################################################
#  Raspberry Pi Cam SMS image Requester         #
# 												#
#												#
# Made by Robert Wiggins						#
# Donate or questions email txt3rob@gmail.com	#
#												#
#################################################
include ('config.php');

// Text Local Post Info Grab
$number = $_REQUEST['sender'];
$message2 = $_REQUEST['content'];

$message = str_replace($keyword, "", $message2);

// Is user authorised
if (in_array($number, $auth)) {
    echo "User Found \n";
} else {
	echo "Not Authorised";
	exit();
}

//if message says MMS
if ($message == "MMS") {
	include ('photo.php');
	include ('upload.php');
    include('mms.php');
	exit();
	}

//if message says Email
if ($message == "email") {
	include ('photo.php');
	include ('upload.php');
    include ('email.php');
	exit();
}
//if message says tweet
if ($message == "tweet") {
    include ('photo.php');
    include ('tweet.php');
	exit();
	}
?>

