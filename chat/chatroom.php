<center>
<img src="globe.png" width="192" height="192">
</center>
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, width=device-width, user-scalable=yes">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<?php
session_start();
 ?>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script>
	
function getText() {
		
	var $a =	document.getElementById('text').value;
	
		xhr = new XMLHttpRequest();
		xhr.open('POST' , 'chatdb.php',true);
		xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
		xhr.send('chat='+$a);
		xhr.onreadystatechange=function(){
			if (xhr.responseText){
			//	document.getElementById('chatarea').innerHTML=xhr.responseText;
									}
				}
					}
		

function setText(){
	
	xhr = new XMLHttpRequest();
	xhr.open('POST' , 'chatFetch.php' , true);
	xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
	xhr.send();
	xhr.onreadystatechange = function(){
	//	alert(xhr.responseText);
			document.getElementById('chatarea').innerHTML = xhr.responseText;
			}
		
	}
	setInterval("setText()",2000);
	
	
setInterval("users()",3000);

	
	function users(){
	xhr1 = new XMLHttpRequest();
	xhr1.open('POST' , 'userFetch.php' , true);
	xhr1.setRequestHeader('content-type','application/x-www-form-urlencoded');
	xhr1.send();
	xhr1.onreadystatechange = function(){
	//	alert(xhr.responseText);
			document.getElementById('loginperson').innerHTML = xhr1.responseText;
			}
		
		
		}
		
		
</script>
<?php

include_once('config.php');
				//	echo		$_SESSION['email'];
				//	echo	$_SESSION['password'];
			echo	$_SESSION['name'];
					
					
					
						
if (isset($_GET['logout'])){
	$result = mysqli_query($conn, "UPDATE user
SET user_status = '0'
WHERE user_email = '$_SESSION[email]';");
session_destroy();
header('location: practice.php?logout_successfully=<span style="color:green">You have successfully Logged Out.</span>');
	
	}

?>
<form action="">
<input type="submit" name="logout" value="logout">
</form>
<div id="chatbox">

<div id ="chatarea">
</div>

<div id="loginperson">
</div>

<div id="textbox">
<form>
<textarea rows="1" cols="81" id="text"></textarea>
<input type="button" value="send"  onclick="getText()" />
</form>
</div></center>

</div>
<style>
#chatbox
{		
			border:double;
			height:500px;
			width:1000px;
			align;
			}
			#chatarea {
				width:750px;
				height:400px;
				border:double;
				float:left;
				overflow:auto;

				}
				#loginperson {
					width:239px;
					height:497px;
					border:double;
					float:right;}
					#textbox {
						width:750px;
						height:89px;
						border:double;
						float:left;
						}
						#chatting {
							float:left;}
</style>
<?php
	if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
		//session_destroy();
		header('location: practice.php');
		}

 ?>
 <body background="https://img00.deviantart.net/f5af/i/2012/227/b/b/abstract_gray_wallpaper_2_by_protuberanez-d5b61c3.png">
 
 
 