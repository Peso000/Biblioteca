<?php 

    $bola = null;
    $teste = $bola??null;

    $jsonString = file_get_contents("../bd/livros_customizados.json"); //Lê o arquivo json e transforma em string
    $livros = json_decode($jsonString, true); //Transforma a string em um array associativo
   
?>

<div class="layout">
    <div class="conteudo">
        <?php for($i = 0; $i < 15; $i++): ?>
        <div class="card">
            <img src="https://lh3.googleusercontent.com/proxy/Ojf_nYSR-GwslmcZVexqkijlz2SVM-Xx0CirukSByp9WVCnOwv-rLz2s8KDRiIINjgJlE2uvrEMeTS7yRE-V5Dzscl-wYhu78V1vZ-e_I1lpU9nORInx3l6wFns" alt="">
            <h3><?php echo strlen($livros[$i]['titulo']) > 15? substr($livros[$i]['titulo'], 0, 15). "...": $livros[$i]['titulo'] ?></h3>
            <div class="informacoes">
                <p><?php echo $livros[$i]['autor']; ?></p>
                <p><?php echo $livros[$i]['ano_de_publicacao']; ?></p>
            </div>
            <button>Comprar</button>
        </div>
        <?php endfor; ?>
    </div>
</div>