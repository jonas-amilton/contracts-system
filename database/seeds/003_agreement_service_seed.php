<?php
require __DIR__ . "/../config.php";

$sql = "
INSERT INTO agreement_service (agreement_id, service) VALUES
(1, 'Service X'),
(2, 'Service Y');
";

try {
    $conn->exec($sql);
    echo "Agreement service seed executed successfully.\n";
} catch (PDOException $e) {
    echo "Error agreement service seed: " . $e->getMessage() . "\n";
}
