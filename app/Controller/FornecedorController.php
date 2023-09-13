<?php

namespace App\Controller;

// Importar a classe Fornecedor com use
use Src\Fornecedor;

class FornecedorController {
    private $conn;
    private $fornecedor;

    public function __construct($connection, $fornecedor) {
        $this->conn = $connection;
        $this->fornecedor = $fornecedor;
    }

    public function getAllFornecedores() {
        $query = "SELECT * FROM Fornecedores";
        $result = $this->conn->query($query);

        if (!$result) {
            // Tratamento de erro, você pode personalizar isso de acordo com suas necessidades
            return [];
        }

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function displayFornecedores($fornecedores) {
        if (!empty($fornecedores)) {
            foreach ($fornecedores as $fornecedorInfo) {
                echo "Nome Fantasia: " . $fornecedorInfo['Nome_Fantasia'] . "<br>";
                echo "Item: " . $fornecedorInfo['Item'] . "<br>";
                echo "Email: " . $fornecedorInfo['email'] . "<br>";

                $fornecedorID = $fornecedorInfo['IDFornecedor'];
                $endereco = $this->fornecedor->getEndereco($fornecedorID);

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