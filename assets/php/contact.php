<?php
// Check for empty fields
if(empty($_POST['name'])	   ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "<script type='text/javascript'>alert('Please Fill Up The Form')</script>";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
$to = 'prosperc40@gmail.com';
$email_subject = "$name Contacted You ";
$email_body = "$name just Contacted via Email. \n\n"."Here are the details:\n\nName: $name\n\nPhone: $phone\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: noreply@yourdomain.com\n";
$headers = "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
echo '<script type="text/javascript">alert("Submitted")</script>';
return true;         
?>
<script type='text/javascript'>window.location = '.php/assets/index.html'</script>
