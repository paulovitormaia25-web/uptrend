<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Detalhes do Projeto - Uptrend</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to bottom right, #f2f2f2, #7649a5, #ffffff);
      padding: 40px 20px;
      min-height: 100vh;
      transition: background 0.3s, color 0.3s;
    }

    body.dark {
      background: #121212;
      color: #ddd;
    }

    .form-container {
      background: white;
      padding: 40px;
      border-radius: 20px;
      max-width: 700px;
      margin: auto;
      box-shadow: 0 0 25px rgba(0, 0, 0, 0.15);
      transition: background 0.3s, color 0.3s;
    }

    body.dark .form-container {
      background: #1f1f1f;
      color: #ddd;
    }

    h1 {
      text-align: center;
      color: #6e0ce3;
      margin-bottom: 30px;
    }

    body.dark h1 {
      color: #bb86fc;
    }

    label {
      display: block;
      margin-top: 20px;
      font-weight: 500;
    }

    input, select, textarea {
      width: 100%;
      padding: 12px;
      margin-top: 8px;
      border-radius: 8px;
      border: 1px solid #ccc;
      font-size: 16px;
      font-family: inherit;
      transition: background 0.3s, color 0.3s, border-color 0.3s;
    }

    body.dark input, body.dark select, body.dark textarea {
      background: #333;
      color: #ddd;
      border-color: #555;
    }

    textarea {
      resize: vertical;
      min-height: 100px;
    }

    select[multiple] {
      height: auto;
    }

    button {
      margin-top: 30px;
      background: #6e0ce3;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 25px;
      font-size: 16px;
      cursor: pointer;
      width: 100%;
      transition: background 0.3s;
    }

    button:hover {
      background: #8f4eff;
    }

    .toggle-mode {
      text-align: center;
      margin-top: 25px;
    }

    #darkModeToggle {
      background: #6e0ce3;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 20px;
      cursor: pointer;
      font-size: 14px;
      transition: background 0.3s;
    }

    body.dark #darkModeToggle {
      background: #bb86fc;
      color: #222;
    }

    @media (max-width: 600px) {
      .form-container {
        padding: 25px;
      }

      input, textarea, select {
        font-size: 15px;
      }
    }
  </style>
</head>
<body>

  <div class="form-container">
    <h1>Detalhes do Projeto</h1>
    <form action="enviar_detalhes.php" method="post" enctype="multipart/form-data">
      <label for="empresa">Nome da empresa:</label>
      <input type="text" id="empresa" name="empresa" required />

      <label for="ramo">Ramo de atuação:</label>
      <input type="text" id="ramo" name="ramo" required />

      <label for="cores">Cores principais desejadas:</label>
      <select id="cores" name="cores[]" multiple required>
        <option value="Roxo">Roxo</option>
        <option value="Branco">Branco</option>
        <option value="Preto">Preto</option>
        <option value="Cinza">Cinza</option>
        <option value="Azul">Azul</option>
        <option value="Verde">Verde</option>
        <option value="Amarelo">Amarelo</option>
        <option value="Vermelho">Vermelho</option>
      </select>
      <small>Segure Ctrl (Windows) ou Cmd (Mac) para selecionar várias opções</small>

      <label for="logotipo">Possui logotipo?</label>
      <select id="logotipo" name="logotipo">
        <option value="Sim">Sim</option>
        <option value="Não">Não</option>
      </select>

      <label for="redes">Possui redes sociais?</label>
      <textarea id="redes" name="redes" placeholder="Informe os @ ou links"></textarea>

      <label for="objetivo">Objetivo do sistema/site:</label>
      <textarea id="objetivo" name="objetivo" required></textarea>

      <label for="publico">Público-alvo:</label>
      <textarea id="publico" name="publico" required></textarea>

      <label for="estilo">Estilo visual desejado:</label>
      <textarea id="estilo" name="estilo" placeholder="Ex: moderno, minimalista, corporativo..."></textarea>

      

      <label for="arquivos">Arquivos de referência (logotipo, exemplo de site etc):</label>
      <input type="file" id="arquivos" name="arquivos[]" multiple />

      <button type="submit">Enviar Informações</button>
    </form>

    <div class="toggle-mode">
      <button id="darkModeToggle" onclick="toggleDarkMode()">Modo Escuro</button>
    </div>
  </div>

  <script>
    const toggleBtn = document.getElementById("darkModeToggle");
    const body = document.body;

    if (localStorage.getItem("darkMode") === "enabled") {
      body.classList.add("dark");
      toggleBtn.textContent = "Modo Claro";
    }

    function toggleDarkMode() {
      body.classList.toggle("dark");
      if (body.classList.contains("dark")) {
        localStorage.setItem("darkMode", "enabled");
        toggleBtn.textContent = "Modo Claro";
      } else {
        localStorage.setItem("darkMode", "disabled");
        toggleBtn.textContent = "Modo Escuro";
      }
    }
  </script>

</body>
</html>
