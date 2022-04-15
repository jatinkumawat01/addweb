<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=batch6", "root", "");

    $sql = 'SELECT * FROM decor';

    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
	while($row=$q->fetch())
	{
		echo "{$row['ImgId']} - {$row['details']} - {$row['prize']} - {$row['title']}<br>";
	}
} 
catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>