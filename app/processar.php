<?php

require_once '../src/autoloader.php';
require_once 'Conecao.php';

$dbConnection = $conn;
$fornecedor = new Fornecedor($dbConnection);

// Use o ID do fornecedor selecionado para buscar suas informações (você precisa do ID, certo?)
$fornecedorSelecionado = $_POST['fornecedor'];

// Verifique se o formulário foi enviado via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifique se o ID do fornecedor foi selecionado
    if (!empty($fornecedorSelecionado)) {
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
} else {
    // Caso o formulário não tenha sido enviado via POST, você pode redirecionar o usuário de volta ao formulário ou mostrar uma mensagem de erro, se necessário.
    echo "O formulário não foi enviado corretamente.";
}
