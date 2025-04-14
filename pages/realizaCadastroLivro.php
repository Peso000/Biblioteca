<?php 
    session_start();
    
    if(!isset($_SESSION['livros'])){
        $_SESSION['livros'] = [];
    }

    if(isset($_POST)){
        array_push($_SESSION['livros'], $_POST);
    }


    header('location: ../pages/index.php');

?>