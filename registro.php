<?php
session_start();
include('conexao.php'); // Garante que $conexao está definido

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    // Verificar se o email já existe
    $check = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '$email'");
    if (mysqli_num_rows($check) > 0) {
        echo "<script>alert('Email já cadastrado!'); window.location.href='cadastro.php';</script>";
        exit();
    }

    // Inserir usuário
    $sql = "INSERT INTO usuarios (nome, email, senha) 
            VALUES ('$nome', '$email', '$senha')";

    if (mysqli_query($conexao, $sql)) {
        echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href='index.php';</script>";
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($conexao);
    }
} else {
    header("Location: cadastro.php");
    exit();
}
?>
