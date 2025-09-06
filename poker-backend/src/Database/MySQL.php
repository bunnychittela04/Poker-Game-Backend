<?php

namespace Database;

class MySQL {
    private $pdo;

    public function __construct() {
        // Implement your PDO connection logic here
    }

    public function getConnection(): \PDO {
        return $this->pdo;
    }
}