<?php
include("db.php");
try {
    

    $sql = "SELECT * FROM $tname";

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