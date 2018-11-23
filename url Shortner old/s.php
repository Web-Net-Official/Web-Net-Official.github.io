<?php
require_once "config.php";
require_once "ShortUrl.php";
require_once "footer.php"; 
require_once "nav.php"; 

if ($_SERVER["REQUEST_METHOD"] != "POST" || empty($_POST["url"])) {
    header("Location: shorten.php");
    exit;
} 

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
    $code = $shortUrl->urlToShortCode($_POST["url"]);
}
catch (\Exception $e) {
    header("Location: error.php");
    exit;
}
$url = SHORTURL_PREFIX . $code;

echo <<<ENDHTML
<html>
 <head>
 <title>Webnet Official</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="icon" href="icon/favicon.png" type="image/x-icon" />
     <meta name="viewport" content="width=device-width, initial-scale=1">
 </head>
 <style>
body {
   background-image: url(images/back.png);
  opacity: 0.70;
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
  background-color: #464646;
  background-attachment: fixed;
}

.navbar {
  overflow: hidden;
  position: fixed;
  top: 0;
  width: 100%;
}
</style>
 <body>
 <center>
 <br><br><br>
 <img src="icon/favicon.png" width="250" height="200" class="responsive"> 
 <br>
   <label for="url"><h2>Make sure to save that URL to urself!
   <br>Your URL has been Shorened!</h2></label>
  <h3><strong>Short URL:</strong> <a href="$url"><font color="green">$url</a></h3>
  </center>
 </body>
</html>
ENDHTML;
 
