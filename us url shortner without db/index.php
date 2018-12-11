<?php include "header.php" ?>
<?php include "style.php" ?>
<?php include "nav.php" ?>
<?php

if(isset($_POST['submit']))
{
	$url = $_POST['url'];
	$check = substr($url,0,11);
	
	if($check == "http://www.")
	{
		$upper_case = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$lower_case = "abcdefghijklmnopqrstuvwxyz";
		$numbers = "0123456789";
		
		$upper_case_shuffle = str_shuffle($upper_case);
		$lower_case_shuffle = str_shuffle($lower_case);
		$numbers_shuffle = str_shuffle($numbers);
		
		$upper_case_new = substr($upper_case_shuffle,0,2);
		$lower_case_new = substr($lower_case_shuffle,0,2);
		$numbers_new = substr($numbers_shuffle,0,2);
		
		$mixed = "$upper_case_new$lower_case_new$numbers_new";
		$mixed_shuffle = str_shuffle($mixed);
		
		if(is_dir($mixed_shuffle))
		{
			$error = "Error please try again";
		}
		else
		{
			mkdir($mixed_shuffle);
			$file_path = dirname(__FILE__)."/$mixed_shuffle/index.php";
			$index = fopen($file_path,'w');
			$data = '<?php header("location:'. $url.'");?>';
			fwrite($index,$data);
			fclose($index);
			
			$new_url = "<center><h3><b><font color='green'>Your new URL<br>http://wnou-s.tk/$mixed_shuffle</font></b></center>";	
		}
	}
	else
	{
		$error = "<center><h3><b><font color='red'>You must start with ... 'http://www.'</font></b></center>";	
	}
}

?>
<html>
 <body>
 <center>
 <br><br><br>
 <img src="icon/favicon.png" width="150" height="100" class="responsive"> 
<p>Make sure to save that URL to urself!<br>
Enter any url & hit Shorten URL</p>
<form action="index.php" method="POST">
<div class="col-5">
	<input type="text" name="url" placeholder="Enter URL http://www.test.com"  class="form-control form-control-lg col-xs-4" required>
	<br>
    <input type="submit" name="submit" class="btn btn-danger" value="Shorten URL">
	 </div>
</form>
 </center>
 </body>
</html>
<?php

if(isset($error))
{
	echo $error;
}
if(isset($new_url))
{
	echo $new_url;
}

?>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){ 
	$('body').find('img[src$="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"]').remove();
    }); 
</script>
<?php include "footer.php" ?>