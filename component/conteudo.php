<?php 
    $jsonString = file_get_contents("../bd/banco.json"); //Lê o arquivo json e transforma em string
    $livros = json_decode($jsonString, true); //Transforma a string em um array associativo
   
    function verificaLivro($livros){
        if(isset($_GET['filtro']) && $_GET['filtro'] !== ''){
            $filtro = $_GET['filtro'];
            return array_filter($livros, function($livros) use ($filtro){ //O array_filter é usado para filtrar o array e o use traz a variavel de fora da função pra dentro
                return $livros['genero'] == $filtro;
            });
        }else if(isset($_GET['pesquisa']) && $_GET['pesquisa'] !== ''){
            $pesquisa = $_GET['pesquisa'];
            $livros = array_filter($livros, function($livros) use ($pesquisa){
                return str_contains($pesquisa, $livros['titulo']);
            });
        }
        
        return $livros;
    }

    $livrosFiltrados = verificaLivro($livros);
?>

<h2 class="titulo-conteudo">Todos os livros</h2>
<div class="layout">
    <form action="../pages/livro.php" class="conteudo">
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