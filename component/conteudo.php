<?php 

    require_once("../functions/funcoes.php");
    
    $livros = buscaLivros();

    $filtro = $_GET['filtro'] ?? '';
    $pesquisa = $_GET['pesquisa'] ?? '';

    $livrosFiltrados = filtraLivros($livros, $filtro, $pesquisa);

?>

<h2 class="titulo-conteudo"><?php echo $filtro == '' ? "Todos os livros" : "Livros de " . ucfirst($filtro); ?></h2>
<div class="layout">
    <form action="../pages/livro.php" class="conteudo">
        <?php if(isset($_SESSION['livros'])): for($i = 0; $i < count($_SESSION['livros']); $i++): ?>
            <div class="card">
                <img src="<?php echo $_SESSION['livros'][$i]['imagem']; ?>" alt="imagem_do_livro">
                <h3><?php echo strlen($_SESSION['livros'][$i]['titulo']) > 15? substr($_SESSION['livros'][$i]['titulo'], 0, 15). "...": $_SESSION['livros'][$i]['titulo'] ?></h3>
                <div class="informacoes">
                    <p><?php echo $_SESSION['livros'][$i]['anoPublicacao']; ?></p>
                    <p><?php echo strlen($_SESSION['livros'][$i]['autor']) > 15? substr($_SESSION['livros'][$i]['autor'], 0, 15). "...": $_SESSION['livros'][$i]['autor'];?></p>
                </div>
                <input type="text" name="secao" value="true" hidden>
                <button name="id" value="<?php echo $i; ?>">Ver mais</button>
            </div>
        <?php endfor; endif; ?>
        <?php foreach($livrosFiltrados as $livro): ?>
        <div class="card">
            <img src="<?php echo $livro['imagem']; ?>" alt="imagem_do_livro">
            <h3><?php echo strlen($livro['titulo']) > 15? substr($livro['titulo'], 0, 15). "...": $livro['titulo'] ?></h3>
            <div class="informacoes">
                <p><?php echo $livro['anoPublicacao']; ?></p>
                <p><?php echo strlen($livro['autor']) > 15? substr($livro['autor'], 0, 15). "...": $livro['autor'];?></p>
            </div>
            <button name="id" value="<?php echo $livro['id']; ?>">Ver mais</button>
        </div>
        <?php endforeach; ?>
        </form>
</div>