<?php
require __DIR__ . "/../config.php";

$sql = "
INSERT INTO contract (term, value, inclusion_date, agreement_service_id) VALUES
(12, 1500, '2024-01-10', 1),
(24, 2500, '2024-03-15', 1),
(6, 1200, '2024-05-20', 2);
";

try {
    $conn->exec($sql);
    echo "Contract seed executed successfully.\n";
} catch (PDOException $e) {
    echo "Error contract service seed: " . $e->getMessage() . "\n";
}
