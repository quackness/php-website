<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Search Results</title>
</head>
<body>
  <h3>Book Search Results</h3>
  <?php
  //this is a pdo version
  //get the data from the form and secure the error
  $searchtitle = trim($_POST['searchtitle']);
  $searchauthor = trim($_POST['searchuthor']);

  if (!$searchtitle && !$searchauthor) {
    printf ("You must specify either a title or an author");
    exit();
  }

  #open the database, cathc errors
  try {
    $db = new PDO("mysql:host=localhost;dbname=library", "root_library", "rootpw");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch (PDOException $e) {
    printf("We had a problem: %s\n", $e->getMessage());
  }


  ?>
  
</body>
</html>