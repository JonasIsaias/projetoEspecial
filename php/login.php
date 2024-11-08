<?php
session_start();

// Dados fictícios de usuário (substituir por banco de dados)
$usuarios = [
    'admin' => ['senha' => 'admin123', 'perfil' => 'administrador'],
    'funcionario' => ['senha' => 'func123', 'perfil' => 'funcionario'],
    'cliente' => ['senha' => 'cliente123', 'perfil' => 'cliente'],
];

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['username'];
    $senha = $_POST['password'];

    // Verificar se o usuário existe no array
    if (isset($usuarios[$usuario]) && $usuarios[$usuario]['senha'] === $senha) {
        // Iniciar a sessão e armazenar as informações do usuário
        $_SESSION['usuario'] = $usuario;
        $_SESSION['perfil'] = $usuarios[$usuario]['perfil'];

        // Redirecionar para o perfil do usuário
        header("Location: perfil.php");
        exit();
    } else {
        // Caso as credenciais estejam erradas, exibir mensagem de erro
        $erro = "Usuário ou senha incorretos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Clínica XYZ</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Clínica XYZ</h1>
            <nav>
                <a href="index.html">Home</a>
                <a href="cadastro.html">Cadastro</a>
            </nav>
        </div>
    </header>

    <section class="section">
        <div class="container">
            <h2>Login</h2>

            <?php if (isset($erro)): ?>
                <div class="error"><?= $erro ?></div>
            <?php endif; ?>

            <form method="POST" action="login.php">
                <input type="text" name="username" placeholder="Usuário" required>
                <input type="password" name="password" placeholder="Senha" required>
                <button type="submit">Entrar</button>
            </form>
            <p>Não tem uma conta? <a href="cadastro.html">Cadastre-se aqui</a></p>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Clínica XYZ. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>
