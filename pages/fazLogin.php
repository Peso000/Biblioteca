<?php 
    session_start();

    require_once('../functions/funcoes.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if($email == "adm" && $senha == "123"){
        $_SESSION['usuario'] = $email;
        $_SESSION['senha'] = $senha;
        $_SESSION['hash'] = password_hash($senha, PASSWORD_DEFAULT);
        header('location: ../pages/index.php');
    }else{
        $_SESSION['error'] = 'Login ou senha inválidos';
        header('location: ../pages/login.php');
    }
?>