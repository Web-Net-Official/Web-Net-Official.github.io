
<?php
$to = $_POST['toemail'];
$subject = $_POST['subject'];
//$message = $_POST['message'];
$fromname = $_POST['fromname'];
$from = $_POST['from'];
$replytoname = $_POST['replytoname'];
$replytoemail = $_POST['replytoemail'];
$fromFull 	=  $fromname . ' <'.$from.'> ';
$replytoFull 	=  $replytoname . ' <'.$replytoemail.'> ';

$headers  = "From: ".$fromFull . "\r\n";
$headers .= "Reply-To: ".$replytoFull . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$headers .= "X-Priority: 3\r\n";
$headers .= "X-Mailer: PHP". phpversion() ."\r\n";

//$htmlContent = '';
$htmlContent = file_get_contents("template.html");

if (mail($to, $subject, $htmlContent, $headers)) {
  include '../redirect/index.html';
} else {
   echo "ERROR";
}
?>