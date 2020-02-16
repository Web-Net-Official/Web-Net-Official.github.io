
<html>
<head>
 <title>Webnet Movies</title>
  <link rel="icon" href="images/favicon.png" type="image/png" sizes="16x16"> 
  <meta http-equiv="refresh" content="5;url=./" />
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
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
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: ;
   color: white;
   text-align: center;

</style>
<?php
$title = $_POST['title'];
$img = $_POST['img'];
$url = $_POST['url'];

$books = file('links.xml');

$numOfLines = count($books) - 1;

$books[$numOfLines]="";

$file = fopen("links.xml", 'w');

foreach( $books AS $val ) {
    fwrite($file, $val);
 }
$content = "  <link>
    <title>$title</title>
	<img>$img</img>
    <url>$url</url>
  </link>\n";
fwrite($file, $content);
fwrite($file, "</pages>");
fclose($file);
echo "<br>
<center>
<img src='images/logo.png' width='200' height='200'>
<font color='white'>
<br><br>
<h4 class='display-4'><b>Your Movie has been added to Movies list<br>Thankyou for being with us</b></h4>
</font>
</center>";
?>
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