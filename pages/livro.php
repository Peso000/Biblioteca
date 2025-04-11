<?php 
    $json = file_get_contents('../bd/banco.json');
    $livros = json_decode($json, true);

    foreach($livros as $livro){
        if($livro['id'] == $_GET['id']){
            $livroFiltrado = $livro;
        }
    }

    include_once("../component/head.php");
?>

<div>
    <img src="<?php echo $livroFiltrado['imagem']; ?>" alt="">
    <div>
        <h1><?php echo $livroFiltrado['titulo']; ?></h1>
        <div>
            <p>Autor</p>
            <p><?php echo $livroFiltrado['autor']; ?></p>
        </div>
        <div>
            <p>Ano de publicação</p>
            <p><?php echo $livroFiltrado['anoPublicacao']; ?></p>
        </div>
        <p><?php echo $livroFiltrado['sinopseDetalhada']; ?></p>
    </div>
</div>

<?php include_once("../component/footer.php") ?>