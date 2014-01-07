<?php
#################################################
#  Raspberry Pi Cam SMS image Requester         #
# 												#
#												#
# Made by Robert Wiggins						#
# Donate or questions email txt3rob@gmail.com	#
#												#
#################################################
$filename = '' . uniqid() . '';
$currentdir = getcwd();
passthru ('sudo raspistill -o '.$currentdir.'/images/image_'.$filename.'.jpg -h 640 -w 800 -vf');
echo "Photo Taken File name is image_".$filename.".jpg <br>";
$image = "".$currentdir."/images/image_".$filename.".jpg";


?>