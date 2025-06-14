<?php

declare(strict_types=1);

$config = require("config.php");

$db = new Database($config['database'], $config['database']['username'], $config['database']['password']);

$name  = 'Notes';
$notes = $db->query("SELECT * FROM notes where user_id = 1")->fetchAll();

require("views/notes.view.php");





