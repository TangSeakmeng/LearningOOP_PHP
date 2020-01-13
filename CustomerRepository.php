<?php
    class CustomerRepository
    {
        private $database;

        public function __construct(IDatabase $database)
        {
            $this->database = $database;
        }

        public function Add(string $customerName)
        {
            $this->database->addRow("Customer", $customerName);
        }
    }

    interface IDatabase
    {
        public function addRow(string $table, string $value);
    }

    class MySQLDatabase implements IDatabase
    {

    }

    class OracleDatabase implements IDatabase
    {

    }

    $mySQLDatabase = new MySQLDatabase();
    $CustomerRepository = new CustomerRepository($mySQLDatabase);
?>