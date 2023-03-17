<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Counter session Demo</title>
</head>
<body>
  <p>Counter session Demo</p>
  <FORM action="counter-session.php" method="GET">
<INPUT type="submit" name="Count" value="Count">
<?php
   session_start();
   if (! isset($_SESSION['counter']))
      $count = 0;
   else
      $count = $_SESSION['counter'];
   $count = $count + 1;
   $_SESSION['counter'] = $count;
   echo "count is $count";
?>
</FORM>

  
</body>
</html>