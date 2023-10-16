<?php
// Inclua o arquivo de configuração do banco de dados
require_once 'Conecao.php';

// Inclua a classe Funcionario
require_once '../src/Funcionario.php';

// Crie uma instância da classe Funcionario
$funcionario = new Funcionario($conn);

// Chame o método para obter todos os funcionários
$funcionarios = $funcionario->getAllFuncionarios();

// Verifique se existem funcionários
if (!empty($funcionarios)) {
    // Exiba os funcionários
    echo "<h1>Funcionários</h1>";
    foreach ($funcionarios as $funcionarioInfo) {
        echo "Nome: " . $funcionarioInfo['Nome'] . "<br>";
        echo "Telefone: " . $funcionarioInfo['Telefone'] . "<br><br>";
    }
} else {
    echo "Nenhum funcionário encontrado.";
}
?>
