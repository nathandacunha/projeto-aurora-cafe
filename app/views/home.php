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
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    :root {
      --cor-de-fundo: #AAACB0;
      --cor-navbar: #030301;
      --cor-fonte: #F4EDED;
    }

    body {
      background-color: var(--cor-de-fundo);
    }

    /* NAVBAR */
    #navbar {
      background-color: var(--cor-navbar);
      color: var(--cor-fonte);
      width: 100%;
      height: 55px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 20px;
      position: relative;
    }

    /* Título */
    #title h1 a {
      text-decoration: none;
      color: var(--cor-fonte);
      font-weight: 500;
      font-size: 1.3rem;
    }

    /* Ícone do menu */
    #menu-botao {
      cursor: pointer;
      color: var(--cor-fonte);
      font-size: 1.8rem;
      display: flex;
      align-items: center;
    }

    /* Esconde o checkbox */
    #menu-toggle {
      display: none;
    }

    /* Menu inicialmente escondido */
    #opcoes {
      display: none;
      position: absolute;
      top: 55px;
      right: 0;
      background-color: var(--cor-navbar);
      width: 100%;
      border-top: 1px solid #444;
      animation: fadeIn 0.3s ease;
    }

    /* Mostra o menu quando o checkbox estiver marcado */
    #menu-toggle:checked ~ #opcoes {
      display: flex;
      flex-direction: column;
      text-align: center;
      padding: 10px 0;
    }

    /* Estilos das opções */
    #opcoes ul {
      list-style: none;
    }

    #opcoes ul li {
      padding: 15px 0;
    }

    #opcoes ul li a {
      color: var(--cor-fonte);
      text-decoration: none;
      font-size: 1rem;
      transition: color 0.3s;
    }

    #opcoes ul li a:hover {
      color: #bfbfbf;
    }

    /* Animação de aparição */
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(-10px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Layout desktop */
    @media (min-width: 769px) {
      #menu-botao {
        display: none;
      }

      #opcoes {
        display: flex !important;
        position: static;
        flex-direction: row;
        justify-content: flex-end;
        background: none;
        border: none;
        width: auto;
      }

      #opcoes ul {
        display: flex;
        gap: 25px;
      }

      #opcoes ul li {
        padding: 0;
      }
    }

    /* seção boas vindas */

    #boas-vindas .imagens img {
        width: 300px;
    }


  </style>
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
