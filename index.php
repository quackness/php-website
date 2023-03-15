<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Library Home Page</title>
</head>
<body>
  <h3>Welcome to the library</h3>
  <?php
    date_default_timezone_set('UTC');
    echo "time is " . date("h:i:s") . "<br>";
  ?>
  <a href="booksearch.html">Browse our books</a>

  
</body>
</html>