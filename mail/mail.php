

<?php
$to = $_POST['toemail'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$from = $_POST['from'];
if (mail($to, $subject, $message, "From:" . $from)) {
  include 'redirect/index.html';
} else {
   echo "ERROR";
}
?>