<?php
require __DIR__ . "/../config.php";

$sql = "INSERT INTO bank (name) VALUES ('Bank A'), ('Bank B')";

try {
    $conn->exec($sql);
    echo "Bank seed executed successfully.\n";
} catch (PDOException $e) {
    echo "Error bank seed: " . $e->getMessage() . "\n";
}
