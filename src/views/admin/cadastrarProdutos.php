<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/RealizarPedido.css">
    <link rel="stylesheet" href="../../styles/menu.css">
    <link rel="stylesheet" href="../../styles/GoogleFonts/GoogleFonts.css">
    <link rel="stylesheet" href="../../styles/content.css">
    <link rel="stylesheet" href="../../styles/cadastroProdutos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Cadastrar Produtos</title>
</head>

<body>
    <nav class="menu-lateral">

        <div class="btn-expandir">
            <i class="bi bi-list" id="btn-exp"></i>
        </div>
        <ul>
            <li class="item-menu">
                <a href="cadastrarProdutos">
                    <span class="icon"><i class="bi bi-bag-fill"></i></span>
                    <span class="txt-link"> CadastrarProdutos</span>
                </a>
                </div>
            </li>
            <li class="item-menu">
                <a href="pedidosFeitos">
                    <span class="icon"><i class="bi bi-bag-fill"></i></span>
                    <span class="txt-link"> PedidosFeitos </span>
                </a>
                </div>
            </li>
            <li class="item-menu">
                <a href="usuarios">
                    <span class="icon"><i class="bi bi-bag-fill"></i></span>
                    <span class="txt-link"> Usuarios</span>
                </a>
                </div>
            </li>

        </ul>
    </nav>

    <div class="content">
        <h1>Cadastro</h1>
        <div class="container">
            <form action="../../controller/controllercadastro.php" method="post">
                <label>Descrição <input type="text" name="descricao" required></label>
                <label>Produtos<input type="text" name="descricao" required></label>
                <label>Preço <input type="text" name="preco" required></label>
                <label>Adicionais <input type="text" required></label>
                <label>Imagem <input type="file" required></label>
                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </div>


    <script src="../../js/menu.js" type="text/javascript"></script>
    <script src="../../js/noRefresh.js" type="text/javascript"></script>
</body>

</html>