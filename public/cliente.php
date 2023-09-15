<h1>Página do Cliente</h1>
<p>Aqui está o conteúdo da página do cliente.</p>

<?php


require_once '../src/Cliente.php';
require_once 'app/Controller/ClienteController.php';

use Src\Cliente;
use App\Controller\ClienteController;


$dbConnection = $conn;
$cliente = new Cliente($dbConnection);


$dbConnection = $conn;
$controller = new ClienteController($dbConnection, $cliente);

// Agora você pode chamar métodos e usar as classes como desejar
$cliente = $controller->getAllClientes();
$controller->displayClientes($cliente);

?>