<div class="box-carousel">
    <div class="carrosel2">
        <button onclick="anterior(event)"><img src="../images/proximo.png" alt="" class="rotacionado"></button>
        <div class="items-carrosel2">
            <div class="container-carrosel">
                <?php for($i = 0; $i < 15; $i++): ?>
                    <div class="card" id="<?php echo $i; ?>">
                        <img src="https://lh3.googleusercontent.com/proxy/Ojf_nYSR-GwslmcZVexqkijlz2SVM-Xx0CirukSByp9WVCnOwv-rLz2s8KDRiIINjgJlE2uvrEMeTS7yRE-V5Dzscl-wYhu78V1vZ-e_I1lpU9nORInx3l6wFns" alt="">
                        <h3>Titulo</h3>
                        <div class="informacoes">
                            <p>Author</p>
                            <p><?php echo $i; ?></p>
                        </div>
                        <button>Comprar</button>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
        <button onclick="proximo(event)"><img src="../images/proximo.png" alt=""></button>
    </div>
</div>