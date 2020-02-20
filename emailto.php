<?php     
$to_email = 'cometsquaredemployees@gmail.com';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';
$headers = 'From: norrisnt@gmail.com';
mail($to_email,$subject,$message,$headers);
?>