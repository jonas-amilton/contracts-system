<?php
require __DIR__ . "/../config.php";

$sql = "
CREATE TABLE IF NOT EXISTS contract (
    id INT PRIMARY KEY AUTO_INCREMENT,
    term INT,
    value DECIMAL(10,2),
    inclusion_date DATE,
    agreement_service_id INT,
    FOREIGN KEY (agreement_service_id) REFERENCES agreement_service(id)
);
";

try {
    $conn->exec($sql);
    echo "Migration 004_create_contract_table executed successfully.\n";
} catch (PDOException $e) {
    echo "Error in Migration 004_create_contract_table: " . $e->getMessage() . "\n";
}
