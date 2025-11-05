<?php
session_start();

// Pega os dados do primeiro formulário
$dados_iniciais = $_SESSION['formulario_inicial'] ?? [];

// Pega os dados do segundo formulário
$empresa = $_POST['empresa'];
$ramo = $_POST['ramo'];
$cores = isset($_POST['cores']) ? implode(", ", $_POST['cores']) : 'Nenhuma';
$logo = $_POST['logo'];
$redes = $_POST['redes'];
$objetivo = $_POST['objetivo'];
$prazo = $_POST['prazo'];
$funcionalidades = isset($_POST['funcionalidades']) ? implode(", ", $_POST['funcionalidades']) : 'Nenhuma';
$design = $_POST['design'];
$publico = $_POST['publico'];

// Configurações do e-mail
$destinatario = "maiapaulovitor8@gmail.com"; // 🔹 altere para o seu e-mail
$assunto = "Novo projeto enviado pelo formulário";

// Monta o corpo do e-mail
$mensagem = "=== DADOS PESSOAIS ===\n";
$mensagem .= "Nome: " . ($dados_iniciais['nome'] ?? '') . "\n";
$mensagem .= "Email: " . ($dados_iniciais['email'] ?? '') . "\n";
$mensagem .= "Telefone: " . ($dados_iniciais['telefone'] ?? '') . "\n";
$mensagem .= "Plano: " . ($dados_iniciais['plano'] ?? '') . "\n";
$mensagem .= "Mensagem: " . ($dados_iniciais['mensagem'] ?? '') . "\n\n";

$mensagem .= "=== DETALHES DO PROJETO ===\n";
$mensagem .= "Empresa: $empresa\n";
$mensagem .= "Ramo: $ramo\n";
$mensagem .= "Cores: $cores\n";
$mensagem .= "Possui logotipo: $logo\n";
$mensagem .= "Redes sociais: $redes\n";
$mensagem .= "Objetivo do site: $objetivo\n";
$mensagem .= "Prazo estimado: $prazo\n";
$mensagem .= "Funcionalidades: $funcionalidades\n";
$mensagem .= "Design desejado: $design\n";
$mensagem .= "Público-alvo: $publico\n";

// Cabeçalhos
$headers = "From: noreply@seudominio.com\r\n";
$headers .= "Reply-To: " . ($dados_iniciais['email'] ?? 'noreply@seudominio.com') . "\r\n";

// Envia o e-mail
if (mail($destinatario, $assunto, $mensagem, $headers)) {
    echo "<script>alert('Formulário enviado com sucesso!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Erro ao enviar o formulário.'); history.back();</script>";
}
?>
