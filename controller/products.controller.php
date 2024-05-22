<?php

$config = require "config.php";
$db = require "model/database.php";
$databaseConnection = new Database($config);
$conn = $databaseConnection->connectionDB();
$sql = "SELECT product_name, product_price, product_image, product_description FROM product";
$result = mysqli_query($conn, $sql);
if (!$result){
    die("Query failed: " . mysqli_error($conn));
}