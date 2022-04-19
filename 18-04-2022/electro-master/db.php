<?php
try{
$pdo = new PDO("mysql:host=localhost;dbname=batch6", "root", "");}
catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}

?>