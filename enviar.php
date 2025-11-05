  <?php
  // Pega os dados do primeiro formulário
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $plano = $_POST['plano'];
  $mensagem = $_POST['mensagem'];

  // Aqui você pode salvar no banco de dados, enviar por e-mail etc.
  // Exemplo: salvar temporariamente em sessão para reutilizar depois
  session_start();
  $_SESSION['formulario_inicial'] = [
    'nome' => $nome,
    'email' => $email,
    'telefone' => $telefone,
    'plano' => $plano,
    'mensagem' => $mensagem
  ];

  // Redireciona para o segundo formulário
  header("Location: detalhes.php");
  exit();
  ?>
