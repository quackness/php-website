<?php
$searchtitle = "Dodger";
$searchauthor = "Terry T.";

// $searchtitle = "The lost's";
// $searchauthor = "Bill Bryson";


try {
  $db = new PDO("mysql:host=localhost;dbname=library", "root_library", "rootpw");

  // switch ($argv[1]) {
  //   //build a query explicitely, not the best option since it has problems with escaping characters like '
  //   case 1:
  // $query = "select * from books where title like '%$searchtitle%' " . "and author like '%$searchauthor%'";
  // $stmt = $db->query($query);
  // while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  //   printf("%-40s %-20s\n", $row["title"], $row["author"]);
  // }
  // break;
  // }
  // case 2:
  //use a prepeared statement with paramaters bound by postion - method 1, works well with >> ' << characters
  // $stmt = $db->prepare("select * from books where title like ? and author like ?");
  // $stmt->execute(array("$searchtitle", "$searchauthor"));
  // while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  //   printf("%-40s %-20s\n", $row["title"], $row["author"]);
  // }
  //     break;

  //case 5: use a prepared statement with parameters bound by name method 2
  $stmt = $db->prepare("select * from books where title regexp :title " . "and author regexp :author");

  $stmt->bindParam(':title', $searchtitle);
  $stmt->bindParam(':author', $searchauthor);
  $stmt->execute();
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    printf("%-40s %-20s\n", $row["title"], $row["author"]);
  }
  //to query for another book reassign the new values and rexecute
  $searchtitle = "Dune";
  $searchauthor = "Frank H.";
  $stmt->execute();
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    printf("%-40s %-20s\n", $row["title"], $row["author"]);
  }

}

// } 
catch (PDOException $e) {
  printf("We had a problem: %s\n", $e->getMessage());
}
?>