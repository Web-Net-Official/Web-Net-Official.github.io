<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	$search = $_GET['query'];

	$mysqli = new mysqli("localhost", "id2865973_mega", "evildevilgv", "id2865973_webnetdb");
	$result = $mysqli->query("SELECT * FROM results WHERE title LIKE '%".$search."%'");	



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Web-Net Search-> <?php echo $search; ?></title>
	<link rel="icon" href="favico.png" type="image/png sizes="30x27">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, width=device-width, user-scalable=yes">
</head>
<body>
<body oncontextmenu="return false;">
	<div class="row">
		<div class="col-md-12">
			<div class="search-again">
				<div class="row">
					<form method="get">
						<div class="col-md-3 text-center">
							<h1><b><i><a href="index.html"><span style="color: blue">WEB</span> <span style="color: indigo">NET</span></a></i></b></h1>
						</div>
						<div class="col-md-6">
							<input type="text" name="query" value=""required>
						</div>
						<div class="col-md-2">
							<button type="submit">Search</button>
						</div>
					</form>
				</div>
<h6><b><i>Developer: M Raahim Khattak</h6>
<h6><b><i>Co-Founder: M Daniyal Khattak</h6>
			</div>
		</div>
			<div class="container" id="results">
		<div class="col-md-12">
			<?php if($result->num_rows) { ?>
			<?php while($a = $result->fetch_assoc()) { ?>
			<div class="result">
				<h4 class="title"><a href="<?=$a['url'];?>"><?= $a['title']; ?></a></h4>
				<p class="link"><?=$a['url'];?></p>
				<p class="description"><?=$a['description'];?></p>
			</div>
			<?php } ?>
			<?php } else { ?>
			<center><h1>Aww Snap!!</h1>
			<h1>Sorry, no results found.</h1><br><br><br>
			<h1>Cannot find the site you'r looking for?</h1>
			<h4>Why not submit it <li><a href="https://mrkfus.000webhostapp.com/latest/site%20submission/sitesubmit.html">Submit Site</a></li>
			</center>
			<?php } ?>

		</div>
	</div>
</body>
</html>
<br><br><br><br><br><br><br><br>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:;
}

li {
    float: left;
}

li a {
    display: block;
    color: #8b938b;
    text-align: center;
    padding: 0px 18px;
    text-decoration: none;
}


</style>
<center>
<nav aria-label="Page navigation">
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
</center>
<footer>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #e8eae8;
}

li {
    float: left;
}

li a {
    display: block;
    color: #8b938b;
    text-align: center;
    padding: 18px 18px;
    text-decoration: none;
}
</style>
<ul>
  <li><a class="active" href="advertising.html">Advertising</a></li>
  <li><a class="active" href="search_update.html">Update Search-Engine</a></li>
  <li><a class="active" href="https://webnet.bitballoon.com/">Business</a></li>
  <li><a class="active" href="about.html">About</a></li>
<li style="float:right"><a class="active" href="term.html">Terms</a></li>
<li style="float:right"><a class="active" href="pri.html">Privacy</a></li>
<li style="float:right"><a class="active" href="http://www.mediafire.com/file/a8z0jpno1j6z308/_WebNet_Browser_v97_5756525.apk">Download for Android</a></li>
</ul>
</footer>
