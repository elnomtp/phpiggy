<?php

include __DIR__ . '/src/Framework/Database.php';

use Framework\Database;

$db = new Database('mysql', [
  'host' => 'localhost',
  'port' => 3306,
  'dbname' => 'phpiggy'
], 'root', '');

$sqlFile = file_get_contents("./database.sql");

$db->query($sqlFile);

// initial code for basic example
// try {
//   $db->connection->beginTransaction();

//   // Direct query
//   $db->connection->query("INSERT INTO products VALUES(99, 'Gloves')");

//   $search = "Dude";
//   $query = "SELECT * FROM products WHERE name=:name";

//   $stmt = $db->connection->prepare($query);

//   $stmt->bindValue('name', $search, PDO::PARAM_STR);
//   $stmt->execute();

//   //same but executed right away
//   // $stmt->execute([
//   //   'name' => $search
//   // ]);

//   var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));

//   $db->connection->commit();
// } catch (Exception $e) {
//   if ($db->connection->inTransaction()) {
//     $db->connection->rollBack();
//   }

//   echo "Transaction failed";
// }
