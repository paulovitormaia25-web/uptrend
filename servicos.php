<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Serviços - Uptrend</title>

  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <style>
    /* Reset básico */
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
      max-width: 1200px;
      margin: 40px auto;
      padding-bottom: 160px;
      overflow: hidden;
      transition: background 0.3s, color 0.3s;
      
    }

    body.dark .container {
      background: #1e1e1e;
      color: #ddd;
      box-shadow: 0 0 30px rgba(255 255 255 / 0.15);
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 24px 40px;
      background-color: #fff;
      transition: background-color 0.3s, color 0.3s;
    }

    body.dark header {
      background-color: #222;
      color: #ddd;
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

    nav a,
    nav span {
      color: #333;
      font-weight: 500;
      text-decoration: none;
      transition: color 0.3s;
    }

    body.dark nav a,
    body.dark nav span {
      color: #ccc;
    }

    nav a:hover {
      color: #7400cf;
    }

    body.dark nav a:hover {
      color: #bb86fc;
    }

    .hero {
      text-align: center;
      padding: 60px 40px 30px;
    }

    .hero h1 {
      font-size: 42px;
      margin-bottom: 20px;
      color: #7400cf;
      transition: color 0.3s;
    }

    body.dark .hero h1 {
      color: #bb86fc;
    }

    .hero h1 span {
      color: #c90d61;
    }

    .hero p {
      font-size: 18px;
      margin-bottom: 30px;
      color: #0f0f0f;
      transition: color 0.3s;
    }

    body.dark .hero p {
      color: #ddd;
    }

    .services-section {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 40px;
      padding: 20px 40px 60px;
      background-color: #fafafa;
      transition: background-color 0.3s;
    }

    body.dark .services-section {
      background-color: #292929;
    }

    .service-card {
      background: #ffffff;
      border: 1px solid #ddd;
      border-radius: 12px;
      padding: 30px 25px;
      width: 280px;
      box-shadow: 0 6px 14px rgba(0, 0, 0, 0.06);
      transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s, color 0.3s;
      text-align: center;
      color: #333;
    }

    body.dark .service-card {
      background: #3c3c3c;
      border-color: #555;
      color: #ddd;
      box-shadow: 0 6px 14px rgba(187, 134, 252, 0.3);
    }

    .service-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 12px 20px rgba(96, 37, 158, 0.2);
    }

    .service-card .icon {
      font-size: 36px;
      margin-bottom: 10px;
      color: #7400cf;
      transition: color 0.3s;
    }

    body.dark .service-card .icon {
      color: #bb86fc;
    }

    .service-card h3 {
      font-size: 18px;
      margin-bottom: 10px;
    }

    .service-card p {
      font-size: 14px;
      line-height: 1.5;
      color: inherit;
      margin-bottom: 10px;
    }

    .btn-saiba-mais {
      display: inline-block;
      background: #602585;
      color: white;
      text-decoration: none;
      padding: 8px 20px;
      border-radius: 20px;
      font-size: 14px;
      font-weight: 500;
      transition: background 0.3s;
    }

    .btn-saiba-mais:hover {
      background: #8a3bec;
    }

    body.dark .btn-saiba-mais {
      background: #bb86fc;
      color: #222;
    }

    footer {
      background-color: #f2f2f2;
      color: #222;
      padding: 50px 30px 30px;
      border-top: 1px solid #ccc;
      transition: background-color 0.3s, color 0.3s;
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

    footer p,
    footer li,
    footer a {
      font-size: 14px;
      color: #666;
      line-height: 1.8;
      text-decoration: none;
    }

    body.dark footer p,
    body.dark footer li,
    body.dark footer a {
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
      outline: none;
      font-size: 14px;
      transition: border-color 0.3s;
    }

    .newsletter button {
      padding: 10px 20px;
      border-radius: 0 8px 8px 0;
      border: none;
      background-color: #7400cf;
      color: white;
      cursor: pointer;
      font-size: 14px;
      transition: background-color 0.3s;
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

    body.dark .newsletter button:hover {
      background-color: #9f6fff;
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
    .numeropequeno{
      tranfor
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
      transition: background-color 0.3s;
    }

    .whatsapp-float:hover {
      background-color: #1ebe57;
    }

    @media (max-width: 768px) {
      .hero {
        padding: 30px 20px;
      }

      nav {
        flex-wrap: wrap;
        gap: 10px;
        justify-content: center;
      }

      .services-section {
        flex-direction: column;
        align-items: center;
      }

      footer .footer-inner {
        flex-direction: column;
        gap: 30px;
      }
      
      
    }
  </style>
</head>
<body>
  <!-- Container -->
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

    <section class="hero">
      <h1><span>Nossos</span> Serviços</h1>
      <p>Escolha o plano ideal para o seu negócio.</p>
    </section>

    <div class="services-section">
      <div class="service-card">
        <div class="icon"><i class="fas fa-globe"></i></div>
        <h3>Plano Básico</h3>
        <p>Ideal para quem precisa apenas de um site institucional moderno e responsivo para presença online.</p>
        <p><strong> 12x de R$ 416,67 sem juros
</strong></p>
</small></p>
        <a href="saibamais1.php" class="btn-saiba-mais">Saiba mais</a>
      </div>

      <div class="service-card">
        <div class="icon"><i class="fas fa-desktop"></i></div>
        <h3>Plano Intermediário</h3>
        <p>Solução em sistema desktop para controle interno, ideal para automatizar processos da empresa.</p>
        <p><strong>12x de R$ 583,33 sem juros</strong></p>
        <a href="saibamais2.php" class="btn-saiba-mais">Saiba mais</a>
      </div>

      <div class="service-card">
        <div class="icon"><i class="fas fa-layer-group"></i></div>
        <h3>Plano Premium</h3>
        <p>Combinação de site + sistema desktop para uma solução completa, integrada e eficiente.</p>
        <p><strong>12x de R$ 1.275,00 sem juros</strong></p>
        <a href="saibamais3.php" class="btn-saiba-mais">Saiba mais</a>
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
          <li>Telefone:  (21) 99928-5413</li>
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
    function fecharModal() {
      document.getElementById('modalLogin').style.display = 'none';
    }
    window.onclick = function (event) {
      const modal = document.getElementById('modalLogin');
      if (event.target == modal) {
        modal.style.display = 'none';
      }
    };

    const darkModeToggle = document.getElementById('darkModeToggle');
    const body = document.body;

    if (localStorage.getItem('darkMode') === 'enabled') {
      body.classList.add('dark');
      darkModeToggle.textContent = 'Modo Claro';
    }

    function toggleDarkMode() {
      body.classList.toggle('dark');
      if (body.classList.contains('dark')) {
        localStorage.setItem('darkMode', 'enabled');
        darkModeToggle.textContent = 'Modo Claro';
      } else {
        localStorage.setItem('darkMode', 'disabled');
        darkModeToggle.textContent = 'Modo Escuro';
      }
    }
  </script>
</body>
</html>
