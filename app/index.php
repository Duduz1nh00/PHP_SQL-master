<?php

require_once '../classes/autoloader.php';
require_once 'Conecao.php';

$dbConnection = $conn;
$fornecedor = new Fornecedor($dbConnection);

$fornecedores = $fornecedor->getAllFornecedores();

if (!empty($fornecedores)) {
    foreach ($fornecedores as $fornecedorInfo) {
        echo "Nome Fantasia: " . $fornecedorInfo['Nome_Fantasia'] . "<br>";
        echo "Item: " . $fornecedorInfo['Item'] . "<br>";
        echo "Email: " . $fornecedorInfo['Email'] . "<br><br>";
    }
} else {
    echo "Nenhum fornecedor encontrado.";
}

/*if (!empty($fornecedores)) {:

Este trecho de código verifica se a variável $fornecedores não está vazia antes de prosseguir com o loop foreach. 
A função empty() verifica se uma variável está vazia ou não. Se a variável $fornecedores não estiver vazia 
(ou seja, houver fornecedores retornados), o bloco de código dentro do if será executado.

foreach ($fornecedores as $fornecedorInfo) {:

Este é um loop foreach que percorre cada item no array $fornecedores. 
O array $fornecedores é o resultado retornado pelo método getAllFornecedores da classe Fornecedor. 
Cada item no array corresponde a um fornecedor, e essas informações são armazenadas em $fornecedorInfo a cada iteração do loop.

Durante cada iteração do loop, você pode acessar os campos do fornecedor (como 'IDFornecedor', 'Nome_Fantasia', etc.) 
usando a variável $fornecedorInfo, que contém um array associativo com os detalhes do fornecedor.*/