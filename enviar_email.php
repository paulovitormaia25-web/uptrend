<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

// Conectar ao banco (exemplo)
include('conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    // Salvando no banco (ajuste para sua tabela)
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    if (mysqli_query($conn, $sql)) {

        // Enviando e-mail de confirmação
        $mail = new PHPMailer(true);
        try {
            // Configurações do servidor
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'marcellavictor11@gmail.com';  // Seu email
            $mail->Password = 'SENHA_DE_APLICATIVO';         // Senha de aplicativo
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Remetente
            $mail->setFrom('marcellavictor11@gmail.com', 'Uptrend');

            // Destinatário
            $mail->addAddress($email, $nome);

            // Conteúdo
            $mail->isHTML(true);
            $mail->Subject = 'Cadastro realizado com sucesso!';
            $mail->Body = "
                <h2>Bem-vindo à Uptrend!</h2>
                <p>Olá <b>$nome</b>, seu cadastro foi realizado com sucesso na <b>Uptrend</b>.<br><br>Seja muito bem-vindo(a)!</p>
                <p>Em breve, nossa equipe entrará em contato.</p>
                <br>
                <p style='color:gray;'>Esta é uma mensagem automática, por favor não responda.</p>
            ";

            $mail->send();
            echo "<script>alert('Cadastro realizado e e-mail enviado com sucesso!');window.location='login.php';</script>";
        } catch (Exception $e) {
            echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
        }
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Cadastro | Uptrend</title>
<style>
body {
  background-color: #602585;
  font-family: 'Segoe UI', sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

form {
  background: white;
  padding: 30px;
  border-radius: 16px;
  box-shadow: 0 8px 20px rgba(0,0,0,0.2);
  width: 350px;
}

form h2 {
  text-align: center;
  margin-bottom: 20px;
  color: #6e0ce3;
}

input {
  width: 100%;
  padding: 10px;
  margin: 8px 0;
  border-radius: 8px;
  border: 1px solid #ccc;
}

button {
  width: 100%;
  padding: 10px;
  background: #6e0ce3;
  color: white;
  border: none;
  border-radius: 8px;
  cursor: pointer;
}

button:hover {
  background: #5a0ccc;
}
</style>
</head>
<body>

<form action="cadastro.php" method="POST">
  <h2>Cadastre-se</h2>
  <input type="text" name="nome" placeholder="Seu nome" required>
  <input type="email" name="email" placeholder="Seu e-mail" required>
  <input type="password" name="senha" placeholder="Sua senha" required>
  <button type="submit">Cadastrar</button>
</form>

</body>
</html>
