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

  <form action="/contactus.php" method="POST">
    <label for="email">Your email:</label>
    <input type="email" name="email" id="email">

    <label for="message">Your message:</label>
    <textarea name="message" id="message"></textarea>

    <label for="replyWanted"> Do you want a reply?</label>
    <input type="checkbox" id="replyWanted" name="replyWanted">

    <input type="submit" name="submit" value="Send message">
  </form>




  
</body>
</html>