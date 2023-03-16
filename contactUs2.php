<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>contact us 2 Valaidation form test</title>
</head>
<body>
  <?php
  //validation
  if ($_POST["customeremail"] == "") {
    echo "You did not enter an email address";
    exit;
  }
  // $customeremail = $_POST["customeremail"];
  // if (! ereg("[a-z]+@[a-z]+\.[a-z]+", $_POST["customeremail"])) {
  //   echo "Email address is not valid";
  //   exit;
  // }

  // if (!preg_match("~([a-zA-Z0-9!#$%&'*+-/=?^_`{|}~])@([a-zA-Z0-9-]).([a-zA-Z0-9]{2,4})~", 
  // $_POST["customeremail"])) {
  //   echo 'This is a valid email.';
  // } else {
  //   echo 'This is an invalid email.';
  //   exit;
  // }

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
  mail("dub@localhost", "Customer Message", $t);

  echo "Thank you. Your message has been sent."





  ?>
  
</body>
</html>