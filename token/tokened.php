<!DOCTYPE html>
<html>
<link rel="icon" href="token-logo.png" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
body, html {
    height: 100%
}

.bgimg {
    background-image: url('Gray-background-3.jpg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
	background-color: rgba(0, 0, 255, 0.45);
    background-blend-mode: multiply;
    position: relative;
    color: white;
    font-family: "Courier New", Courier, monospace;
    font-size: 25px;
}

.topleft {
    position: absolute;
    top: 0;
    left: 16px;
   width: 30px; 
   height: auto; 
   margin-top: 10px; 
   margin-left: 10px;
   }

.bottomleft {
    position: absolute;
    bottom: 0;
    left: 16px;
}

.middle {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}
p {
font-size: 20px;
}
</style>
<body>
<title>WEBNET OFFICIAL Token</title>
<div class="bgimg">
  <div class="topleft">
    <p><img src="token-logo.png" width="50" height="60"></p>
  </div>
  <div class="middle">
    <!--<h1>COMMING SOON</h1>-->
	<img src="token-logo.png" width="200" height="200">
    <hr style="margin:auto;width:40%">
    <p id="demo" style="font-weigth:bold;font-size:30px"></p>
	<p><?php
$name = $_POST['name'];
echo "<h3> Hello $name Following is your token number</h3>";
$token = uniqid();
echo "".$token."<br>";
echo "Kindly submit it <a href='http://forum.webnet-oficial.tk/forum/index.php?board=29.0' style='text-decoration:none'><b>here</b></a>";
?></p>
  </div>
  <div class="bottomleft">
    <p>Copyright &copy; Webnet Official &bull; All Rights Reserved</p>
  </div>
</div>

<script type="text/javascript">
window.addEventListener("keydown",function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==70||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){e.preventDefault()}});document.keypress=function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==70||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){}return false}
document.onkeydown=function(e){e=e||window.event;if(e.keyCode==123||e.keyCode==18){return false}}
document.addEventListener("contextmenu", function(e){
    e.preventDefault();
}, false);
</script>

</body>
</html>

