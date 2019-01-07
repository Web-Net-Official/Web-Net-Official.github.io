<?php     
$to_email = $_POST['toemail'];
$subject = $_POST['subject'];
$comment = $_POST['comment'];
$headers = 'From: some@company.com';
mail($to_email,$subject,$comment,$headers);

header("Location: mail");
?>