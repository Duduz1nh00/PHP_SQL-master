<?php

require_once '../src/autoloader.php';
require_once 'Conecao.php';

$dbConnection = $conn;
$cliente = new Cliente($dbConnection);

// Use o ID do cliente selecionado para buscar suas informações (você precisa do ID, certo?)
$clienteSelecionado = $_POST['cliente'];

// Verifique se o formulário foi enviado via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifique se o ID do cliente foi selecionado
    if (!empty($clienteSelecionado)) {
        // Chame a função para obter todos os clientes
        $clientes = $cliente->getAllClientes();

        // Verifique se foram encontradas informações para o cliente
        if (!empty($clientes)) {
            // Exiba as informações do cliente selecionado
            echo "<h2>Informações do Cliente:</h2>";
            foreach ($clientes as $clienteInfo) {
                if ($clienteInfo['ID_Cliente'] == $clienteSelecionado) {
                    echo "Nome: " . $clienteInfo['Nome'] . "<br>";
                    // Adicione outras informações que deseja exibir
                }
            }
        } else {
            echo "Nenhum cliente encontrado.";
        }
    } else {
        echo "Nenhum cliente selecionado.";
    }
} else {
    // Caso o formulário não tenha sido enviado via POST, você pode redirecionar o usuário de volta ao formulário ou mostrar uma mensagem de erro, se necessário.
    echo "O formulário não foi enviado corretamente.";
}
