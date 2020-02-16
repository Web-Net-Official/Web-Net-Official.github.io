<html>
<head>
 <title>Webnet Movies</title>
  <link rel="icon" href="images/favicon.png" type="image/png" sizes="16x16"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

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
<font color="white">
<form method="post" action="s.php">
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
</form>
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