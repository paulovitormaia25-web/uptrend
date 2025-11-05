<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Contato - Uptrend</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background: #7400cf;
      color: #222;
      min-height: 100vh;
      transition: background-color 0.3s, color 0.3s;
    }

    body.dark {
      background: #121212;
      color: #ddd;
    }

    .container {
      background: linear-gradient(to bottom right, #f8f8f8, #eaeaea, #ffffff);
      border-radius: 16px;
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.2);
      max-width: 1100px;
      margin: 40px auto 60px;
      padding: 40px 40px 80px;
      transition: background 0.3s, color 0.3s;
      padding-bottom: 160px;
    }

    body.dark .container {
      background: #1e1e1e;
      color: #ddd;
      box-shadow: 0 0 30px rgba(187, 134, 252, 0.15);
    }

     header {
         background: linear-gradient(to bottom right, #f8f8f8, #eaeaea);
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 24px 40px;
     border-radius: 70px;
      transform: translate(0px, -25px);
    }

    body.dark header {
      background-color: #222;
    }

    .logo {
      font-size: 28px;
      font-weight: bold;
      color: #7400cf;
    }

    body.dark .logo {
      color: #bb86fc;
    }

    nav {
      display: flex;
      align-items: center;
      gap: 20px;
    }

    nav a, nav span {
      color: #333;
      font-weight: 500;
      text-decoration: none;
    }

    body.dark nav a, body.dark nav span {
      color: #ccc;
    }

    nav a:hover {
      color: #602585;
    }

    body.dark nav a:hover {
      color: #bb86fc;
    }

    #darkModeToggle {
      background: #7400cf;
      border: none;
      color: white;
      padding: 8px 15px;
      border-radius: 20px;
      cursor: pointer;
      font-size: 14px;
      transition: background 0.3s;
    }

    #darkModeToggle:hover {
      background: #8a3bec;
    }

    body.dark #darkModeToggle {
      background: #bb86fc;
      color: #222;
    }

    h1 {
      font-size: 32px;
      color: #7400cf;
      margin-bottom: 15px;
      text-align: center;
      transform: translate(0px, 10px);
    }

    h1 span {
      color: #c90d61;
    }

    p.lead {
      text-align: center;
      font-size: 18px;
      margin-bottom: 30px;
      color: #333;
      transition: color 0.3s;
    }

    body.dark p.lead {
      color: #ddd;
    }

    .info-contato {
      display: flex;
      flex-direction: column;
      gap: 20px;
      font-size: 16px;
      max-width: 600px;
      margin: 0 auto;
    }

    .info-item {
      background-color: #ffffff;
      border-radius: 12px;
      padding: 16px;
      box-shadow: 0px 2px 10px rgba(0,0,0,0.1);
      transition: background-color 0.3s, color 0.3s;
    }

    body.dark .info-item {
      background: #3c3c3c;
      color: #ddd;
    }

    .info-item strong {
      color: #7400cf;
      display: block;
      margin-bottom: 4px;
    }

    body.dark .info-item strong {
      color: #bb86fc;
    }

    footer {
      background-color: #f2f2f2;
      color: #222;
      padding: 50px 30px 30px;
      border-top: 1px solid #ccc;
    }

    body.dark footer {
      background-color: #222;
      color: #ccc;
      border-color: #444;
    }
    

    footer .footer-inner {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 40px;
      max-width: 1200px;
      margin: 0 auto;
    }

    footer h4 {
      margin-bottom: 12px;
      color: #444;
    }

    body.dark footer h4 {
      color: #bb86fc;
    }

    footer p, footer li, footer a {
      font-size: 14px;
      color: #666;
      line-height: 1.8;
      text-decoration: none;
    }

    body.dark footer p, body.dark footer li, body.dark footer a {
      color: #ccc;
    }

    footer ul {
      list-style: none;
      padding: 0;
    }

    footer ul li {
      margin-bottom: 6px;
    }

    footer ul li a:hover {
      text-decoration: underline;
      color: #7400cf;
    }

    body.dark footer ul li a:hover {
      color: #bb86fc;
    }

    footer .copyright {
      text-align: center;
      font-size: 13px;
      margin-top: 40px;
      color: #999;
    }

    body.dark footer .copyright {
      color: #666;
    }

    .newsletter input[type="email"] {
      padding: 10px;
      width: 220px;
      border-radius: 8px 0 0 8px;
      border: 1px solid #ccc;
    }

    .newsletter button {
      padding: 10px 20px;
      border-radius: 0 8px 8px 0;
      border: none;
      background-color: #7400cf;
      color: white;
      cursor: pointer;
    }

    .newsletter button:hover {
      background-color: #7400cf;
    }

    body.dark .newsletter input[type="email"] {
      background: #333;
      border-color: #555;
      color: #ddd;
    }

    body.dark .newsletter button {
      background-color: #bb86fc;
      color: #222;
    }

    #darkModeToggle {
      background: #7400cf;
      border: none;
      color: white;
      padding: 8px 15px;
      border-radius: 20px;
      cursor: pointer;
    }

    #darkModeToggle:hover {
      background: #8a3bec;
    }

    body.dark #darkModeToggle {
      background: #bb86fc;
      color: #222;
    }

    .whatsapp-float {
      position: fixed;
      width: 56px;
      height: 56px;
      bottom: 25px;
      right: 25px;
      background-color: #25d366;
      color: white;
      border-radius: 50%;
      text-align: center;
      font-size: 30px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
      z-index: 1000;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .whatsapp-float:hover {
      background-color: #1ebe57;
    }

    @media (max-width: 768px) {
      .hero { padding: 30px 20px; }
      nav { flex-wrap: wrap; gap: 10px; justify-content: center; }
      footer .footer-inner { flex-direction: column; gap: 30px; }
    }
  </style>
</head>
<body>

  <div class="container">

    <header>
      <div class="logo">Uptrend</div>
      <nav>
        <a href="index.php">Início</a>
        <a href="sobre.php">Sobre</a>
        <a href="servicos.php">Serviços</a>
        <a href="cntt.php">Contato</a>
        <a href="formulario.php">Formulário</a>

        <?php if (isset($_SESSION['nome'])) : ?>
          <span>Olá, <?php echo htmlspecialchars($_SESSION['nome']); ?>!</span>
          <a href="logout.php" style="color: red;">Sair</a>
        <?php else : ?>
          <a href="#" onclick="abrirModal()">Login</a>
        <?php endif; ?>

        <button id="darkModeToggle" onclick="toggleDarkMode()">Modo Escuro</button>
      </nav>
    </header>

    <h1><span>Entre</span> em Contato</h1>
    <p class="lead">Fale com a gente por um dos canais abaixo. Teremos prazer em ajudar.</p>

    <div class="info-contato">
      <div class="info-item">
        <strong>E-mail:</strong>
        contato@uptrend.com.br
      </div>

      <div class="info-item">
        <strong>Telefone:</strong>
       (21)99958-5413
      </div>

      <div class="info-item">
        <strong>Endereço:</strong>
        Rua da Inovação, 123 – Centro, Rio de Janeiro – RJ
      </div>
    </div>

  </div>

  <footer>
    <div class="footer-inner">
      <div class="footer-about">
        <h4>Sobre a Uptrend</h4>
        <p>Transformamos ideias em soluções digitais inovadoras. Tecnologia de ponta para o sucesso do seu negócio.</p>
      </div>

      <div class="footer-contato">
        <h4>Contato</h4>
        <ul>
          <li>Email: contato@uptrend.com.br</li>
          <li>Telefone:(21)965274429</li>
          <li>Endereço: Rua da Inovação, 123 – Centro, Rio de Janeiro – RJ</li>
        </ul>
      </div>

      <div class="footer-newsletter">
        <h4>Newsletter</h4>
        <form class="newsletter" action="newsletter.php" method="POST">
          <input type="email" name="email_newsletter" placeholder="Seu melhor e-mail" required />
          <button type="submit">Assinar</button>
        </form>
      </div>
    </div>
    <div class="copyright">
      &copy; <?php echo date('Y'); ?> Uptrend. Todos os direitos reservados.
    </div>
  </footer>

  <a href="https://wa.me/5511999999999" class="whatsapp-float" target="_blank">
    <i class="fab fa-whatsapp"></i>
  </a>

  <script>
    function abrirModal() {
      document.getElementById('modalLogin').style.display = 'block';
    }
    function toggleDarkMode() {
      document.body.classList.toggle('dark');
      const isDark = document.body.classList.contains('dark');
      localStorage.setItem('darkMode', isDark ? 'enabled' : 'disabled');
      document.getElementById('darkModeToggle').textContent = isDark ? 'Modo Claro' : 'Modo Escuro';
    }

    if (localStorage.getItem('darkMode') === 'enabled') {
      document.body.classList.add('dark');
      document.getElementById('darkModeToggle').textContent = 'Modo Claro';
    }
  </script>
</body>
</html>
