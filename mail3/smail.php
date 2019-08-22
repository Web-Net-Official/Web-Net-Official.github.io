
<?php
$to = $_POST['toemail'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$fromname = $_POST['fromname'];
$from = $_POST['from'];
$replytoname = $_POST['replytoname'];
$replytoemail = $_POST['replytoemail'];

$fromFull 	=  $fromname . ' <'.$from.'> ';
$replytoFull 	=  $replytoname . ' <'.$replytoemail.'> ';
	
$headers  = "From: ".$fromFull . "\r\n";
$headers .= "Reply-To: ".$replytoFull . "\r\n";
	
if (mail($to, $subject, $message, $headers)) {
  include 'redirect/index.html';
} else {
   echo "ERROR";
}
?>