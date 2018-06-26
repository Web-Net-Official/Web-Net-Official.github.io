<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Web-Net Search Results</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="row">
		<div class="col-md-12">
			<div class="search-again">
				<div class="row">
					<form method="post">
						<div class="col-md-3 text-center">
							<h1><b><i><a href="index.php"><span style="color: blue">WEB</span> <span style="color: indigo">NET</span></a></i></b></h1>
						</div>
						<div class="col-md-6">
							<input type="text" name="text" value=""required>
						</div>
						<div class="col-md-2">
							<button type="submit">Search</button>
						</div>
					</form>
				</div>
<h6><b><i>Developer: M Raahim Khattak</h6>
			</div>
		</div>
	</div>
	<?php
//Turn the content from text box into variable
$page=$_POST['text'];

if($_POST['text']=='webnet') {
//set up a redirect to that page
echo "<meta http-equiv=\"refresh\" content=\"0;URL=http://webnet.bitballoon.com/.\">";

}

else if($_POST['text']=='Webnet') {
	
echo "<meta http-equiv=\"refresh\" content=\"0;URL=http://webnet.bitballoon.com/.\">";

}
else if($_POST['text']=='facebook') {
	
echo "<meta http-equiv=\"refresh\" content=\"0;URL=https://www.facebook.com/.\">";

}
else if($_POST['text']=='Facebook') {
	
echo "<meta http-equiv=\"refresh\" content=\"0;URL=https://www.facebook.com/.\">";

}
else if($_POST['text']=='yahoo') {
	
echo "<meta http-equiv=\"refresh\" content=\"0;URL=https://www.yahoo.com/.\">";

}
else if($_POST['text']=='Yahoo') {
	
echo "<meta http-equiv=\"refresh\" content=\"0;URL=https://www.yahoo.com/.\">";

}
else if($_POST['text']=='youtube') {
	
echo "<meta http-equiv=\"refresh\" content=\"0;URL=https://www.youtube.com/.\">";

}
else if($_POST['text']=='Youtube') {
	
echo "<meta http-equiv=\"refresh\" content=\"0;URL=https://www.youtube.com/.\">";

}
else if($_POST['text']=='bing') {
	
echo "<meta http-equiv=\"refresh\" content=\"0;URL=https://www.bing.com/.\">";

}
else if($_POST['text']=='Bing') {
	
echo "<meta http-equiv=\"refresh\" content=\"0;URL=https://www.bing.com/.\">";

}
else if($_POST['text']=='Google') {
	
echo "<meta http-equiv=\"refresh\" content=\"0;URL=https://www.google.com/.\">";

}
else if($_POST['text']=='google') {
	
echo "<meta http-equiv=\"refresh\" content=\"0;URL=https://www.google.com/.\">";

}
else {
echo "<center><h1><b><i>Aww Snap !!</i></b></h1></center>";
}
?>	
</body>
</html>