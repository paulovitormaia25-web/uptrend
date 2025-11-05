<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cadastro - Uptrend</title>
  <style>
    body {
      background-color: #602585;
      font-family: Arial;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .container {
      background-color: white;
      padding: 40px;
      border-radius: 16px;
      text-align: center;
      width: 400px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.3);
    }
    h2 {
      color: #6e0ce3;
    }
    input {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 8px;
    }
    button {
      width: 100%;
      padding: 12px;
      background: #6e0ce3;
      color: white;
      border: none;
      border-radius: 8px;
      cursor: pointer;
    }
    a {
      color: #6e0ce3;
    }
  </style>
</head>
<body>
<div class="container">
  <h2>Cadastro</h2>
  <form action="registro.php" method="POST">
    <input type="text" name="nome" placeholder="Seu nome" required>
    <input type="email" name="email" placeholder="Seu e-mail" required>
    <input type="password" name="senha" placeholder="Sua senha" required>
    <button type="submit">Cadastrar</button>
  </form>
  <p><a href="index.php">Voltar ao login</a></p>
</div>
</body>
</html>
