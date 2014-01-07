<?php
#################################################
#  Raspberry Pi Cam SMS image Requester         #
# 												#
#												#
# Made by Robert Wiggins						#
# Donate or questions email txt3rob@gmail.com	#
#												#
#################################################
// require codebird
require_once('codebird.php');
include ('config.php');
 
\Codebird\Codebird::setConsumerKey($consumer_key, $consumer_secret);
$cb = \Codebird\Codebird::getInstance();
$cb->setToken($access_token, $access_token_secret);
 
$params = array(
  'status' => ''.$tweetstatus.'',
  'media[]' => ''.$image.''
);
$reply = $cb->statuses_updateWithMedia($params);
echo "Image Tweeted";
?>