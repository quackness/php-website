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
  $customeremail = $_POST["email"];
  $message = $_POST["message"];
  $replyWanted = false;
  if (isset($_POST["replayWanted"])) $replyWanted=true;


  ?>
  
</body>
</html>