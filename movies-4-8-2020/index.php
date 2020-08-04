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
<?php
$doc1 = new DOMDocument();
    $doc1->load('b/b.xml');

    $doc2 = new DOMDocument();
    $doc2->load('h/h.xml');

    // get 'res' element of document 1
    $res1 = $doc1->getElementsByTagName('pages')->item(0);

    // iterate over 'item' elements of document 2
    $items2 = $doc2->getElementsByTagName('link');
    for ($i = 0; $i < $items2->length; $i ++) {
        $item2 = $items2->item($i);

        // import/copy item from document 2 to document 1
        $item1 = $doc1->importNode($item2, true);

        // append imported item to document 1 'res' element
        $res1->appendChild($item1);

    }
	$doc1->save('links.xml');
	?>
	<?php
$doc1 = new DOMDocument();
    $doc1->load('l/l.xml');

    $doc2 = new DOMDocument();
    $doc2->load('links.xml');

    // get 'res' element of document 1
    $res1 = $doc1->getElementsByTagName('pages')->item(0);

    // iterate over 'item' elements of document 2
    $items2 = $doc2->getElementsByTagName('link');
    for ($i = 0; $i < $items2->length; $i ++) {
        $item2 = $items2->item($i);

        // import/copy item from document 2 to document 1
        $item1 = $doc1->importNode($item2, true);

        // append imported item to document 1 'res' element
        $res1->appendChild($item1);

    }
	$doc1->save('links.xml');
	?>
<marquee style="font-family:Arial; color: #FFFFFF" bgcolor="#000080"  direction="left">Click <a href="http://wona.tk"><font color="white"><b>here</b></font></a> to watch Add Freely</marquee>

<body>
<div class="container">
  <div class="dropdown">
    <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-film w3-margin-right"></i>Webnet Movies
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
	  <li><a href="more.php">More movies</a></li>
      <li><a href="h/h.php">Hollywood Movies</a></li>
      <li><a href="b/b.php">Bollywood Movies</a></li>
	  <li><a href="l/l.php">Lollywood Movies</a></li>
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
					<div class="page">
						<div class="row">
							<div class="col-md-9">
								<div class="slider">
									<ul class="slides">
										<li><a href="https://cloudvideo.tv/embed-863d8bbvhlqx.html"><img src="dummy/slide-1.jpg" width="50" height="20" alt="Slide 1"></a></li>
										<li><a href="https://cloudvideo.tv/embed-vupxaa1djgq6.html"><img src="dummy/slide-2.jpg" width="50" height="50" alt="Slide 2"></a></li>
										<li><a href="https://cloudvideo.tv/embed-6xasrp8oezft.html"><img src="dummy/slide-3.jpg" width="50" height="50" alt="Slide 3"></a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3">
								<div class="row">
									<div class="col-sm-6 col-md-12">
										<div class="latest-movie">
											<a href="https://cloudvideo.tv/embed-bu00i0u5x9ta.html"><img src="dummy/thumb-1.jpg" alt="Movie 1"></a>
										</div>
									</div>
									<div class="col-sm-6 col-md-12">
										<div class="latest-movie">
											<a href="https://openloadmovies.ac/movies/the-story-of-bean-1997/"><img src="dummy/thumb-2.jpg" alt="Movie 2"></a>
										</div>
									</div>
								</div>
							</div>
						</div> <!-- .row -->
						<div class="row">
							<div class="col-sm-6 col-md-3">
								<div class="latest-movie">
									<a href="https://database.gdriveplayer.us/player.php?imdb=tt4630562"><img src="dummy/thumb-3.jpg" alt="Movie 3"></a>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="latest-movie">
									<a href="https://cloudvideo.tv/embed-6vyt21ou717s.html"><img src="dummy/thumb-4.jpg" alt="Movie 4"></a>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="latest-movie">
									<a href="https://www.youtube.com/embed/Tw4qbH3qzBU"><img src="dummy/thumb-5.jpg" alt="Movie 5"></a>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="latest-movie">
									<a href="https://www.youtube.com/embed/yNOW1ZhbYH4"><img src="dummy/thumb-6.jpg" alt="Movie 6"></a>
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