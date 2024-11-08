<?php
session_start();

if (!isset($_SESSION['user']) || $_SESSION['perfil'] !== 'cliente') {
    header("Location: ../index.html");
    exit();
}

echo "<h1>Agendamento de Consulta</h1>";
echo "<form method='POST' action='confirm_agendamento.php'>
        <label for='data'>Escolha a data:</label>
        <input type='date' name='data' required>
        <button type='submit'>Agendar</button>
      </form>";
?>