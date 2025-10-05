<?php
require __DIR__ . "/../config.php";

$sql = "
INSERT INTO agreement (name, budget, bank_id) VALUES
('Agreement 1', 10000, 1),
('Agreement 2', 20000, 2);
";

try {
    $conn->exec($sql);
    echo "Agreement seed executed successfully.\n";
} catch (PDOException $e) {
    echo "Error agreement seed: " . $e->getMessage() . "\n";
}
