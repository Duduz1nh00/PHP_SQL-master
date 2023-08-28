<?php

$servername = "db";      // Nome do serviço do banco de dados definido no docker-compose.yml
$username = "root";      // Usuário do banco de dados
$password = "1234";      // Senha do banco de dados
$dbname = "decoracao";   // Nome do banco de dados

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

?>