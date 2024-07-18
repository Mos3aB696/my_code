<?php

$dsn = 'mysql:host=localhost;dbname=test'; // Data Source Name
$user = 'root'; // Database Username
$pass = 'mos3ab_root'; // Database Password
$options = array(
  // By Default MySQL Supports UTF-8
  PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
  PDO::ATTR_CASE => PDO::CASE_UPPER,
);

try {
  $db_connect = new PDO($dsn, $user, $pass); // Create a new PDO connection

  // Set the PDO error mode to exception
  $db_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Show Connected Database Name
  echo "Connected to the database => " . $db_connect->query("SELECT DATABASE()")->fetchColumn();

  $q = "INSERT INTO items (name) VALUES ('Product_FOUR')";
  $qq = "INSERT INTO items (name) VALUES ('منتج_خمسة')";

  // $db_connect->exec($q);
  // $db_connect->exec($qq);

} catch (PDOException $e) {
  echo "Failed to connect to the database: " . $e->getMessage();
  // echo '<pre>';
  // print_r($e->errorInfo);
  // echo '</pre>';
}

for ($i = 1; $i <= 1000; $i++) {
  $stmt = $db_connect->prepare("INSERT INTO `test_int` (`small_test`) VALUES ('$i');");
  $stmt->execute();
}