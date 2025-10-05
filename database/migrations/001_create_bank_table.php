<?php
require __DIR__ . "/../config.php";

$sql = "
CREATE TABLE IF NOT EXISTS bank (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL
);
";

try {
    $conn->exec($sql);
    echo "Migration 001_create_bank_table executed successfully.\n";
} catch (PDOException $e) {
    echo "Error in Migration 001_create_bank_table: " . $e->getMessage() . "\n";
}
