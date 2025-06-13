<?php

declare(strict_types=1);

require("functions.php");
require("Database.php");
//require("router.php");


// connect to mysql database, and execute database a query.


$db    = new Database();
$posts = $db->query("Select * from posts")->fetchAll(PDO::FETCH_ASSOC);;


foreach ($posts as $post) {
    echo $post["title"]."<br>";
}
