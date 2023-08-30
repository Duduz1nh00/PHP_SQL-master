<?php

class Funcionario {
    private $conn;

    public function __construct($connection) {
        $this->conn = $connection;
    }

    public function getAllFuncionarios() {
        $query = "SELECT * FROM Funcionarios";
        $result = $this->conn->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

}
