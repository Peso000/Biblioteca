<?php 
session_start();

include_once("../component/head.php");

?>

<img class="logo_login" src="../images/logo.png">
<div class="login">
    <div class="box">
        <h2>Login</h2>
        <form action="../pages/fazLogin.php" method="get">
                <div class="user-box">
                    <input type="text" name="" required="">
                    <label>Nome</label>
                </div>
                <div class="user-box">
                    <input type="text" name="" required="">
                    <label>Email</label>
                </div>
                <div class="user-box">
                    <input type="password" name="" required="">
                    <label>Senha</label>
                </div>

                <a href="../pages/cadastroLivro.php">
                    Entrar
                </a>
        </form>
    </div>
</div>

<?php include_once("../component/footer.php") ?>

