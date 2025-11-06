<?php
include('models/conexao.php');

if(isset($_POST['nome_usuario']) || isset($_POST['senha'])){
    if(strlen($_POST['nome_usuario']) == 0) {
        echo "Preencha o seu nome de usuário";
    } else if(strlen($_POST['senha']) == 0){
        echo "Preencha a sua senha";
    } else {
        $nome_usuario = $conexao->real_escape_string($_POST['nome_usuario']);
        $senha = $conexao->real_escape_string($_POST['senha']);

        $sqlCode = "SELECT * FROM usuarios WHERE nome_usuario = '$nome_usuario' AND senha = '$senha'";
        $sqlQuery = $conexao->query($sqlCode) or die("Falha na execução do código SQL: " . $conexao->error);

        $quantidade = $sqlQuery->num_rows;
        if($quantidade == 1){
            $usuario = $sqlQuery->fetch_assoc();
            
            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome_usuario'] = $usuario['nome_usuario'];

            header("Location: views/home.php");
            exit;
        } else {
            echo "Falha ao logar! O nome do usuário ou senha incorretos ";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Acesse a sua conta</h1>
    <form action="" method="POST">
        <h1>
            <label>Nome do usuário</label>
            <input type="text" name = "nome_usuario" id = "campo_nome">
        </h1>
        <h1>
            <label>Senha: </label>
            <input type="password" name="senha" id="campo_senha">
        </h1>

        <h1>
            <button type="submit">Entrar</button>
        </h1>
    </form>
</body>
</html>