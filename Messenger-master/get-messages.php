<?php
error_reporting(0);
include 'db.php';
$username = stripslashes(htmlspecialchars($_GET['username']));
$result = $db->prepare("SELECT * FROM messages");
$result->bind_param("ss", $username);
$result->execute();
$result = $result->get_result();
while ($r = $result->fetch_row()) {
	echo $r[1];
	echo "\\";
	echo $r[2];
	echo "\n";
}