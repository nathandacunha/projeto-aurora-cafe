<?php
if(!isset($_SESSION)){
  session_start();
}

if(!isset($_SESSION['id'])){
    die("Você não pode acessar essa página, porque não esta logado! Faça seu login em: <h1><a href = \"/app/index.php\"> Entrar</a> </h1>");
}
?>