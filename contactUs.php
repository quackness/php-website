<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
</head>
<body>
  <?php
  //get the data for the form, this version does not have error checking
  $customeremail = $_POST["customeremail"];
  $message = $_POST["message"];
  $replyWanted = false;
  if (isset($_POST["replayWanted"])) $replyWanted=true;

  //build the text of the email, php has a method allowing to send email
  $t = "You have received a message from " . $customeremail . " :\n";
  $t = $t . $message . "\n";
  if ($replyWanted)
    $t = $t . "A reply was requested";
  else 
    $t = $t . "No reply was requested";
  
    #send email
  mail("root_library @localhost", "Customer Message", $t);

  echo "Thank you. Your message has been sent."
  ?>


  
</body>
</html>