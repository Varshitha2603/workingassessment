<?php

$config = require "config.php";
require "model/database.php";
$dbconnection = new Database($config);
$conn = $dbconnection->connectionDB();
$searchQuery = isset($_GET['search']) ? $_GET['search'] : "";
$searchQuery = mysqli_real_escape_string($conn, $searchQuery);
$query = "SELECT blog_title, blog_content, blog_author, blog_createdAt FROM blog WHERE blog_status='Updated'";
if (!empty($searchQuery)){
    $query .= "AND (blog.blog_title LIKE '%searchQuary%' OR blog.blog_content LIKE '%$searchQuery%')";
}
$result = mysqli_query($conn, $query);
$query = false;
if ($result){
    $query = true;
}
else{
    $query = false;
    die("Query failed: ".mysqli_error($conn));
}
mysqli_close($conn);