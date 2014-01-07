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

$emessage = "
<html>
<body>
<img src=".$url.">
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= ''.$efrom.'' . "\r\n";

if(mail($eto,$subject,$emessage,$headers))
{
     echo 'MAIL SENT'; 
} else { 
     echo 'MAIL FAILED';
}
?>
