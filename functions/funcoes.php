<?php

    function buscaLivros():array{
        $json = file_get_contents('../bd/banco.json'); //Lê o arquivo json e transforma em string
        return json_decode($json, true); //Transforma a string em um array associativo
    }

    function filtraLivros(array $livros, string $filtro, string $pesquisa):array{
        if(isset($filtro) && $filtro !== ''){
            return array_filter($livros, function($livros) use ($filtro){ //O array_filter é usado para filtrar o array e o use traz a variavel de fora da função pra dentro
                return $livros['genero'] == $filtro;
            });
        }else if(isset($pesquisa) && $pesquisa !== ''){
            $livros = array_filter($livros, function($livros) use ($pesquisa){
                return str_contains($pesquisa, $livros['titulo']);
            });
        }
        
        return $livros;
    }

    function verificaUsuarioLogado(){
        if((!isset($_SESSION['usuario']) && $_SESSION['usuario'] !== 'admin') && (!isset($_SESSION['senha']) && !password_verify($_SESSION['senha'], $_SESSION['hash']))){
            header('location: ../pages/index.php');
        }
    }
    
?>