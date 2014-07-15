<?php
#################################################
#  Raspberry Pi Cam SMS image Requester         #
# 												#
#												#
# Made by Robert Wiggins						#
# Donate or questions email txt3rob@gmail.com	#
#												#
#################################################
GLOBAL $message;
if ($message == "MMS")
{
$height = "640";
$width = "800";
}

$filename = '' . uniqid() . '';
$currentdir = getcwd();
passthru ('sudo raspistill -o '.$currentdir.'/images/image_'.$filename.'.jpg -h '.$height.' -w '.$width.' -vf');
echo "Photo Taken File name is image_".$filename.".jpg <br>";
$image = "".$currentdir."/images/image_".$filename.".jpg";


?>
