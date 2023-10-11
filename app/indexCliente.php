<!DOCTYPE html>
<html>
<head>
    <title>Informações do Cliente</title>
</head>
<body>
    <h1>Informações do Cliente</h1>

    <?php
    require_once '../src/autoloader.php';
    require_once 'Conecao.php';

    $dbConnection = $conn;
    $cliente = new Cliente($dbConnection);

    if (isset($_POST['cliente'])) {
        $clienteSelecionado = $_POST['cliente'];
        $clientes = $cliente->getAllClientes();

        if (!empty($clientes)) {
            foreach ($clientes as $clienteInfo) {
                if ($clienteInfo['ID_Cliente'] == $clienteSelecionado) {
                    echo "<h2>Informações do Cliente:</h2>";
                    echo "Nome: " . $clienteInfo['Nome'] . "<br>";
                    // Adicione outras informações que deseja exibir
                }
            }
        } else {
            echo "Nenhum cliente encontrado.";
        }
    } else {
        echo "Nenhum cliente selecionado.";
    }
    ?>
</body>
</html>
