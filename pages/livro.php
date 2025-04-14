<?php 
    include_once("../component/head.php");
    include_once("../component/header.php");
    require_once('../functions/funcoes.php');

    $livros = buscaLivros();

    if(isset($_SESSION['livros']) && isset($_SESSION['livros'][$_GET['id']])){
        $livroSecao = $_SESSION['livros'][$_GET['id']];
    }
    
    foreach($livros as $livro){
        if($livro['id'] == $_GET['id']){
            $livroFiltrado = $livro;
        }
    }

    if(isset($_GET['secao'])):
?>
    <div class="box-livro">
        <div class="livro">
            <img src="<?php echo $livroSecao['imagem']; ?>" alt="">
            <div class="informacoes-livro">
                <h1><?php echo $livroSecao['titulo']; ?></h1>
                <div class="dividir">
                    <p><strong>Autor</strong></p>
                    <p><?php echo $livroSecao['autor']; ?></p>
                </div>
                <div class="dividir">
                    <p><strong>Ano de publicação</strong></p>
                    <p><?php echo $livroSecao['anoPublicacao']; ?></p>
                </div>
                <p class="sinopse"><?php echo $livroSecao['sinopseDetalhada']; ?></p>
            </div>
        </div>
    </div>
<?php else: ?>
    <div class="box-livro">
        <div class="livro">
            <img src="<?php echo $livroFiltrado['imagem']; ?>" alt="">
            <div class="informacoes-livro">
                <h1><?php echo $livroFiltrado['titulo']; ?></h1>
                <div class="dividir">
                    <p><strong>Autor</strong></p>
                    <p><?php echo $livroFiltrado['autor']; ?></p>
                </div>
                <div class="dividir">
                    <p><strong>Ano de publicação</strong></p>
                    <p><?php echo $livroFiltrado['anoPublicacao']; ?></p>
                </div>
                <p class="sinopse"><?php echo $livroFiltrado['sinopseDetalhada']; ?></p>
            </div>
        </div>
    </div>
<?php endif; include_once("../component/footer.php") ?>