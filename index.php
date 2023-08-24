<!DOCTYPE html>
<html>
<head>
    <title>Clientes</title>
</head>
<body>
    <h1>Clientes</h1>
    <?php
    // Repita o processo de conexão aqui

    $sql = "SELECT * FROM Clientes";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<ul>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<li>{$row['Nome']}</li>";
        }
        echo "</ul>";
    } else {
        echo "Nenhum resultado encontrado.";
    }

    // Fechamento da conexão
    mysqli_close($conn);
    ?>
</body>
</html>

<?php

$connect = mysqli_connect(
    'db', #Nome do serviço
    'root', # user
    '1234', # Senha
    'decoracao' # tabela
);

$table_name = "Funcionarios";

$query = " SELECT * FROM $table_name";

$response = mysqli_query($connect, $query);

echo "<strong>$table_name: </strong>";
while($i = mysqli_fetch_assoc($response))

{
    echo "<p>".$i['Nome']."</p>";
    echo "<p>".$i['Salario']."</p>";
    echo "<p>".$i['Contato']."</p>";
    echo "<hr>";
}

$table_name = "Fornecedor";

$query = " SELECT * FROM $table_name";

$response = mysqli_query($connect, $query);

echo "<strong>$table_name: </strong>";
while($i = mysqli_fetch_assoc($response))

{
    echo "<p>".$i['Nome']."</p>";
    echo "<p>".$i['Contato']."</p>";
    echo "<hr>";
}