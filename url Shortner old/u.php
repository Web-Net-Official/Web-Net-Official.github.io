<?php
require_once "config.php";
require_once "ShortUrl.php";

if (empty($_GET["c"])) {
    header("Location: shorten.php");
    exit;
} 

$code = $_GET["c"];

try {
    $pdo = new PDO(DB_PDODRIVER . ":host=" . DB_HOST . ";dbname=" . DB_DATABASE,
        DB_USERNAME, DB_PASSWORD);
}
catch (\PDOException $e) {
    header("Location: error.php");
    exit;
}

$shortUrl = new ShortUrl($pdo);
try {
    $url = $shortUrl->shortCodeToUrl($code);
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: " . $url);
}
catch (\Exception $e) {
print_r($e);
    header("Location: error.php");
    exit;
}
