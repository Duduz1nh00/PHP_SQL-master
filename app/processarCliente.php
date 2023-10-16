<?php
require_once '../src/autoloader.php';
require_once 'Conecao.php';

$dbConnection = $conn;
$cliente = new Cliente($dbConnection);

// Verifique se o ID do cliente foi passado como parâmetro na URL
if (isset($_GET['cliente'])) {
    // Use o ID do cliente selecionado para buscar suas informações
    $clienteSelecionado = $_GET['cliente'];

    // Chame a função para obter todos os clientes
    $clientes = $cliente->getAllClientes();

    // Verifique se foram encontradas informações para o cliente
    if (!empty($clientes)) {
        // Exiba as informações do cliente selecionado
        echo "<h2>Informações do Cliente:</h2>";
        foreach ($clientes as $clienteInfo) {
            if ($clienteInfo['IDCliente'] == $clienteSelecionado) {
                echo "Nome: " . $clienteInfo['Nome'] . "<br>";

                // Use o ID do cliente selecionado para buscar o endereço
                $endereco = $cliente->getEndereco($clienteSelecionado);

                if ($endereco) {
                    echo "Endereço: " . $endereco['Rua'] . ", " . $endereco['Numero'] . ", " . $endereco['Bairro'] . ", " . $endereco['Cidade'] . ", " . $endereco['Estado'] . "<br>";
                } else {
                    echo "Endereço não encontrado para este cliente.<br>";
                }

                // Use o ID do cliente selecionado para buscar o telefone
                $telefone = $cliente->getTelefone($clienteSelecionado);

                if ($telefone) {
                    echo "Telefone: " . $telefone . "<br>";
                } else {
                    echo "Telefone não encontrado para este cliente.<br>";
                }
            }
        }
    } else {
        echo "Nenhum cliente encontrado.";
    }
} else {
    echo "Nenhum cliente selecionado.";
}
?>
