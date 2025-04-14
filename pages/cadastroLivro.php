<?php 

include_once("../component/head.php");
include_once("../component/header.php");

?>

<div class="login">
    <div class="box">
        <h2>Cadastrar novo livro</h2>
        <form  >
                <div class="user-box">
                    <input type="text" name="" required="">
                    <label>Nome do livro</label>
                </div>
                <div class="user-box">
                    <input type="text" name="" required="">
                    <label>Autor</label>
                </div>
                <div class="user-box">
                    <input type="text" name="" required="">
                    <label>Ano de publicação</label>
                </div>
                <div class="user-box">
                    <input type="text" name="" required="">
                    <label>Gênero</label>
                </div>
                <div class="user-box">
                    <input type="text" name="" required="">
                    <label>Descrição</label>
                </div>
                <a href="#">
                    Cadastrar
                </a>
        </form>
    </div>
</div>

<?php include_once("../component/footer.php") ?>