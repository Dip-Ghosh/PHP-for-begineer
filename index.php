<?php

declare(strict_types=1);

require("functions.php");
require("Database.php");

//require("router.php");


$config = require("config.php");
$db     = new Database($config['database'], $config['database']['username'], $config['database']['password']);
$posts  = $db->query("Select * from posts")->fetchAll(PDO::FETCH_ASSOC);;


foreach ($posts as $post) {
    echo $post["title"]."<br>";
}
