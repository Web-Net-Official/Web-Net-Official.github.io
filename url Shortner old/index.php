<?php include "header.php" ?>
<?php include "style.php" ?>
<?php include "nav.php" ?>
<html>
 <body>
 <center>
 <br><br><br>
 <img src="icon/favicon.png" width="150" height="100" class="responsive"> 
  <form action="s.php" method="post">
   <label for="url">Make sure to save that URL to urself!
   <br>Enter any url & hit Shorten URL</label>
   <br>
   <div class="col-5">
   <input type="text" name="url" id="url" class="form-control form-control-lg col-xs-4" placeholder="Enter URL http://test.com" required>
   <br>
   <input type="submit" class="btn btn-danger" value="Shorten URL">
   </div>
  </form>
  </center>
 </body>
</html>
<?php include "footer.php" ?>
