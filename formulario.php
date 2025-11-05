<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Formulário Completo - Uptrend</title>
<style>
body {
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(to bottom right, #f2f2f2, #7649a5, #ffffff);
    margin: 0;
    padding: 40px 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.form-container {
    background: white;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 0 25px rgba(0, 0, 0, 0.15);
    max-width: 700px;
    width: 100%;
}

h1 {
    text-align: center;
    color: #6e0ce3;
    margin-bottom: 30px;
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
}

textarea {
    resize: vertical;
    min-height: 100px;
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
}

button:hover {
    background: #8f4eff;
}

.back-link {
    display: block;
    text-align: center;
    margin-top: 20px;
    color: #555;
    text-decoration: none;
}

.back-link:hover {
    text-decoration: underline;
}

.checkbox-container {
    display: flex;
    flex-direction: column; /* Itens um abaixo do outro */
    gap: 10px; /* Espaço entre linhas */
    margin-top: 8px;
}

.checkbox-container label {
    display: flex;
    align-items: center;
    font-weight: normal;
}

.checkbox-container input[type="checkbox"] {
    width: 20px;       /* Largura fixa da caixa */
    height: 20px;      /* Altura fixa da caixa */
    margin-right: 10px; /* Espaço entre caixa e texto */
    flex-shrink: 0;     /* Não deixa a checkbox encolher */
}

.error {
    color: red;
    margin-top: 5px;
}


</style>
</head>
<body>

<div class="form-container">
<h1>Formulário Completo</h1>

<form id="formulario" onsubmit="enviarWhatsApp(event)">
    <!-- DADOS PESSOAIS -->
    <h2>Informações Pessoais</h2>
    <label for="nome">Nome completo <span style="color:red">*</span>:</label>
    <input type="text" id="nome" name="nome" required>

    <label for="email">E-mail <span style="color:red">*</span>:</label>
    <input type="email" id="email" name="email" required>

    <label for="telefone">Telefone (WhatsApp) <span style="color:red">*</span>:</label>
    <input type="tel" id="telefone" name="telefone" required>

    <label for="plano">Plano desejado <span style="color:red">*</span>:</label>
    <select id="plano" name="plano" required>
        <option value="">Selecione</option>
        <option value="Básico">Plano Básico</option>
        <option value="Intermediário">Plano Intermediário</option>
        <option value="Premium">Plano Premium</option>
    </select>

    <label for="mensagem">Observações ou necessidades específicas <span style="color:red">*</span>:</label>
    <textarea id="mensagem" name="mensagem" placeholder="Ex: quero integração com sistema de estoque..." required></textarea>

    <!-- DETALHES DO PROJETO -->
    <h2>Detalhes do Projeto</h2>

    <label for="empresa">Nome da empresa <span style="color:red">*</span>:</label>
    <input type="text" id="empresa" name="empresa" required>

    <label for="ramo">Ramo de atuação <span style="color:red">*</span>:</label>
    <select id="ramo" name="ramo" required>
        <option value="">Selecione</option>
        <option value="Comércio">Comércio</option>
        <option value="Saúde">Saúde</option>
        <option value="Educação">Educação</option>
        <option value="Tecnologia">Tecnologia</option>
        <option value="Outro">Outro</option>
    </select>

    <label for="objetivo">Objetivo do site <span style="color:red">*</span>:</label>
    <textarea id="objetivo" name="objetivo" required></textarea>

    <label for="prazo">Prazo estimado <span style="color:red">*</span>:</label>
    <input type="text" id="prazo" name="prazo" placeholder="Ex: 30 dias" required>

    <label>Funcionalidades desejadas <span style="color:red">*</span>:</label>
 
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

    <label for="design">Tipo de design desejado <span style="color:red">*</span>:</label>
    <select name="design" id="design" required>
        <option value="">Selecione</option>
        <option value="Moderno">Moderno</option>
        <option value="Minimalista">Minimalista</option>
        <option value="Clássico">Clássico</option>
        <option value="Colorido">Colorido</option>
        <option value="Clean">Clean</option>
    </select>

    <label for="publico">Público-alvo <span style="color:red">*</span>:</label>
    <input type="text" name="publico" id="publico" placeholder="Ex: Jovens, profissionais da saúde..." required>

    <label for="referencias">Arquivos de referência (ex: prints, modelos):</label>
<input type="file" name="referencias[]" id="referencias" multiple>

    


    <button type="submit">Enviar pelo WhatsApp</button>
</form>
</div>

<script>
function enviarWhatsApp(event) {
    event.preventDefault();

    var numero = "5521965274429"; // Coloque seu número aqui

    // Dados pessoais
    var nome = document.getElementById('nome').value;
    var email = document.getElementById('email').value;
    var telefone = document.getElementById('telefone').value;
    var plano = document.getElementById('plano').value;
    var mensagem = document.getElementById('mensagem').value;

    // Detalhes do projeto
    var empresa = document.getElementById('empresa').value;
    var ramo = document.getElementById('ramo').value;
    var objetivo = document.getElementById('objetivo').value;
    var prazo = document.getElementById('prazo').value;

    // Funcionalidades obrigatórias
    var funcionalidades = [];
    document.querySelectorAll('input[name="funcionalidades[]"]:checked').forEach(function(cb) {
        funcionalidades.push(cb.value);
    });
    if(funcionalidades.length === 0){
        document.getElementById('erroFunc').textContent = "Selecione pelo menos uma funcionalidade.";
        return;
    } else {
        document.getElementById('erroFunc').textContent = "";
    }

    var design = document.getElementById('design').value;
    var publico = document.getElementById('publico').value;

    // Monta a mensagem
    var texto = `Novo pedido de contratação:\n\n` +
                `-- Dados Pessoais --\n` +
                `Nome: ${nome}\n` +
                `E-mail: ${email}\n` +
                `Telefone: ${telefone}\n` +
                `Plano: ${plano}\n` +
                `Observações: ${mensagem}\n\n` +
                `-- Detalhes do Projeto --\n` +
                `Empresa: ${empresa}\n` +
                `Ramo: ${ramo}\n` +
                `Objetivo: ${objetivo}\n` +
                `Prazo: ${prazo}\n` +
                `Funcionalidades: ${funcionalidades.join(', ')}\n` +
                `Design: ${design}\n` +
                `Público-alvo: ${publico}`;

    var url = "https://wa.me/" + numero + "?text=" + encodeURIComponent(texto);
    window.open(url, "_blank");
}
</script>

</body>
</html>
