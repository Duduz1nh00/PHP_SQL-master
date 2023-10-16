<?php

class Funcionario {
    private $conn;

    public function __construct($connection) {
        $this->conn = $connection;
    }

    public function getAllFuncionarios() {
        $query = "SELECT Nome, Telefone FROM Funcionarios";
        $result = $this->conn->query($query);
        
        // Verifique se a consulta foi bem-sucedida
        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return array(); // Retorna um array vazio em caso de erro
        }
    }
    

}
