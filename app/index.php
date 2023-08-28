<?php

require_once 'Conecao.php';

echo "Savle";

// Executa uma consulta de seleção
$sql = "SELECT IDCliente, Nome FROM Clientes";
$result = $conn->query($sql);

if ($result) {
    if ($result->num_rows > 0) {
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>ID: " . $row["IDCliente"] . " - Nome: " . $row["Nome"] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "Nenhum resultado encontrado.";
    }
} else {
    echo "Erro na consulta: " . $conn->error;
}

// Fecha a conexão
$conn->close();