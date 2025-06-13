<?php

declare(strict_types=1);

require("functions.php");
//require("router.php");


// connect to mysql database.

$dsn       = "mysql:host=192.168.56.56; port=3306;dbname=PHP-For-Beginners;charset=utf8mb4";
$pdo       = new PDO($dsn, 'homestead', 'secret');
$statement = $pdo->prepare("Select * from posts");
$statement->execute();
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);


foreach ($posts as $post) {
    echo $post["title"] . "<br>";
}