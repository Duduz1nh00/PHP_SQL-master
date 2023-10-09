<!DOCTYPE html>
<html>
<head>
    <title>Selecionar Fornecedor</title>
</head>
<body>
    <h1>Selecionar Fornecedor</h1>

    <form action="processar.php" method="post">
        <label for="fornecedor">Selecione um Fornecedor:</label>
        <select name="fornecedor" id="fornecedor">
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
                    echo "<option value=\"$fornecedorID\">$nomeFantasia</option>";
                }
            } else {
                echo "<option value=\"\">Nenhum fornecedor encontrado</option>";
            }
            ?>
        </select>
        <input type="submit" value="Selecionar">
    </form>
</body>
</html>
