<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>


<form id="form1" name="form1" method="post" action="">
  <span id="sprytextarea1">
  <label for="textarea1"></label>
  <textarea name="textarea1" id="textarea1" cols="45" rows="5"></textarea>
  <span class="textareaRequiredMsg">A value is required.</span></span>
  <p><span id="sprytextfield1">
    <label for="text1"></label>
    <input type="text" name="text1" id="text1" />
    <span class="textfieldRequiredMsg">A value is required.</span></span></p>
  <p>
    <input type="submit" name="sumbit" id="sumbit" value="Submit" />
  </p>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
<script type="text/javascript">
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
</script>
</body>
</html>