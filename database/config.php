<?php

$env = parse_ini_file(__DIR__ . "/../.env");

$host = $env["DB_HOST"] ?? "localhost";
$user = $env["DB_USER"] ?? "root";
$pass = $env["DB_PASS"] ?? "";
$db   = $env["DB_NAME"] ?? "contracts_db";

try {
    $conn = new PDO("mysql:host=$host;charset=utf8mb4", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $conn->exec("CREATE DATABASE IF NOT EXISTS `$db` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");

    $conn->exec("USE `$db`");

    // echo "Database `$db` is ready.\n";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
