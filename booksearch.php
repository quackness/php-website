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
  $searchauthor = trim($_POST['searchauthor']);

// $searchtitle  = addslashes($searchtitle);
// $searchauthor = addslashes($searchauthor);

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

  #build the query, users can search for: title, author or both
  $query = " select * from books";
  if ($searchtitle && !$searchauthor) {
    $query = $query . " where title like '%" . $searchtitle . "%'";
  }
  if (!$searchtitle && $searchauthor) {
    $query = $query . " where author like '%" . $searchauthor . "%'";
  }
  if ($searchtitle && $searchauthor) {
    $query = $query . " where title like '%" . $searchtitle . "%' and author like '%" . $searchauthor . "%'";
  }

  printf ("Debug: running the query %s <br>", $query);

  try {
    $sth = $db->query($query);
    $bookcount = $sth->rowCount();#onlyworks for mysql
    if ($bookcount == 0) {
    printf("Sorry, we did not find any books");
    exit;
    }
  printf('<table background-color="red" cellpadding="6">');
  printf('<tr><b><td>Title</td> <td>Author</td></b></tr>');
  while($row = $sth->fetch(PDO::FETCH_ASSOC)) {
    printf("<tr><td> %s </td> <td> %s </td> </tr>", $row["title"], $row["author"]);
  }

  }
  catch (PDOException $e) {
    printf("We had a problem: %s\n", $e->getMessage());
  }
  printf("</table>");
  printf("<br> We found %s mathcing books", $bookcount);
  ?>
  
</body>
</html>