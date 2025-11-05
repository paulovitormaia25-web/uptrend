<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Detalhes do Projeto</title>
  <style>
    body {
      background: linear-gradient(to right, #916bbf, #d8c4e3);
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      background-color: #fff;
      max-width: 700px;
      margin: 50px auto;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.2);
    }

    h1 {
      text-align: center;
      color: #6a0dad;
    }

    label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="file"],
    textarea,
    select {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .checkbox-container {
      margin-top: 10px;
      padding-left: 10px;
    }

    .checkbox-container label {
      display: block;
      margin-bottom: 5px;
      font-weight: normal;
    }

    button {
      margin-top: 20px;
      background-color: #6a0dad;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }

    button:hover {
      background-color: #5a009d;
    }

    .error {
      color: red;
      font-size: 14px;
      margin-top: 5px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Detalhes do Projeto</h1>

    <form id="formulario" onsubmit="event.preventDefault(); enviarWhatsApp();">
      <label for="empresa">Nome da empresa:</label>
      <input type="text" name="empresa" id="empresa" required>

      <label for="ramo">Ramo de atuação:</label>
      <select name="ramo" id="ramo" required>
        <option value="">Selecione</option>
        <option value="Comércio">Comércio</option>
        <option value="Saúde">Saúde</option>
        <option value="Educação">Educação</option>
        <option value="Tecnologia">Tecnologia</option>
        <option value="Outro">Outro</option>
      </select>

      <!-- Cores principais -->
      <label>Cores principais:</label>
      <div class="checkbox-container" id="cores">
        <label><input type="checkbox" name="cores[]" value="Roxo"> Roxo</label>
        <label><input type="checkbox" name="cores[]" value="Azul"> Azul</label>
        <label><input type="checkbox" name="cores[]" value="Verde"> Verde</label>
        <label><input type="checkbox" name="cores[]" value="Vermelho"> Vermelho</label>
        <label><input type="checkbox" name="cores[]" value="Amarelo"> Amarelo</label>
        <label><input type="checkbox" name="cores[]" value="Laranja"> Laranja</label>
        <label><input type="checkbox" name="cores[]" value="Preto"> Preto</label>
        <label><input type="checkbox" name="cores[]" value="Branco"> Branco</label>
      </div>
      <div id="erroCores" class="error"></div>

      <label for="logo">Possui logotipo?</label>
      <select name="logo" id="logo" required>
        <option value="">Selecione</option>
        <option value="Sim">Sim</option>
        <option value="Não">Não</option>
      </select>

      <label for="redes">Redes sociais:</label>
      <input type="text" name="redes" id="redes" placeholder="@usuario ou links" required>

      <label for="objetivo">Objetivo do site:</label>
      <textarea name="objetivo" id="objetivo" rows="3" required></textarea>

      <label for="prazo">Prazo estimado:</label>
      <input type="text" name="prazo" id="prazo" placeholder="Ex: 30 dias" required>

      <!-- Funcionalidades desejadas -->
      <label>Funcionalidades desejadas:</label>
      <div class="checkbox-container" id="funcionalidades">
        <label><input type="checkbox" name="funcionalidades[]" value="Cadastro de usuários"> Cadastro de usuários</label>
        <label><input type="checkbox" name="funcionalidades[]" value="Login com senha"> Login com senha</label>
        <label><input type="checkbox" name="funcionalidades[]" value="Formulário de contato"> Formulário de contato</label>
        <label><input type="checkbox" name="funcionalidades[]" value="Integração com redes sociais"> Integração com redes sociais</label>
        <label><input type="checkbox" name="funcionalidades[]" value="Galeria de fotos"> Galeria de fotos</label>
        <label><input type="checkbox" name="funcionalidades[]" value="Carrinho de compras / Pagamentos"> Carrinho de compras / Pagamentos</label>
        <label><input type="checkbox" name="funcionalidades[]" value="Área de administração"> Área de administração</label>
        <label><input type="checkbox" name="funcionalidades[]" value="Dashboard com gráficos"> Dashboard com gráficos</label>
        <label><input type="checkbox" name="funcionalidades[]" value="Chat online"> Chat online</label>
        <label><input type="checkbox" name="funcionalidades[]" value="Blog / Notícias"> Blog / Notícias</label>
      </div>
      <div id="erroFunc" class="error"></div>

      <label for="design">Tipo de design desejado:</label>
      <select name="design" id="design" required>
        <option value="">Selecione</option>
        <option value="Moderno">Moderno</option>
        <option value="Minimalista">Minimalista</option>
        <option value="Clássico">Clássico</option>
        <option value="Colorido">Colorido</option>
        <option value="Clean">Clean</option>
      </select>

      <label for="publico">Público-alvo:</label>
      <input type="text" name="publico" id="publico" placeholder="Ex: Jovens, profissionais da saúde..." required>

      <label for="referencias">Arquivos de referência (ex: prints, modelos):</label>
      <input type="file" name="referencias[]" id="referencias" multiple required>

      <button type="submit">Enviar pelo WhatsApp</button>
    </form>
  </div>

  <script>
    function validarCheckboxes(grupo, erroId, mensagem) {
      const selecionados = document.querySelectorAll(`#${grupo} input:checked`);
      const erroDiv = document.getElementById(erroId);
      if (selecionados.length === 0) {
        erroDiv.textContent = mensagem;
        return false;
      } else {
        erroDiv.textContent = "";
        return true;
      }
    }

    function enviarWhatsApp() {
      const form = document.getElementById("formulario");

      // Validação HTML padrão
      if (!form.checkValidity()) {
        form.reportValidity();
        return;
      }

      // Validação dos checkboxes
      const coresOk = validarCheckboxes("cores", "erroCores", "Selecione pelo menos uma cor.");
      const funcOk = validarCheckboxes("funcionalidades", "erroFunc", "Selecione pelo menos uma funcionalidade.");
      if (!coresOk || !funcOk) return;

      const empresa = document.getElementById("empresa").value;
      const ramo = document.getElementById("ramo").value;
      const logo = document.getElementById("logo").value;
      const redes = document.getElementById("redes").value;
      const objetivo = document.getElementById("objetivo").value;
      const prazo = document.getElementById("prazo").value;
      const design = document.getElementById("design").value;
      const publico = document.getElementById("publico").value;

      const cores = [...document.querySelectorAll('input[name="cores[]"]:checked')].map(el => el.value).join(", ");
      const funcionalidades = [...document.querySelectorAll('input[name="funcionalidades[]"]:checked')].map(el => el.value).join(", ");

      // ⚠️ coloque seu número de WhatsApp abaixo (sem +, só DDI + DDD + número)
      const telefone = "5581999999999";

      const texto = `*Novo projeto recebido!*%0A
🧩 *Empresa:* ${empresa}%0A
🏢 *Ramo:* ${ramo}%0A
🎨 *Cores principais:* ${cores}%0A
🖼️ *Possui logotipo:* ${logo}%0A
🌐 *Redes sociais:* ${redes}%0A
🎯 *Objetivo do site:* ${objetivo}%0A
⏰ *Prazo estimado:* ${prazo}%0A
⚙️ *Funcionalidades desejadas:* ${funcionalidades}%0A
💅 *Tipo de design:* ${design}%0A
👥 *Público-alvo:* ${publico}%0A`;

      window.open(`https://wa.me/${telefone}?text=${texto}`, '_blank');
    }
  </script>
</body>
</html>
