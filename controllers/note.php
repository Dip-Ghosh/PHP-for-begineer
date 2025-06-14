<?php

declare(strict_types=1);

$config = require("config.php");

$db = new Database($config['database'], $config['database']['username'], $config['database']['password']);

$name  = 'Note';

$note = $db->query("SELECT * FROM notes where id=:id", ['id' => $_GET['id']])->fetch();

require("views/note.view.php");





