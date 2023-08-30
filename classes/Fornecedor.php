<?php

class Fornecedor {
    private $conn;

    public function __construct($connection) {
        $this->conn = $connection;
    }

    public function getAllFornecedores() {
        $query = "SELECT * FROM Fornecedores";
        $result = $this->conn->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getFornecedorInfo($fornecedorID) {
        $query = "SELECT * FROM Fornecedores WHERE IDFornecedor = $fornecedorID";
        $result = $this->conn->query($query);
        return $result->fetch_assoc();
    }
    
    public function getEndereco($clienteID) {
        $query = "SELECT Rua, Numero, Bairro, Cidade, Estado FROM Endereco_Cli WHERE ID_Cliente = $clienteID";
        $result = $this->conn->query($query);
        return $result->fetch_assoc();
    }
}