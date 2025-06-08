<?php
require '../config/db.php';
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("SELECT email FROM usuarios WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->rowCount() > 0) {
        $message = 'Este email já está cadastrado.';
    } else {
        $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
        $stmt->execute([$nome, $email, $senha]);
        

        header('Location: login.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lilita+One&display=swap');

        body {
            font-family: 'Lilita One', cursive;
            background-color: rgb(37, 37, 37);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background-color: rgb(50,50,50);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
            height: 580px;
            text-align: center;
        }
        h2 {
            color: rgb(255, 196, 0);
            margin-bottom: 20px;
        }
        input {
            width: 93%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: block;
            font-family: 'Lilita One', cursive;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: rgb(255, 196, 0);
            color: black;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-family: 'Lilita One', cursive;
        }
        button:hover {
            background-color: rgb(255, 170, 0);
        }
        .message {
            margin-top: 10px;
            color: rgb(255, 80, 80);
            font-size: 14px;
            font-family: 'Lilita One', cursive;
        }
        a{
            color: rgb(255, 196, 0);
            text-decoration: underline;
            font-family: 'Lilita One', cursive;
        }
    </style>
</head>
<body>
    <form method="post">
        <h2>Cadastrar</h2>
        <input name="nome" placeholder="Nome" required><br>
        <input name="email" type="email" placeholder="Email" required><br>
        <input name="senha" type="password" placeholder="Senha" required><br>
        <button type="submit">Cadastrar</button>
        <a href="login.php">Já tem uma conta? Faça o login.</a>
        <?php if (!empty($message)): ?>
            <p class="message"><?= $message ?></p>
        <?php endif; ?>
    </form>
</body>
</html>
