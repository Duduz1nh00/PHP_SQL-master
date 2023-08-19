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