<?php
// Aqui você pode salvar em banco, enviar email, etc.

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Processa os dados, por exemplo, salvar no banco de dados ou enviar por email

  // Após processar, redireciona para o formulário com mensagem de sucesso
  header('Location: formulario_detalhado.php?sucesso=1');
  exit;
}
?>
