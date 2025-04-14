<?php

    $json = file_get_contents('../bd/banco.json');
    $livros = json_decode($json, true);

    if(!isset($_GET['filtro']) && !isset($_GET['pesquisa'])):
?>

<h2 class="titulo-carousel">Livros Em Destaque</h2>
<div class="box-carousel">
    <div class="carrosel2">
        <button onclick="anterior(event)"><img src="../images/proximo.png" alt="" class="rotacionado"></button>
        <form  class="items-carrosel2"action="../pages/livro.php" method="get">
            <div class="container-carrosel">
                <?php for($i = 0; $i < 10; $i++): ?>
                    <div class="card" id="<?php echo $i; ?>">
                        <img src="<?php echo $livros[$i]["imagem"]; ?>" alt="imagem_livro">
                        <h3><?php echo strlen($livros[$i]['titulo']) > 15? substr($livros[$i]['titulo'], 0, 15). "...": $livros[$i]['titulo']; ?></h3>
                        <div class="informacoes">
                            <p><?php echo $livros[$i]['anoPublicacao']; ?></p>
                            <p><?php echo $livros[$i]['autor'] ?></p>
                        </div>
                        <button name="id" value="<?php echo $livros[$i]["id"]; ?>">Ver mais</button>
                    </div>
                <?php endfor; ?>
            </div>
        </form>
        <button onclick="proximo(event)"><img src="../images/proximo.png" alt=""></button>
    </div>
</div>

<h2 class="titulo-carousel">Best-sellers</h2>
<div class="box-carousel">
    <div class="carrosel2">
        <button onclick="anterior(event)"><img src="../images/proximo.png" alt="" class="rotacionado"></button>
        <form class="items-carrosel2" action="../pages/livro.php" method="get">
            <div class="container-carrosel">
                <?php for($i = 10; $i < 20; $i++): ?>
                    <div class="card" id="<?php echo $i; ?>">
                        <img src="<?php echo $livros[$i]["imagem"]; ?>" alt="imagem_livro">
                        <h3><?php echo strlen($livros[$i]['titulo']) > 15? substr($livros[$i]['titulo'], 0, 15). "...": $livros[$i]['titulo']; ?></h3>
                        <div class="informacoes">
                            <p><?php echo $livros[$i]['anoPublicacao']; ?></p>
                            <p><?php echo $livros[$i]['autor'] ?></p>
                        </div>
                        <button name="id" value="<?php echo $livros[$i]["id"]; ?>">Ver mais</button>
                    </div>
                <?php endfor; ?>
            </div>
        </form>
        <button onclick="proximo(event)"><img src="../images/proximo.png" alt=""></button>
    </div>
</div>

<h2 class="titulo-carousel">Fazendo sucesso</h2>
<div class="box-carousel">
    <div class="carrosel2">
        <button onclick="anterior(event)"><img src="../images/proximo.png" alt="" class="rotacionado"></button>
        <form class="items-carrosel2" action="../pages/livro.php" method="get">
            <div class="container-carrosel">
                <?php for($i = 20; $i < 30; $i++): ?>
                    <div class="card" id="<?php echo $i; ?>">
                        <img src="<?php echo $livros[$i]["imagem"]; ?>" alt="imagem_livro">
                        <h3><?php echo strlen($livros[$i]['titulo']) > 15? substr($livros[$i]['titulo'], 0, 15). "...": $livros[$i]['titulo']; ?></h3>
                        <div class="informacoes">
                            <p><?php echo $livros[$i]['anoPublicacao']; ?></p>
                            <p><?php echo strlen($livros[$i]['autor']) > 15? substr($livros[$i]['autor'], 0, 15). "...": $livros[$i]['autor'];?></p>
                        </div>
                        <button name="id" value="<?php echo $livros[$i]["id"]; ?>">Ver mais</button>
                    </div>
                <?php endfor; ?>
            </div>
        </form>
        <button onclick="proximo(event)"><img src="../images/proximo.png" alt=""></button>
    </div>
</div>

<?php endif; ?>