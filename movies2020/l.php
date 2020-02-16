<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Webnet Movies</title>
<link rel="icon" href="images/logo.png" type="image/png" sizes="16x16"> 
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>

<script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>
<?php
error_reporting(0);
    $pages = simplexml_load_file('links.xml');
    foreach ($pages as $link):
        $title=$link->title;
        $url=$link->url;
        endforeach;
?>	
<body>
<div class="container">
  <div class="dropdown">
    <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-film w3-margin-right"></i>Webnet Movies
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
     <li><a href="more.php">More movies</a></li>
       <li><a href="h.php">Hollywood Movies</a></li>
      <li><a href="b.php">Bollywood Movies</a></li>
	  <li><a href="l.php">Lollywood Movies</a></li>
	  <li><a href="u.php">Upload Movies</a></li>
      <li><a href="index.php">Home</a></li>
    </ul>
  </div>
  </div>
		<div id="site-content">
			<header class="site-header">
				<div class="container">
	<div class="mobile-navigation"></div>
				    <center>
					<form >
				    <div class="container">
	                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">

							<input size="100" class="form-control" type="text" placeholder="Search Movie name here" onkeyup="showResult(this.value)">
							<div id="livesearch"></div>
						</form> 
						</center>
						</div>  
						
                      </div>
                    </div>
	               </div>
                  </div>
				
			</header>
			<main class="main-content">
				<div class="container">
						
							
								<div class="row">
							<div class="col-sm-6 col-md-3">
								<div class="latest-movie">
									<a href="https://www.youtube.com/embed/tqf_ASEpM8Y"><img src="dummy/maalik.jpg" alt="Movie 1"></a>
								</div>
							</div>
							
						</div> <!-- .row -->
						
					
             <footer>
			 <center>
					<p>&copy; Copyright <?php echo date("Y"); ?>. Webnet Official, All rights reserved.</p>
					</center>
			</footer>
		</div>
		<!-- Default snippet for navigation -->
		


		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){ 
	$('body').find('img[src$="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"]').remove();
    }); 
</script>
<script>
window.onload = () => {
    let el = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
    el.parentNode.removeChild(el);
}
</script>