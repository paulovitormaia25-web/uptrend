<?php
$servidor = "localhost";
$usuario = "root";      // ou seu usuário do MySQL
$senha = "";            // coloque sua senha aqui, se houver
$banco = "usuarios"; // substitua pelo nome do seu banco

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

// Verifica se houve erro na conexão
if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>
