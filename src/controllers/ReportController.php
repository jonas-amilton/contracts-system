<?php
require_once __DIR__ . "/../models/Report.php";

class ReportController
{
    private $reportModel;

    public function __construct($conn)
    {
        $this->reportModel = new Report($conn);
    }

    public function index()
    {
        $groups = $this->reportModel->groupedByBankAndBudget();
        require __DIR__ . "/../views/report_grouped.php";
    }
}
