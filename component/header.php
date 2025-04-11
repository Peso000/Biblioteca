<?php session_start(); ?>

<header>
    <div class="titulos">
        <input class="barra-pesquisa" type="text">
        <button class="btnPesquisa"><img src="../images/icons8-pesquisar-50.png" alt=""></button>
    </div>
    <div>
        <div class="filtros">
            <form action="" method="GET">
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
        <a href="../pages/index.php" class="login">Logout</a>
        <a href="../pages/cadastroLivro.php" class="novoLivro">Novo Livro</a>
    <?php else: ?>
        <a href="../pages/login.php" class="login">Login</a>
    <?php endif; ?>
    <?php if(isset($_GET['filtro'])): ?>
        <a href="../pages/index.php" class="limpa-filtro">Limpar filtros</a>
    <?php endif; ?>
</header>