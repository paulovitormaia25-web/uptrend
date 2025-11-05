<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Painel - Uptrend</title>
</head>
<body>
  <h1>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h1>
  <p>Você está logado.</p>
  <a href="logout.php">Sair</a>
</body>
</html>
