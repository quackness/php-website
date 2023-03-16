<?php
//accessa  db, use try to be able to catch errors

try {
  //get a pdo class
  $db = new PDO("mysql:host=localhost;dbname=library", "root_library", "rootpw");
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //run the query and return a result set
  $sth = $db->query("select * from books where author like '%Bryson'");
  //get the next row of the result set, return false is there are no more rows
  while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
    printf("%-40s %-20s\n", $row["title"], $row["author"]);
  }
  //alt will be a foreach loop, info on printf https://www.w3schools.com/php/phptryit.asp?filename=tryphp_func_string_printf
  // $query = "select * from books where author like '%Bryson'";
  // foreach($db->query($query) as $row) {
  //   printf("%s %s\n", $row["title"], $row["author"]);
  // }
}
catch (PDOException $e) {
  printf("We had a problem: %s\n", $e->getMessage());
}

exit();

?>