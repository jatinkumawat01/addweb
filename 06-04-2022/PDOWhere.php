<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=batch6", "root", "");
    $search=3;
    $sql = 'SELECT * FROM decor WHERE ImgId= :ImgId';

    $q = $pdo->prepare($sql);
    $q->bindParam(':ImgId', $search,PDO::PARAM_STR);
    $q->execute();
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