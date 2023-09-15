<?php

namespace App\Controller;

// Importar a classe Fornecedor com use
use Src\Cliente;

class ClienteController {
    private $conn;
    private $cliente;

    public function __construct($connection, $cliente) {
        $this->conn = $connection;
        $this->cliente = $cliente;
    }

    public function getAllClientes() {
        $query = "SELECT * FROM Clientes";
        $result = $this->conn->query($query);

        if (!$result) {
            // Tratamento de erro, você pode personalizar isso de acordo com suas necessidades
            return [];
        }

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function displayClientes($clientes) {
        if (!empty($clientes)) {
            foreach ($clientes as $clienteInfo) {
                echo "Nome: " . $clienteInfo['Nome'] . "<br>";
                $clienteID = $clienteInfo['IDCliente'];
                $endereco = $this->cliente->getEndereco($clienteID);

                if ($endereco) {
                    echo "Endereço: " . $endereco['Rua'] . ", " . $endereco['Numero'] . ", " . $endereco['Bairro'] . ", " . $endereco['Cidade'] . ", " . $endereco['Estado'] . "<br>";
                } else {
                    echo "Endereço não encontrado para este fornecedor.<br>";
                }

                echo "<br>"; // Adicione uma quebra de linha entre os fornecedores
            }
        } else {
            echo "Nenhum fornecedor encontrado.";
        }
    }

    public function atualizarFornecedorEndereco($nomeFantasia, $item, $email, $telefone, $rua, $numero, $bairro, $cidade, $estado) {
        // Prepare a chamada para a procedure
        $sql = "CALL atualizar_fornecedor_e_endereco(?, ?, ?, ?, ?, ?, ?, ?, ?)";

        // Inicialize a declaração preparada
        $stmt = $this->conn->prepare($sql);

        // Vincule os parâmetros da procedure
        $stmt->bind_param("sssssiiss", $nomeFantasia, $item, $email, $telefone, $rua, $numero, $bairro, $cidade, $estado);

        // Execute a procedure
        $stmt->execute();

        // Feche a declaração preparada
        $stmt->close();
    }

}


/*
Isso garantirá que o objeto $fornecedor seja passado corretamente para o controlador.

$dbConnection = $conn;
$fornecedor = new Fornecedor($dbConnection);
$controller = new FornecedorController($dbConnection, $fornecedor);
$fornecedores = $controller->getAllFornecedores();
$controller->displayFornecedores($fornecedores);
 */