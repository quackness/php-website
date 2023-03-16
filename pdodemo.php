<?php
$searchtitle = "Girl";
$searchauthor = "Larsson";
try {
  $db = new PDO("mysql:host=localhost;dbname=library", "root_library", "rootpw");

  switch($argv[1]) {
    //build a query explicitely
    case 1:
    $query = "select * from books where title like '%$searchtitle%' " . "and author like '%$searchauthor%'";
    $stmt =$db->$query($query);
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      printf("%-40s %-20s\n", $row["title"], $row["author"]);
    }
    break;


  
  }
}
