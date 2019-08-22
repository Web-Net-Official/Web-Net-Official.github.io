<?php
$db = new mysqli("localhost", "root", "password", "messenger");
if ($db->connect_error) {
	die("Sorry, there was a problem connecting to our database.");
}
?>