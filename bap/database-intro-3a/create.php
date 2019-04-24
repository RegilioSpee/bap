<?php 
include "pdo.php";
$sql = "CREATE DATABASE IF NOT EXISTS muziek";
    $database->exec($sql);
    echo "Database gemaakt<br>";

 ?>