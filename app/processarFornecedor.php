<?php
require_once '../src/autoloader.php';
require_once 'Conecao.php';

$dbConnection = $conn;
$fornecedor = new Fornecedor($dbConnection);

// Verifique se o ID do fornecedor foi passado como parâmetro na URL
if (isset($_GET['fornecedor'])) {
    // Use o ID do fornecedor selecionado para buscar suas informações
    $fornecedorSelecionado = $_GET['fornecedor'];

    // Chame a função para obter todos os fornecedores
    $fornecedores = $fornecedor->getAllFornecedores();

    // Verifique se foram encontradas informações para o fornecedor
    if (!empty($fornecedores)) {
        // Exiba as informações do fornecedor selecionado
        echo "<h2>Informações do Fornecedor:</h2>";
        foreach ($fornecedores as $fornecedorInfo) {
            if ($fornecedorInfo['IDFornecedor'] == $fornecedorSelecionado) {
                echo "Nome Fantasia: " . $fornecedorInfo['Nome_Fantasia'] . "<br>";
                echo "Item: " . $fornecedorInfo['Item'] . "<br>";
                echo "Email: " . $fornecedorInfo['email'] . "<br>";

                // Use o ID do fornecedor selecionado para buscar o endereço
                $endereco = $fornecedor->getEndereco($fornecedorSelecionado);

                if ($endereco) {
                    echo "Endereço: " . $endereco['Rua'] . ", " . $endereco['Numero'] . ", " . $endereco['Bairro'] . ", " . $endereco['Cidade'] . ", " . $endereco['Estado'] . "<br>";
                } else {
                    echo "Endereço não encontrado para este fornecedor.<br>";
                }
            }
        }
    } else {
        echo "Nenhum fornecedor encontrado.";
    }
} else {
    echo "Nenhum fornecedor selecionado.";
}
