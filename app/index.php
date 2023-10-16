<!DOCTYPE html>
<html>
<head>
    <!-- Inclua os arquivos CSS do Bootstrap (o arquivo bootstrap.min.css é uma versão compactada) -->
    <link rel="stylesheet" href="css/bootstrap.css">
    
    <title>Selecione uma Opção</title>
    <style type="text/css">
        /* Estilize a barra de navegação */
        nav.site-header {
            background-color: #fff; /* Cor de fundo da barra de navegação */
            padding: 0;
            border-bottom: 1px solid #ddd; /* Adicione uma borda inferior */
        }

        nav.site-header a {
            text-decoration: none;
        }

        nav.site-header a:hover {
            text-decoration: underline;
        }

        .site-header .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
        }

        .site-header .navbar a {
            color: #333; /* Cor do texto dos links na barra de navegação */
            margin: 0 1rem; /* Espaçamento entre os links */
            font-size: 18px;
            text-transform: uppercase;
        }

        .site-header .navbar a:hover {
            color: #FF5733; /* Cor ao passar o mouse sobre os links */
        }

        .site-header .navbar a:first-child {
            margin-right: 1rem; /* Margem direita para "Sonhos realizados" */
        }

        .site-header .navbar a:last-child {
            margin-left: 1rem; /* Margem esquerda para "Princípio do sonho" */
        }

        /* Estilize o título h1 */
        h1 {
            text-align: center; /* Centralize o título h1 */
            font-size: 36px; /* Tamanho de fonte personalizado */
            color: #333; /* Cor personalizada */
        }
    </style>
</head>
<body>
    <nav class="site-header">
        <div class="container">
            <div class="navbar">
                <a href="indexCliente.php">Sonhos realizados</a>
                <a href="indexFornecedor.php">Princípio do sonho</a>
                <a href="indexFuncionario.php">Idealizadores</a>
            </div>
        </div>
    </nav>

    <h1>M Produções</h1>
</body>
</html>
