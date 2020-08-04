<html>
<head>
 <title>Webnet Movies</title>
  <link rel="icon" href="images/favicon.png" type="image/png" sizes="16x16"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<style type="text/css">
			body {
				font-family: "Segoe UI", "Helvetica", "Arial", San-serif;
				font-size: 13px;
				margin: 0;
				background: #fcfefe url(images/spider.jpg) no-repeat center top fixed;
				-webkit-background-size: cover;
        		-moz-background-size: cover;
        		-o-background-size: cover;
        		background-size: cover;		
			}
		
			.page {
				width: 840px;
				margin: 0 auto;
			}
			
			img {
				border: none;
				clear: both;
			}
			
			a {
				text-align: center;
				display: block;
				margin: 100px 0;
			}
			
			.hero {
				margin-bottom: 30px;
			}
			
			.brand {
			
			}
			
			.url {

				margin-bottom: 110px;
			}
			
			.w3-btn, .w3-button{
				border:none;
				border-radius:5px;
			}
			.w3-btn, .w3-button:hover{
				color: #fff !important;
                background-color: blue !important;
			}
		</style>
	</head>
	<body><br><br><br><center>
				<img src="images/gear.png" width="192" height="192">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	</body>

</html>
<body>
<!--<form method="post" action="s.php">
<h4>
<div class="col-5">
Movie Name
<input type="text" name="title" class="form-control" placeholder="Enter Movie Name Here...." required><br>
Movie Image
<input type="text" name="img" class="form-control" placeholder="https://i.ytimg.com/vi/xLCn88bfW1o/maxresdefault.jpg" required><br>
Movie Upload Path<br>
<input type="text" name="url" class="form-control" placeholder="Enter movie url" required>
</div>
</h4>

<input type="submit" class="btn btn-danger btn-lg" value="Add Movie" />
</form>-->

<div class="w3-container">
<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-blue">Upload Item</button>

<div id="id01" class="w3-modal">
 <div class="w3-modal-content w3-card-4 w3-animate-zoom">
  <header class="w3-container w3-blue"> 
   <span onclick="document.getElementById('id01').style.display='none'" 
   class="w3-button w3-blue w3-xlarge w3-display-topright">&times;</span>
   <h2>Upload Item</h2>
  </header>

  <div class="w3-bar w3-border-bottom">
   <button class="tablink w3-bar-item w3-button" onclick="openCity(event, 'Hollywood')">Hollywood</button>
   <button class="tablink w3-bar-item w3-button" onclick="openCity(event, 'Bollywood')">Bollywood</button>
   <button class="tablink w3-bar-item w3-button" onclick="openCity(event, 'Lollywood')">Lollywood</button>
  </div>

  <div id="Hollywood" class="w3-container city">
   <h1>Hollywood</h1>
   <form method="post" action="h/sh.php">
<h4>
<div class="col-5">
<font color="black">Movie Name
<input type="text" name="title" class="form-control" placeholder="Enter Movie Name Here...." required><br>
Movie Image Size (1280x720)
<input type="text" name="img" class="form-control" placeholder="https://i.ytimg.com/vi/xLCn88bfW1o/maxresdefault.jpg (1280x720)" required><br>
Movie Upload Path</font><br>
<input type="text" name="url" class="form-control" placeholder="Enter movie url" required>
</div>
</h4>
<input type="submit" class="btn btn-danger btn-lg" value="Add Movie" />
</form>
</div>

  <div id="Bollywood" class="w3-container city">
   <h1>Bollywood</h1>
    <form method="post" action="b/sb.php">
<h4>
<div class="col-5">
<font color="black">Movie Name
<input type="text" name="title" class="form-control" placeholder="Enter Movie Name Here...." required><br>
Movie Image Size (1280x720)
<input type="text" name="img" class="form-control" placeholder="https://i.ytimg.com/vi/xLCn88bfW1o/maxresdefault.jpg (1280x720)" required><br>
Movie Upload Path</font><br>
<input type="text" name="url" class="form-control" placeholder="Enter movie url" required>
</div>
</h4>
<input type="submit" class="btn btn-danger btn-lg" value="Add Movie" />
</form>
  </div>

  <div id="Lollywood" class="w3-container city">
   <h1>Lollywood</h1>
  <form method="post" action="l/sl.php">
<h4>
<div class="col-5">
<font color="black">Movie Name
<input type="text" name="title" class="form-control" placeholder="Enter Movie Name Here...." required><br>
Movie Image Size (1280x720)
<input type="text" name="img" class="form-control" placeholder="https://i.ytimg.com/vi/xLCn88bfW1o/maxresdefault.jpg (1280x720)" required><br>
Movie Upload Path</font><br>
<input type="text" name="url" class="form-control" placeholder="Enter movie url" required>
</div>
</h4>
<input type="submit" class="btn btn-danger btn-lg" value="Add Movie" />
</form>
  </div>

 <!-- <div class="w3-container w3-light-grey w3-padding">
   <button class="w3-button w3-right w3-white w3-border" 
   onclick="document.getElementById('id01').style.display='none'">Close</button>
  </div>-->
 </div>
</div>

</div>

<script>
document.getElementsByClassName("tablink")[0].click();

function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].classList.remove("w3-light-grey");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.classList.add("w3-light-grey");
}
</script>
 
</body>
</html> 

<center><br><br><br>
<footer><font color="white"><h5><b>Copyright &copy; Webnet-Movies 2018 &bull;All rights reserved</footer>
</center>
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