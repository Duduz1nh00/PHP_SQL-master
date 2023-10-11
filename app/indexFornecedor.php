<!DOCTYPE html>
<html>
<head>
    <title>Selecionar Fornecedor</title>
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
    <h1>Selecionar Fornecedor</h1>

    <ul>
        <?php
        require_once '../src/autoloader.php';
        require_once 'Conecao.php';

        $dbConnection = $conn;
        $fornecedor = new Fornecedor($dbConnection);

        $fornecedores = $fornecedor->getAllFornecedores();

        if (!empty($fornecedores)) {
            foreach ($fornecedores as $fornecedorInfo) {
                $fornecedorID = $fornecedorInfo['IDFornecedor'];
                $nomeFantasia = $fornecedorInfo['Nome_Fantasia'];
                echo "<li><a href=\"processarFornecedor.php?fornecedor=$fornecedorID\">$nomeFantasia</a></li>";
            }
        } else {
            echo "<li>Nenhum fornecedor encontrado</li>";
        }
        ?>
    </ul>
    <form action="processarFornecedor.php" method="get">
    </form>
</body>
</html>
