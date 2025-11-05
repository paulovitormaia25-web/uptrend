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
    
    * { margin: 0; padding: 0; box-sizing: border-box; }

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
    
    }

    body.dark .container {
      background: #1e1e1e;
      box-shadow: 0 0 30px rgba(255 255 255 / 0.15);
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 24px 40px;
      background-color: #fff;
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
    }

    .hero h1 span {
      color: #c90d61;
    }

    .hero-text {
      max-width: 900px;
      margin: 0 auto;
      text-align: left;
      font-size: 17px;
      line-height: 1.8;
      padding-top: 30px;
    }

    .hero-text p {
      margin-bottom: 20px;
    }

    .hero-text i {
      margin-right: 8px;
      color: #c90d61;
    }

    body.dark .hero h1 {
      color: #bb86fc;
    }

    body.dark .hero-text {
      color: #ddd;
    }
    .sobre-nos {
  max-width: 900px;
  margin: 60px auto;
  padding: 40px;
  background-color: white;
  border-radius: 16px;
  box-shadow: 0 0 20px rgba(0,0,0,0.05);
  text-align: center;
}

.sobre-nos h1 {
  font-size: 32px;
  margin-bottom: 30px;
  color: #7400cf;
}

.sobre-nos p {
  margin-bottom: 20px;
  line-height: 1.8;
  font-size: 18px;
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
      color: #602585;
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
      background-color: #8a3bec;
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

    <section class="hero">
      <h1><span>SOBRE</span> NÓS</h1>
      <div class="sobre-nos">
        <p>
      A <strong>Uptrend</strong> nasceu em 2025 com um propósito claro: ajudar pequenas empresas a crescer por meio de soluções digitais eficientes, acessíveis e feitas sob medida. Vimos de perto o quanto muitos negócios locais têm dificuldade em se destacar no mercado por falta de presença online ou organização interna — e foi aí que decidimos agir.

 <strong>Desenvolvemos sites institucionais, sistemas desktop personalizados e combos completos com tudo o que uma empresa precisa para se estruturar e se posicionar com mais profissionalismo.</strong> Nossos pacotes são prontos para facilitar a escolha, mas sempre servem como ponto de partida: cada projeto é adaptado de acordo com o formulário preenchido ou conforme as demandas específicas de cada cliente.


O atendimento é feito exclusivamente via WhatsApp ou de forma presencial. Acreditamos que a proximidade é essencial para garantir que tudo seja bem entendido e entregue do jeito certo. Mantemos uma comunicação clara, transparente e rápida do início ao fim.



Se você está começando, se está desorganizado ou simplesmente quer crescer de forma mais estratégica, a Uptrend é a parceira certa. A gente cuida da tecnologia para que você possa focar no que realmente importa: fazer sua empresa evoluir.


      </div>
    </section>
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
          <li>Endereço:Rua da Inovação, 123 – Centro, Rio de Janeiro – RJ</li>
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
