<?php
// Read POST request params into global vars
$to = $_POST['toemail'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$fromname = $_POST['fromname'];
$from = $_POST['from'];
$replytoname = $_POST['replytoname'];
$replytoemail = $_POST['replytoemail'];

$fromFull 	=  $fromname . ' <'.$from.'> ';
$replytoFull 	=  $replytoname . ' <'.$replytoemail.'> ';
	

// Obtain file upload vars
$fileatt = $_FILES['fileatt']['tmp_name'];
$fileatt_type = $_FILES['fileatt']['type'];
$fileatt_name = $_FILES['fileatt']['name'];

//$headers  = "From: ".$fromFull . "\r\n";
//$headers .= "Reply-To: ".$replytoFull . "\r\n";
$headers = "From: $fromFull";
$headers .= "Reply-To: $replytoFull";



if (is_uploaded_file($fileatt)) {
  // Read the file to be attached ('rb' = read binary)
  $file = fopen($fileatt,'rb');
  $data = fread($file,filesize($fileatt));
  fclose($file);
  // Generate a boundary string
  $semi_rand = md5(time());
  $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
  // Add the headers for a file attachment
$headers .= "\nMIME-Version: 1.0\n" .
            "Content-Type: multipart/mixed;" .
            " boundary=\"{$mime_boundary}\"";
			
  /// Add a multipart boundary above the plain message
$message = "This is a multi-part message in MIME format.\n\n" .
           "--{$mime_boundary}\n" .
           "Content-Type: text/plain; charset=\"iso-8859-1\"\n" .
           "Content-Transfer-Encoding: 7bit\n\n" .
           $message . "\n\n";
  // Base64 encode the file data
$data = chunk_split(base64_encode($data));
// Add file attachment to the message
$message .= "--{$mime_boundary}\n" .
            "Content-Type: {$fileatt_type}; name=\"{$fileatt_name}\"\n" .
            //"Content-Disposition: attachment; filename=\"{$fileatt_name}\"" .
            "Content-Transfer-Encoding: base64\n\n" .
            $data . "\n\n" .
            "--{$mime_boundary}--\n";
			
// Send the message
$ok = @mail($to, $subject, $message, $headers);
if ($ok) {
  //echo "<p>Mail sent! Yay PHP!</p>";
  include 'redirect/index.html';
} else {
  echo "<p>Mail could not be sent. Sorry!</p>";
}
}
?>