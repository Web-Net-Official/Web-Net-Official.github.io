<?php
$hostname = "localhost"; // usually is localhost, but if not sure, check with your hosting company, if you are with webune leave as localhost
$db_user = ""; // change to my database password
$db_password = ""; // change to my database password
$database = "search"; // provide my  database name
$db_table = "searchengine"; 


# STOP HERE
####################################################################
# THIS CODE IS USED TO CONNECT TO THE MYSQL DATABASE
$db = mysql_connect($hostname, $db_user, $db_password);
mysql_select_db($database,$db);
?>
<html>
<head>
<title>Add url- RocketBreaker</title>
<style type="text/css">

#center p {
	text-align: center;
	font-family: Calibri;
}
#center b {
}
.phising {
	font-family: Calibri;
}
.phising {
	font-family: Calibri;
}
.phisd {
	text-align: center;
	font-family: Calibri;
	font-weight: bold;
	font-size: 18px;
}
.email {
	font-weight: bold;
}
.phisingk {
	font-weight: bold;
}
.ka {
	font-weight: bold;
}
.footer .footer {
	text-align: center;
	font-size: 24px;
}
.footer .footer {
	font-size: 18px;
	font-family: Calibri;
}
</style>
</head>
<body>
<style type="text/css">
.ha {
	font-family: Impact;
}
.ha {
	font-family: Impact;
}
.ga {
	color: #000;
}
.jk {
	color: #F00;
}
.jl {
	font-family: Impact;
	color: #F00;
}
.mds {
	text-align: center;
}
.mds {
	font-family: Impact;
}
a:link {
	color: #000;
}
a:visited {
	color: #000;
}
a:hover {
	color: #000;
}
a:active {
	color: #000;
}
.d {
	color: #00C;
	font-size: 16px;
	font-family: Impact;
}
.ha .ga .ga {
	color: #000;
}
.jk .jl {
	color: #000;
}
.jk {
	color: #000;
}
.JX {
	font-family: Impact;
	text-align: center;
	font-size: 36px;
	color: #B5E61D;
}
.MZ {
	color: #939;
}
.KX {
	color: #7092BE;
}
.MX {
	color: #06F;
}
.KKS {
	color: #A349A4;
}
.XSKS {
	color: #7F7F7F;
}

	
		div#center{
		margin-left:170px;
		margin-right:170px;
		padding-left:10px;
		padding-right:10px;
		
	}
	footer {
	text-align: center;
	border:2px;
}

#menu {
	background-color:#93C;
	height:30px;
	padding-top:4px;
	}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<body text="#D6D6D6" link="#D6D6D6">
<p>
  <?php
if (isset($_REQUEST['Submit'])) {
# THIS CODE TELL MYSQL TO INSERT THE DATA FROM THE FORM INTO YOUR MYSQL TABLE
$sql = "INSERT INTO $db_table(title,description,url,keywords) values ('".mysql_real_escape_string(stripslashes($_REQUEST['title']))."','".mysql_real_escape_string(stripslashes($_REQUEST['description']))."','".mysql_real_escape_string(stripslashes($_REQUEST['url']))."','".mysql_real_escape_string(stripslashes($_REQUEST['keywords']))."')";
if($result = mysql_query($sql ,$db)) {
echo '<h1>Thank you</h1>Your information has been entered into our database<br><br>';
} else {
echo "ERROR: ".mysql_error();
}
?>
</p>
<h1 class="ha"><a href="index.php"><img src="/images/ROCKETBREAKER.png" width="811" height="98" border="0"></a></h1>
<hr width="90%">
<form method="post" action="">
<div id="center">
  <p>Title<br><input name="title" type="text" maxlength="30">
  </p>
  <p>Description<br>
    <textarea name="description" cols="40"></textarea>
    <br>
    </p>
  <p>Url<br>
    <input name="http://" type="text" id="http://" value="dont type http://">
  </p>
  <p>Keywords<br>
    <input type="text" name="keywords">
  </p>
  <p><br><br>
    <input name="Sumbit" type="submit" class="ha" value="Sumbit" id="Sumbit">
  </p>
</div>
</form>
<p>
  <?php
}
?></p>
<p class="phisd">Read This Before You Add Any Website</p>
<ol>
  <li class="phising"><span class="phisingk">All phishing, fraud, scam and hacking websites will be reported to the FBI's Cyber-Crime division</span> (USA) and SOCA (Serious Organized Crime Agency - UK). We have no problem providing them the contents of your website, registration details, logs and IP addresses so that they can gain intelligence for online fraud and criminal activity. </li>
  <li class="phising">You can not go away by putting <span class="ka">any pornographic character, or abuse which is against the law</span>.</li>
  <li class="phising">Contact us for more information at <span class="email">rocketbreaker@gmail.com</span></li>
</ol>
<p>
<div class="footer">
  <p class="footer">  <img src="images/footer.png" width="137" height="27" class="phisd"><br>
  <a href="#">privacy</a> <a href="#">languages</a> <a href="#">copyrights</a> <a href="#">terms and conditions</a></p></div>
</body>
</html> 