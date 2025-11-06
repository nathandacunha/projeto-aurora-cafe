<?php
$host = 'localhost';
$usuario = 'root';
$senha = '';
$db = 'db_aurora_cafe';

$conexao = new mysqli($host, $usuario, $senha, $db);

if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}
?>