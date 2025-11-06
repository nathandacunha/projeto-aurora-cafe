<?php
include('protecao.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projeto - Aurora Café</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="/public/style/home.css">
</head>
<body>
  <header>
    <nav id="navbar">
      <div id="title">
        <h1><a href="#">Aurora Café</a></h1>
      </div>
      <!-- Checkbox "secreto" que controla o menu -->
      <input type="checkbox" id="menu-toggle">
      <label for="menu-toggle" id="menu-botao">
        <i class="bi bi-list"></i>
      </label>

      <div id="opcoes">
        <ul>
          <li><a href="#">Início</a></li>
          <li><a href="#">Sobre nós</a></li>
          <li><a href="#">Cardápio</a></li>
          <li><a href="#">Configurações</a></li>
          <li><a href="#">Contato</a></li>
          <li><a href="sair.php">Sair</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <main>
    <section id="boas-vindas">
      <h3>Bem-vindo(a) à Aurora Café, <?php echo $_SESSION['nome_usuario']?></h3>
      <div class="imagens">
        <img src="/public/img/cafe.jpg" alt="">
      </div>
    </section>
  </main>
</body>
</html>
