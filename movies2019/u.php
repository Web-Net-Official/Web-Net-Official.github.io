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

<center>
<body>
<form action="" method="post" enctype="multipart/form-data">
<h1><font color="cyan">Select Files to Upload!</font></h1>
<br><br>
<input type="file" name="file" required class="btn btn-outline-danger btn-lg">
<br><br>
<button type="submit" name="upload" class="btn btn-outline-info btn-lg">Upload File</button>
</form>
</body>
<?php
if(isset($_POST['upload']))
{
	$targetfolder = "search/";
	$targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;
	if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))
	{
	echo "<img src=images/ok.png width=50 height=50><font color=yellow><h2><b>The file ". basename( $_FILES['file']['name']). " is uploaded successfully.</b></h2></font>";
	}
	else
	{ 
	echo "<img src=images/error.png width=50 height=50><font color=red><h2><i>Problem uploading file.</i></h2></font>";
	}
}
?>
</center>
<font color="white">
<form method="post" action="s.php">
<h4>
<div class="col-5">
Movie Name
<input type="text" name="title" class="form-control" placeholder="Enter Movie Name Here...." required><br>
Movie Image
<input type="text" name="img" class="form-control" placeholder="Enter Movie Image URL Here...." required><br>
Movie Upload Path<br>
<input type="text" name="url" class="form-control" placeholder="Enter movie path url format" required>
</div>
</h4>
<br>
<h6>Format 1 (Self Upload): <code>http://www.webnet-movies.tk/movies/search/movienamehere.mp4 For manual integration</code></h6>
<br>
<h6>Format 2 (For embed upload): <code>http://www.someurl.com/embed/4ghtdy/ For auto integration</code></h6>
<br>
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