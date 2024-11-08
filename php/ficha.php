<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: ../index.html");
    exit();
}

echo "<h1>Ficha de Automonitoramento</h1>";
echo "<form method='POST' action='ficha_enviada.php'>
        <label for='peso'>Peso:</label>
        <input type='text' name='peso' required><br>
        <label for='pressao'>Pressão Arterial:</label>
        <input type='text' name='pressao' required><br>
        <label for='observacoes'>Observações:</label>
        <textarea name='observacoes'></textarea><br>
        <button type='submit'>Enviar</button>
      </form>";
?>