<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>
<title>WebNet Official Inside</title>
<link rel="icon" href="images/console.png" type="image/x-icon">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
<style>
		body {
   background-image: url("images/gray.jpg");
   background-color: #cccccc;
   min-height: 100%;
  background-position: center;
  background-size: cover;
}</style>
<a href="logout.php" class="btn btn-warning"><font color="white">Logout</font></a>
<div class="container">         
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>LU MP</th>
        <th>VC MP</th>
        <th>SA MP</th>
		<th>IV MP</th>
		<th>CS 1.6</th>
      </tr>
    </thead>
	
    <tbody>
      <tr>
        <td></td>
        <td></td>
		<td></td>
		<td></td>
		<td></td>
        </tr>
    </tbody>
  </table>
  
   <table class="table table-light table-hover">
    <thead>
      <tr>
        <th>Static</th>
        <th>Dynamic</th>
      </tr>
    </thead>
	
    <tbody>
      <tr>
        <td></td>
		<td></td>
        </tr>
    </tbody>
  </table>
</div>