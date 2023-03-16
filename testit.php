<?php
//accessa  db

// $dbPassword = "rootpw";
// $dbUserName = "root_library'";
// $dbServer = "localhost";
// $dbName = "library";

try {
  // $db = new PDO('mysql:host='.$dbServer.';dbname='.$dbName, $dbUserName, $dbPassword);
  $db = new PDO("mysql:host=localhost;dbname=library", "root_library", "rootpw");
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sth = $db->query("select * from books where author like '%Bryson'");
  while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
    printf("%-40s %-20s\n", $row["title"], $row["author"]);
  }
}
catch (PDOException $e) {
  printf("We had a problem: %s\n", $e->getMessage());
}

exit();

?>