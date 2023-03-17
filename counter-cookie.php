<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php
  if (isset($_COOKIE['counter']))
    $count = $_COOKIE['counter'];
  else
    $count = 0;
  $count = $count + 1;
  //order: cookie name, cookie value, expiration, cookie applies to whole site, the site it applies to and send cookie evn on insecure connection
  //the url was left blank since I am not hosting it 
  setcookie('counter', $count, time() + 24*3600, '/',
            '', false);
?>
<html>
<head>
  <title>Counting with a cookie</title>
</head>
<body>
  <FORM action="counter-cookie.php" method="GET">
  <input type="submit" name="Count" value="Count">
  <?php
    echo "count is $count";
  ?>
  </FORM>
</body>
</html>