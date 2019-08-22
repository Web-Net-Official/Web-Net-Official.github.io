<?php
error_reporting(0);
include 'db.php';
$username = stripslashes(htmlspecialchars($_GET['username']));
$message = stripslashes(htmlspecialchars($_GET['message']));
if ($message == "" || $username == "") {
	die();
}
$result = $db->prepare("INSERT INTO messages VALUES('',?,?)");
$result->bind_param("ss", $username, $message);
$result->execute();