<?php
require __DIR__ . "/../config.php";

$sql = "
CREATE TABLE IF NOT EXISTS agreement_service (
    id INT PRIMARY KEY AUTO_INCREMENT,
    agreement_id INT,
    service VARCHAR(100),
    FOREIGN KEY (agreement_id) REFERENCES agreement(id)
);
";

try {
    $conn->exec($sql);
    echo "Migration 003_create_agreement_service_table executed successfully.\n";
} catch (PDOException $e) {
    echo "Error in Migration 003_create_agreement_service_table: " . $e->getMessage() . "\n";
}
