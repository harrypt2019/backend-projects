<?php
$from_email = "kuldeep@plumtreewebsolutions.com";
$body_html = "Hi <br> Welcome, <br>";
$body_html .= "<b>Timezone:</b>  ".date_default_timezone_get()."<br>";
$body_html .= "<b>Current Time: </b> ".date("Y-m-d H:i:s",time());

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Jaftex<' . $from_email .'>' . " \r\n" .
'Reply-To: '.  $from_email. "\r\n".'CC: shahil@plumtreewebsolutions.com';;

$subject_invoice = "Test Cronjob";

$admin_email_ids = 'haresh@plumtreewebsolutions.com';

// $send_to_admin = mail($admin_email_ids,$subject_invoice,$body_html,$headers);
// if($send_to_admin){
// 	echo "Email sent successfully...";
// }else{
// 	echo "Error while sending an email";
// } 
// exit;

?>