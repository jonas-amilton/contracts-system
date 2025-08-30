<?php
require_once __DIR__ . "/../models/Contract.php";

class ContractController
{
    private $contractModel;

    public function __construct($conn)
    {
        $this->contractModel = new Contract($conn);
    }

    public function index()
    {
        $contracts = $this->contractModel->all();
        require __DIR__ . "/../views/list_contracts.php";
    }
}
