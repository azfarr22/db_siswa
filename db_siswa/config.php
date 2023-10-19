<?php

$host = "127.0.0.1";
$username = "root";
$password = "";
$database = "db_siswa";

$pdo = new PDO('mysql:host=' . $host . ';dbname=' . $database, $username, $password);

if (!$pdo) {
    die("Failed to connect with database.");
}