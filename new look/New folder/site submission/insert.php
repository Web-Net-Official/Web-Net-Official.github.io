<html>
<head>
<title>Web-Net Site submission</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<br>
<center> <h2> <b>Insert Website</b> </h2> </center>
<br>
<form action="" method="post">
<div class="form-group">
<div class="row">
<label class="col-sm-2" for="stitle"> Site Title </label>
<div class="col-sm-10">
<input type="text" class="form-control" id="title" name="title" placeholder="Enter site title" required>
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<label class="col-sm-2" for="sdes"> Site Description </label>
<div class="col-sm-10">
<textarea class="form-control" id="description" name="description" placeholder="Enter site description" required></textarea>
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<label class="col-sm-2" for="slink"> Site Link </label>
<div class="col-sm-10">
<input type="text" class="form-control" id="url" name="url" placeholder="Enter site link" required>
</div>
</div>
</div>
<center>
<input type="submit" class="btn btn-outline-success" name="submit" value="Add Website">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" class="btn btn-outline-danger" name="cancel" value="Cancel">
</center>
</form>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</div>
<?php
if(isset($_POST["submit"])){
$servername = "localhost";
$username = "id2865973_mega";
$password = "evildevilgv";
$dbname = "id2865973_webnetdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO results (title, description, url)
VALUES ('".$_POST["title"]."','".$_POST["description"]."','".$_POST["url"]."')";

if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

$conn->close();
}
?>
</body>
</html>


