<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $nome_login = $_POST['nome_login'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    require_once 'conexao.php';

    $stmt = $pdo->prepare("INSERT INTO usuarios (nome, sobrenome, email, nome_login, senha) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$nome, $sobrenome, $email, $nome_login, $senha]);

    header("Location: login.php");
    exit;
}
?>

<!-- HTML -->
<form action="register.php" method="post">
  <input type="text" name="nome" placeholder="Nome" required>
  <input type="text" name="sobrenome" placeholder="Sobrenome" required>
  <input type="email" name="email" placeholder="E-mail" required>
  <input type="text" name="nome_login" placeholder="Nome de Login" required>
  <input type="password" name="senha" placeholder="Senha" required>
  <input type="password" name="confirmar_senha" placeholder="Confirmar Senha" required>
  <button type="submit">Cadastrar</button>
</form>
