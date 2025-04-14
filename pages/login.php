<?php 
session_start();

include_once("../component/head.php");

?>

<img class="logo_login" src="../images/logo.png">
<div class="login">
    <div class="box">
        <a href="../pages/index.php" class="voltar">
            <img src="../images/seta-esquerda.png" alt="seta_esquerda">
            <p>Voltar</p>
        </a>
        <h2>Login</h2>
        <p class="error"><?php if(isset($_SESSION['error'])) { echo $_SESSION['error']; } ?></p>
        <form action="../pages/fazLogin.php" method="POST">
                <div class="user-box">
                    <input type="text" name="email" required="">
                    <label>Email</label>
                </div>
                <div class="user-box">
                    <input type="password" name="senha" required="">
                    <label>Senha</label>
                </div>

                <button type="submit">Entrar</button>
        </form>
    </div>
</div>

<?php include_once("../component/footer.php") ?>

