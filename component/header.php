<?php session_start(); ?>

<header>
    <form action="../pages/index.php" method="GET" class="titulos">
        <input class="barra-pesquisa" type="text" name="pesquisa">
        <button class="btnPesquisa"><img src="../images/icons8-pesquisar-50.png" alt=""></button>
    </form>
    <div>
        <div class="filtros">
            <form action="../pages/index.php" method="GET">
                <button name="filtro" value="ficcao">Ficção</button>
                <button name="filtro" value="acao">Ação</button>
                <button name="filtro" value="aventura">Aventura</button>
                <button name="filtro" value="terror">Terror</button>
                <button name="filtro" value="hq">HQ</button>
                <button name="filtro" value="manga">Mangá</button>
                <button name="filtro" value="empreendedorismo">Empreendedorismo</button>
                <button name="filtro" value="autoajuda">Auto-ajuda</button>
                <button name="filtro" value="psicologia">Psicologia</button>
            </form>
        </div>
    </div>
    <?php if(isset($_SESSION['usuario']) && $_SESSION['usuario'] == "admin"): ?>
        <a href="../pages/fazLogout.php" class="btnLogin">Logout</a>
        <?php if($_SERVER['REQUEST_URI'] !== '/Biblioteca-master/pages/cadastroLivro.php'): ?>
            <a href="../pages/cadastroLivro.php" class="novoLivro">Novo Livro</a> 
        <?php endif;?>
    <?php else: ?>
        <a href="../pages/login.php" class="btnLogin">Login</a>
    <?php endif; ?>
    <?php if(isset($_GET['filtro']) || isset($_GET['pesquisa'])): ?>
        <a href="../pages/index.php" class="limpa-filtro">Limpar filtros</a>
    <?php endif; ?>
</header>