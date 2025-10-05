<?php
require __DIR__ . "/../config.php";

$sql = "
CREATE TABLE IF NOT EXISTS agreement (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    budget DECIMAL(10,2),
    bank_id INT,
    FOREIGN KEY (bank_id) REFERENCES bank(id)
);
";

try {
    $conn->exec($sql);
    echo "Migration 002_create_agreement_table executed successfully.\n";
} catch (PDOException $e) {
    echo "Error in Migration 002_create_agreement_table: " . $e->getMessage() . "\n";
}
