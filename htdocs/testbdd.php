<?php

// https://www.php.net/manual/fr/book.pdo.php
// https://www.php.net/manual/fr/pdo.connections.php

$host = "mysql";
$database = "eurovent";
$user = "www-data";
$pass = "www-password";

$connection = new PDO('mysql:host=' . $host . ";dbname=" . $database, $user, $pass);

$dbh = new PDO('mysql:host=mysql;dbname=eurovent', "root", "password");

$query = $this->connection->prepare("CREATE TABLE IF NOT EXISTS ".$table."(id int(255) KEY NOT NULL AUTO_INCREMENT, name varchar(255), price int(255))");
$query->execute();

$query_string = "INSERT INTO Product(name, price) VALUES(".$name.",".$price.")";

$query = $this->connection->prepare($query_string);
$query->execute();

$query = $this->connection->prepare("SELECT * FROM " . $table);
$query->execute();