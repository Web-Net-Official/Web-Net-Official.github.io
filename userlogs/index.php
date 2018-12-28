<!--------- Custom checker to check how much times a day user logs into panel ------>
	<!--------- But this is not it i want to make the check of that user and remove account after 2 days if he doesnt get back ------>
<div id="wrapper">
<div id="detail_div">
<?php
function ip_details($IPaddress) 
{
    $json       = file_get_contents("http://ipinfo.io/{$IPaddress}");
    $details    = json_decode($json);
    return $details;
}

$IPaddress  =  $_SERVER['REMOTE_ADDR'];

$details    =   ip_details("$IPaddress");

//echo $details->city;   
// echo $details->country;  
//echo $details->org;      
//echo $details->hostname; 

 $page = "http://".$_SERVER['HTTP_HOST']."".$_SERVER['PHP_SELF'];
 //$datetime = date("F j, Y, g:i a, [Y-m-d-w]");
 $datetime = date("l jS \of F Y h:i:s A");
 $useragent = $_SERVER['HTTP_USER_AGENT'];
 /*
 echo "<p>Username : "$_SESSION['username']."</p>";
 echo "<p>Country : ".$details->country."</p>";
 echo "<p>City : ".$details->city."</p>";
 echo "<p>Refferer : ".$_SERVER['HTTP_REFERER']."</p>";
 echo "<p>IP Address : ".$IPaddress."</p>";
 echo "<p>Current Page : ".$page."</p>";
 echo "<p>Current Time : ".$datetime."</p>";
 echo "<p>Browser : ".$useragent."</p>";
 */
 
$text = "
Country : ".$details->country."
City : ".$details->city."
IP Address : ".$IPaddress."
Current Page : ".$page."
Current Time : ".$datetime."
Browser : ".$useragent."\n";

$filename = "userlogs.txt";
$fh = fopen($filename, "a");
fwrite($fh, $text);
fclose($fh);
?>
</div>
</div>
<!--------- END ----------->