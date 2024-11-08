<?php
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

// Obtendo os dados do usuário
$usuario = $_SESSION['usuario'];
$perfil = $_SESSION['perfil'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - Clínica XYZ</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Clínica XYZ</h1>
            <nav>
                <a href="index.html">Home</a>
                <a href="logout.php">Sair</a>
            </nav>
        </div>
    </header>

    <section class="section">
        <div class="container">
            <h2>Bem-vindo, <?= htmlspecialchars($usuario) ?>!</h2>

            <p>Você está logado como: <strong><?= ucfirst($perfil) ?></strong></p>

            <!-- Exibir conteúdo baseado no perfil -->
            <?php if ($perfil == 'administrador'): ?>
                <h3>Área do Administrador</h3>
                <p>Bem-vindo à área administrativa. Aqui você pode gerenciar usuários, consultas e muito mais.</p>
            <?php elseif ($perfil == 'funcionario'): ?>
                <h3>Área do Funcionário</h3>
                <p>Você está na área do funcionário. Aqui você pode agendar consultas e acompanhar pacientes.</p>
            <?php elseif ($perfil == 'cliente'): ?>
                <h3>Área do Cliente</h3>
                <p>Você está na sua área de cliente. Aqui você pode visualizar suas consultas e fazer novos agendamentos.</p>
            <?php endif; ?>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Clínica XYZ. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>
