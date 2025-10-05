<?php

require_once __DIR__ . "/database/config.php";

$seeds = glob(__DIR__ . "/database/seeds/*.php");

if (!$seeds) {
    echo "No seed files found.\n";
    exit;
}

echo "Running seeds...\n";

foreach ($seeds as $file) {
    echo "Executing: $file ... ";
    try {
        include $file;
        echo "OK\n";
    } catch (mysqli_sql_exception $e) {
        echo "FAILED - " . $e->getMessage() . "\n";
    } catch (Throwable $t) {
        echo "FAILED - " . $t->getMessage() . "\n";
    }
}

echo "All seeds processed.\n";
