<!DOCTYPE html>
<html>
<head>
    <title>Minha Aplicação</title>
</head>
<body>
    <?php
    // Verifique se a variável 'page' está definida na URL
    if (isset($_GET['page'])) {
        $page = $_GET['page'];

        // Determine qual página carregar com base no valor da variável 'page'
        switch ($page) {
            case 'cliente':
                include '../app/Controller/ClienteController.php';
                break;
            case 'fornecedor':
                include '../app/Controller/FornecedorController.php';
                break;
            default:
                include 'home.php'; // Página inicial
                break;
        }
    } else {
        include 'home.php'; // Página inicial (quando a variável 'page' não está definida)
    }
    ?>
</body>
</html>
