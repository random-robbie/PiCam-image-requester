PiCam-image-requester
=====================

Install this script on your Pi with Picam and portforward your http port.

enter the details in the settings on your textlocal inbox.

once you have set it up 

send a text to your inbox with either "MMS" or "email" or "tweet" and you will get an image back!

I have used apache for this and setup postfix to send the email.

Does require a [Textlocal] (http://www.txtlocal.co.uk/?tlrx=162301)  account.

Contact me if you need to use a different providers API.

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

Run the following command as root 


```
sudo echo "www-data ALL=(ALL) NOPASSWD: ALL" >> /etc/sudoers
```



This repo includes codebird - https://github.com/jublonet/codebird-php


Hopefully all is clear for you to set this up.

Any help or donations send to txt3rob@gmail.com
