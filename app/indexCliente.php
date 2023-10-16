<!DOCTYPE html>
<html>
<head>
    <title>Selecionar Cliente</title>
    <style type="text/css">
        /* Estilize o menu suspenso horizontal */
        ul {
            list-style: none;
            padding: 0;
        }

        li {
            display: inline; /* Isso faz com que os itens da lista apareçam na mesma linha */
            margin-right: 20px; /* Espaço entre os itens */
        }

        /* Estilize o botão de seleção */
        input[type="submit"] {
            background-color: #069; /* Cor de fundo do botão */
            color: #fff; /* Cor do texto do botão */
            padding: 10px 20px; /* Espaçamento interno do botão */
            border: none; /* Remover a borda do botão */
            cursor: pointer; /* Alterar o cursor ao passar o mouse sobre o botão */
        }
    </style>
</head>
<body>
    <h1>Selecionar Cliente</h1>

    <ul>
        <?php
        require_once '../src/autoloader.php';
        require_once 'Conecao.php';

        $dbConnection = $conn;
        $cliente = new Cliente($dbConnection);

        $clientes = $cliente->getAllClientes();

        if (!empty($clientes)) {
            foreach ($clientes as $clienteInfo) {
                $clienteID = $clienteInfo['IDCliente'];
                $nomeCliente = $clienteInfo['Nome'];
                echo "<li><a href=\"processarCliente.php?cliente=$clienteID\">$nomeCliente</a></li>";
            }
        } else {
            echo "<li>Nenhum cliente encontrado</li>";
        }
        ?>
    </ul>
    <form action="processarCliente.php" method="get">
    </form>
</body>
</html>
