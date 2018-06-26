<html>
<head>
<title>File uploader</title>
</head>
<style type="text/css">
			body {
				font-family: "Segoe UI", "Helvetica", "Arial", San-serif;
				font-size: 13px;
				margin: 0;
				background: #fcfefe url(png/nissan.jpg) no-repeat center top fixed;
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
	<body>
		<div class="page">
				<p><img src="png/file-uploads1.png" alt="Microsoft Windows" class="brand" /></p>
			</a>
		</div>
	</body>

</html>

<?php
if(isset($_POST['upload']))
{
	$targetfolder = "uploaded_file/";
	$targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;
	if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))
	{
	echo "The file ". basename( $_FILES['file']['name']). " is uploaded successfully.";
	}
	else
	{ 
	echo "Problem uploading file.";
	}
}
?>
<center>
<body>
<form action="" method="post" enctype="multipart/form-data">
<h1><font color="cyan">Select Files to Upload!</font></h1>
<br><br>
<input type="file" name="file"/>
<br><br>
<input type="submit" name="upload" value="Upload"/>
</form>
</body>
</center>
<center>
<footer>Copyright &copy; M Raahim Khattak 2017 &bull;All rights reserved</footer>
<iframe src="https://www.facebook.com/plugins/follow?href=https%3A%2F%2Fwww.facebook.com%2Fmega.mrk&amp;
layout=standard&amp;
show_faces=true&amp;
colorscheme=light&amp;
width=450&amp;
height=80" scrolling="no" frameborder="0" style="border:none;
 overflow:hidden;
 width:450px;
 height:80px;" allowTransparency="true">
</iframe>
<script src="https://apis.google.com/js/platform.js">
</script>
<div class="g-ytsubscribe" data-channelid="UC2eTGoGsnz0sg7VDcBZggNQ" data-layout="full" data-count="default">
</div>
</center>