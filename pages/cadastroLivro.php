<?php 

    include_once("../component/head.php");
    include_once("../component/header.php");
    require_once('../functions/funcoes.php');

    verificaUsuarioLogado();
?>

<div class="login">
    <div class="box">
        <h2>Cadastrar novo livro</h2>
        <form action="../pages/realizaCadastroLivro.php" method="POST">
                <div class="user-box">
                    <input type="text" name="titulo" required>
                    <label>Nome do livro</label>
                </div>
                <div class="user-box">
                    <input type="text" name="autor" required>
                    <label>Autor</label>
                </div>
                <div class="user-box">
                    <input type="text" name="anoPublicacao" required>
                    <label>Ano de publicação</label>
                </div>
                <div class="user-box">
                    <select name="genero" required>
                        <option value="" disabled selected>Genêro</option>
                        <option value="Ficcao">Ficção</option>
                        <option value="acao">Ação</option>
                        <option value="aventura">Aventura</option>
                        <option value="terror">Terror</option>
                        <option value="hq">HQ</option>
                        <option value="manga">Mangá</option>
                        <option value="empreendedorismo">empreendedorismo</option>
                        <option value="autoajuda">Auto-Ajuda</option>
                        <option value="psicologia">Psicologia</option>
                    </select>
                </div>
                <div class="user-box">
                    <input type="text" name="sinopseDetalhada" required>
                    <label>Sinopse</label>
                </div>
                <div class="user-box">
                    <input type="text" name="imagem" required>
                    <label>Link da imagem</label>
                </div>
                <button type="submit">Cadastrar</button>
        </form>
    </div>
</div>

<?php include_once("../component/footer.php") ?>