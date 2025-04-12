<?php 
session_start();

include_once("../component/head.php");

?>

<form class="login" action="../pages/fazLogin.php" method="get">
    <div>
        <p>Email:</p>
        <input type="text" name="email">
    </div>
    <div>
        <p>Senha:</p>
        <input type="text" name="senha">
    </div>
    <button>Entrar</button>
</form>

<?php include_once("../component/footer.php") ?>