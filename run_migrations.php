<?php

require_once __DIR__ . "/database/config.php";

$migrations = glob(__DIR__ . "/database/migrations/*.php");

if (!$migrations) {
    echo "No migration files found.\n";
    exit;
}

echo "Running migrations...\n";

foreach ($migrations as $file) {
    echo "Executing: $file ... ";

    try {
        include $file;
        echo "OK\n";
    } catch (mysqli_sql_exception $e) {
        echo "FAILED - " . $e->getMessage() . "\n";
    }
}

echo "All migrations processed.\n";
