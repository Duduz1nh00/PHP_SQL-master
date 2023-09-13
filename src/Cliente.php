<?php

namespace Src;


class Cliente {
    private $conn;
    
    public function __construct($connection) {
        $this->conn = $connection;
    }

    public function getAllClientes() {
        $query = "SELECT * FROM Clientes";
        $result = $this->conn->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
    public function getEndereco($clienteID) {
        $query = "SELECT Rua, Numero, Bairro, Cidade, Estado FROM Endereco_Cli WHERE ID_Cliente = $clienteID";
        $result = $this->conn->query($query);
        return $result->fetch_assoc();
    }

    public function getTelefone($clienteID) {
        $query = "SELECT Numero FROM Ctt_Cli WHERE ID_Cliente = $clienteID";
        $result = $this->conn->query($query);
        $row = $result->fetch_assoc();
        return $row['Numero'];
    }
}
