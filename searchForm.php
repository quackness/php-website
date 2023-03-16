<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>

<body>
  <form method="post" action="/build-dynamic-web-sites-mysql-php/project/booksearch.php">
    <label for="searchtitle">Book Title</label>
    <input type="text" name="searchtitle" id="searchtitle">
    <label for="searchauthor">Book Author</label>
    <input type="text" name="searchauthor" id="searchauthor">
    <label for="omit"> Omit books on loan</label>
    <input type="checkbox" id="omit" name="omit">
    <input type="submit" name="submit" value="Search">
  </form>

</body>

</html>