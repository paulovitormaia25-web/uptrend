<?php
session_start();
include('conexao.php'); // Arquivo de conexão com o banco

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Verifica se o usuário existe
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = mysqli_query($conexao, $sql);


    if (mysqli_num_rows($result) === 1) {
        $usuario = mysqli_fetch_assoc($result);

        if (password_verify($senha, $usuario['senha'])) {
            // Login bem-sucedido
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['email'] = $usuario['email'];

            header('Location: index.php'); // Redireciona para a página inicial
            exit();
        } else {
            echo "<script>alert('Senha incorreta!'); window.location='index.php';</script>";
        }
    } else {
        echo "<script>alert('Usuário não encontrado!'); window.location='index.php';</script>";
    }
}
?>
