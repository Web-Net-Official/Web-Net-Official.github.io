<!DOCKTYPE html>

<html>

<head>

<title> New search engine </title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

</head>

<body>

<div class="container">
<br>
<center> <h2> <b>Insert Website</b> </h2> </center>
<br>
<form action="insert_site.php" method="post" enctype = "multipart/form-data">

<div class="form-group">
<div class="row">
<label class="col-sm-2" for="stitle"> Site Title </label>
<div class="col-sm-10">
<input type="text" class="form-control" id="stitle" name="s_title" placeholder="Enter site title" required>
</div>
</div>
</div>

<div class="form-group">
<div class="row">
<label class="col-sm-2" for="slink"> Site Link </label>
<div class="col-sm-10">
<input type="text" class="form-control" id="slink" name="s_link" placeholder="Enter site link" required>
</div>
</div>
</div>

<div class="form-group">
<div class="row">
<label class="col-sm-2" for="skey"> Site Keywords </label>
<div class="col-sm-10">
<input type="text" class="form-control" id="skey" name="s_key" placeholder="Enter site keywords" required>
</div>
</div>
</div>

<div class="form-group">
<div class="row">
<label class="col-sm-2" for="sdes"> Site Description </label>
<div class="col-sm-10">
<textarea class="form-control" id="sdes" name="s_des" placeholder="Enter site description" required></textarea>
</div>
</div>
</div>

<div class="form-group">
<div class="row">
<label class="col-sm-2" for="simg"> Site Image </label>
<div class="col-sm-10">
<input type="file" class="form-control" id="simg" name="s_img">
</div>
</div>
</div>

<div class="form-group">
<div class="row">
<center>
<input type="submit" class="btn btn-outline-success" name="submit" value="Add Website">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" class="btn btn-outline-danger" name="cancel" value="Cancel">
</center>
</div>
</div>

</form>

</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>

</html>

<?php
define("DB_HOST","localhost");
define("DB_USER","id2865973_megamrk");
define("DB_PWD","khattak6789");
define("DB_DBNAME","id2865973_search");
define("DB_CHARSET","utf8");

function connect()
{
    $link=mysql_connect("DB_HOST","DB_USER","DB_PWD");
     mysql_select_db(DB_DBNAME);
}

if(isset($_POST["submit"]))
{
	$s_title = $_POST["s_title"];
	$s_link = $_POST["s_link"];
	$s_key = $_POST["s_key"];
	$s_des = $_POST["s_des"];
	$s_img = $_FILES["s_img"] ["name"];
	
	if(move_uploaded_file($_FILES["s_img"] ["tmp_name"], "img/". $_FILES["s_img"] ["name"]))
	{
		$sql="insert into webnetdbsearch(site_title, site_link, site_des, site_img) values('$s_title', '$s_link', '$s_key', '$s_des', '$s_img')";
	
	$rs = mysql_query($sql);
	
	if($rs)
	{
		echo "<script> alert('site uploaded successfully') </script>";
		
	}
	
	else
	{
	echo "<script> alert('uploading failed, please try again.') </script>";	
	}
	
	}
}

?>