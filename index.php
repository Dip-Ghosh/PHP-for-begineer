<?php

declare(strict_types=1);

require("functions.php");
require("Database.php");

require("router.php");


$config = require("config.php");
$db     = new Database($config['database'], $config['database']['username'], $config['database']['password']);

$id    = $_GET['id'];
$query = "Select * from posts where id = :id";
$posts = $db->query($query, ['id' => $id])->fetchAll(PDO::FETCH_ASSOC);;

foreach ($posts as $post) {
    echo $post["title"]."<br>";
}
