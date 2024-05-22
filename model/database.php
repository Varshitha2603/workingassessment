<?php

$config = require "config.php";
$dbConnection = new Database($config);
$conn = $dbConnection->connectionDB();
class Database{
    public $connection;
    public function __construct($config)
    {
        $this->connection=mysqli_connect($config["host"], $config["root"], $config["password"], $config["databse"]);
        if ($this->connection){
            throw  new Exception("Connection Failed: ".mysqli_connect_error());
        }
    }
    public function connectionDB(){
        return $this->connection;
    }
}