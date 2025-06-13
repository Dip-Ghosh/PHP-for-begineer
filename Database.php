<?php

class Database
{
    public $connection;

    public function __construct()
    {
        $dsn = "mysql:host=192.168.56.56; port=3306;dbname=PHP-For-Beginners;charset=utf8mb4";

        $this->connection = new PDO($dsn, 'homestead', 'secret');
    }

    public function query($query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }
}
