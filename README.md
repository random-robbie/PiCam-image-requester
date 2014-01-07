PiCam-image-requester
=====================

Send a SMS and Your Raspberry Pi cam will send a MMS or Email or Tweet of the pic for you

config.php
-------

```
// Textlocal account details
$txtusername = '';  // Your textlocal username/email
$hash = '';   // Your Textlocal API hash
$keyword = ''; // Your Inbox Keyword ensure you add a space

// MMS Message details
$mmsmessage = "Your Requested Image";  // MMS message with pic
$sender = 'Pi Cam';  // Sender ID
$test = "TRUE";  // Set to FALSE to send the MMS true is set to test it's working

//Authorised Numbers array
$auth = array('447741256987');  // add your number or any other numbers here to allow them to use the service

//Twitter Config
// Get your details from http://dev.twitter.com
$consumer_key = '';  
$consumer_secret = '';
$access_token = '';
$access_token_secret = '';
$tweetstatus = '';

//Email Config
$efrom = "PI CAM <FROM EMAIL ADDRESS>";  // Sender email address 
$eto = "Email test <TOEMAILADDRESS>"; // email address to send all pics to
$subject = "Pi Cam"; // Email subject


```


Hopefully all is clear for you to set this up.

Any help or donations send to txt3rob@gmail.com
