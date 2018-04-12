<?php
$to="sidsidarora.sa@gmail.com";
$subject="confirmation";
$message="your seat has been reserved";
$header="From:khushichoudhary12599@gmail.com\r\n";
$retval=mail($to,$subject,$message,$header);
if($retval==true)
{
echo "Message successfully send";}
else
echo "message not sent";
?>