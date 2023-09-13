<?php

namespace Src;


class Fornecedor {
    private $conn;

    public function __construct($connection) {
        $this->conn = $connection;
    }

    public function getAllFornecedores() {
        $query = "SELECT * FROM Fornecedores";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
    public function getEndereco($FornecedorID) {
        $query = "SELECT Rua, Numero, Bairro, Cidade, Estado FROM Endereco_Forn WHERE ID_Fornecedor = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $FornecedorID); // "i" indica que o parâmetro é um inteiro
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

}