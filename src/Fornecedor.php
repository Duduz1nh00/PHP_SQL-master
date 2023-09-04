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
    
    public function getEndereco($FornecedorID) {
        $query = "SELECT Rua, Numero, Bairro, Cidade, Estado FROM Endereco_Forn WHERE ID_Fornecedor = $FornecedorID";
        $result = $this->conn->query($query);
        return $result->fetch_assoc();
    }

}