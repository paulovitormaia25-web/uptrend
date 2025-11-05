<?php
session_start();

// Dados do segundo formulário
$empresa = $_POST['empresa'] ?? '';
$ramo = $_POST['ramo'] ?? '';
$logo = $_POST['logo'] ?? '';
$redes = $_POST['redes'] ?? '';
$objetivo = $_POST['objetivo'] ?? '';
$prazo = $_POST['prazo'] ?? '';
$design = $_POST['design'] ?? '';
$publico = $_POST['publico'] ?? '';

// Campos múltiplos
$cores = $_POST['cores'] ?? [];
$funcionalidades = $_POST['funcionalidades'] ?? [];

// Arquivos
$referencias = $_FILES['referencias'] ?? null;

// Combinar com dados da sessão (opcional)
$dados_completos = [
  'nome' => $_SESSION['formulario_inicial']['nome'] ?? '',
  'email' => $_SESSION['formulario_inicial']['email'] ?? '',
  'telefone' => $_SESSION['formulario_inicial']['telefone'] ?? '',
  'plano' => $_SESSION['formulario_inicial']['plano'] ?? '',
  'mensagem' => $_SESSION['formulario_inicial']['mensagem'] ?? '',
  'empresa' => $empresa,
  'ramo' => $ramo,
  'logo' => $logo,
  'redes' => $redes,
  'objetivo' => $objetivo,
  'prazo' => $prazo,
  'design' => $design,
  'publico' => $publico,
  'cores' => $cores,
  'funcionalidades' => $funcionalidades
];

// Você pode salvar em banco, enviar por e-mail, etc.
// Aqui só exibiremos os dados como confirmação:

echo "<h2 style='color: green;'>Formulário enviado com sucesso!</h2>";
echo "<pre>";
print_r($dados_completos);
echo "</pre>";

// Se quiser salvar os arquivos de referência:
if ($referencias && is_array($referencias['name'])) {
  $upload_dir = 'uploads/';
  if (!file_exists($upload_dir)) {
    mkdir($upload_dir, 0755, true);
  }

  foreach ($referencias['name'] as $index => $filename) {
    $tmp_name = $referencias['tmp_name'][$index];
    $destination = $upload_dir . basename($filename);
    move_uploaded_file($tmp_name, $destination);
    echo "Arquivo enviado: $filename<br>";
  }
}
?>
