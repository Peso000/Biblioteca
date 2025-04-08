<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/home.css">
    <title>Home</title>
</head>
<body>
    <div class="container">
        <header>
            <div class="titulos">
                <input class="barra-pesquisa" type="text">
                <button class="btnPesquisa"><img src="../images/icons8-pesquisar-50.png" alt=""></button>
            </div>
            <div>
                <div class="filtros">
                    <form action="./teste.php" method="get">

                        <button name="teste" value="10">Ficção</button>

                    <a href="">
                        <button>Ação</button>
                    </a>
                    <a href="">
                        <button>Aventura</button>
                    </a>
                    <a href="">
                        <button>Terror</button>
                    </a>
                    <a href="">
                        <button>HQ</button>
                    </a>
                    <a href="">
                        <button>Mangá</button>
                    </a>
                    <a href="">
                        <button>Empreendedorismo</button>
                    </a>
                    <a href="">
                        <button>Auto-ajuda</button>
                    </a>
                    <a href="">
                        <button>Psicologia</button>
                    </a>
                    </form>
                </div>
            </div>
        </header>
        <div class="layout">
            <div class="conteudo">
                <?php for($i = 0; $i < 15; $i++): ?>
                <div class="card">
                    <img src="https://lh3.googleusercontent.com/proxy/Ojf_nYSR-GwslmcZVexqkijlz2SVM-Xx0CirukSByp9WVCnOwv-rLz2s8KDRiIINjgJlE2uvrEMeTS7yRE-V5Dzscl-wYhu78V1vZ-e_I1lpU9nORInx3l6wFns" alt="">
                    <h3>Titulo</h3>
                    <div class="informacoes">
                        <p>Author</p>
                        <p>2006</p>
                    </div>
                    <button>Comprar</button>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</body>
</html>