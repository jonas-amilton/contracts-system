<?php
require_once __DIR__ . "/../database/config.php";
require_once __DIR__ . "/../src/controllers/ContractController.php";
require_once __DIR__ . "/../src/controllers/ReportController.php";

$action = $_GET['action'] ?? 'list_contracts';

switch ($action) {
    case 'report':
        $controller = new ReportController($conn);
        $controller->index();
        break;
    case 'list_contracts':
    default:
        $controller = new ContractController($conn);
        $controller->index();
        break;
}
