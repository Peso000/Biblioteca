<?php 
    $json = file_get_contents('../bd/banco.json');
    $livros = json_decode($json, true);

    foreach($livros as $livro){
        if($livro['id'] == $_GET['id']){
            $livroFiltrado = $livro;
        }
    }

    include_once("../component/head.php");
    include_once("../component/header.php");
?>
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
<?php include_once("../component/footer.php") ?>