
<html>
<head>
 <title>Webnet Movies</title>
  <link rel="icon" href="images/favicon.png" type="image/png" sizes="16x16"> 
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
#imaginary_container{
    margin-top:20%; /* Don't copy this */
}
.stylish-input-group .input-group-addon{
    background: white !important; 
}
.stylish-input-group .form-control{
	border-right:0; 
	box-shadow:0 0 0; 
	border-color:#ccc;
}
.stylish-input-group button{
    border:0;
    background:transparent;
}

body{
        background-image: url('images/back.jpg') ;
        background-position: center;
        background-repeat: no-repeat;
    background-attachment: fixed;
        background-size: cover;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        height:100%;

    }
	
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: ;
}
</style>
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
</head>
<body>
<div class="w3-top">
 <div class="w3-bar w3-theme-d1 w3-left-align">

  <a href="" style="text-decoration: none; "class="w3-bar-item w3-button w3-blue"><i class="fa fa-film w3-margin-right"></i>Webnet Movies</a>
  </div>
  <!--a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a-->
 </div>
<center>
<form>
<div class="container">
	<div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <div id="imaginary_container"> 
			<img src="images/logo.png" width="200" height="200"><br><br>
                <div class="input-group stylish-input-group">
<input type="text" class="form-control"  placeholder="Search Movie name here" onkeyup="showResult(this.value)">
<div id="livesearch"></div>
 <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>  
                    </span>
                </div>
            </div>
        </div>
	</div>
</div><br><br>
<a href="upload.php" class="btn btn-danger ">Upload movie</a>
</form>
</center>
<?php
error_reporting(0);
    $pages = simplexml_load_file('links.xml');
    foreach ($pages as $link):
        $title=$link->title;
		$img=$link->img;
		$imageData = base64_encode(file_get_contents($img));
	    $src = 'data: '.mime_content_type($img).';base64,'.$imageData;
        $url=$link->url;
        echo "<table>
  <tr>
    <th><img src='" . $src . "' width='80' height='100'></th>
    <th><b><font color='white'>".$title."</font></b></th>
    <th><b><font color='white'><a href='".$url."' style='text-decoration:none;' class='btn btn-success'>Watch Now</a></font></b></th>
  </tr>
</table>";
        endforeach;
?>
<footer>
<center>
<font color="white">
  <p>&copy; Copyright 2017 - 2018, Webnet Movies &bull; All Rights Reserved</p>
  </font>
</center>
</footer>
</body>
</html> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){ 
	$('body').find('img[src$="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"]').remove();
    }); 
</script>
