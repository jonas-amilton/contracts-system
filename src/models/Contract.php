<?php
require_once __DIR__ . "/../../database/config.php";

class Contract
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function all()
    {
        $sql = "
            SELECT 
                b.name,
                a.budget,
                c.id AS contract_id,
                c.inclusion_date,
                c.value,
                c.term
            FROM contract c
            JOIN agreement_service s ON c.agreement_service_id = s.id
            JOIN agreement a ON s.agreement_id = a.id
            JOIN bank b ON a.bank_id = b.id
            ORDER BY b.name, a.budget, c.inclusion_date
        ";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
