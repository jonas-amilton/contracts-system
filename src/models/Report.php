<?php
require_once __DIR__ . "/../../database/config.php";

class Report
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function groupedByBankAndBudget()
    {
        $sql = "
            SELECT 
                b.name,
                a.budget,
                c.inclusion_date,
                SUM(c.value) as total_value
            FROM contract c
            JOIN agreement_service s ON c.agreement_service_id = s.id
            JOIN agreement a ON s.agreement_id = a.id
            JOIN bank b ON a.bank_id = b.id
            GROUP BY b.name, a.budget
            ORDER BY b.name, a.budget
        ";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}