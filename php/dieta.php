<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: ../index.html");
    exit();
}

echo "<h1>Dieta Recebida</h1>";
echo "<p>Aqui está a sua dieta recomendada após a consulta:</p>";
echo "<p><strong>Café da manhã:</strong> 1 fatia de pão integral com 1 fatia de queijo branco.</p>";
echo "<p><strong>Almoço:</strong> Arroz integral, feijão, salada e peito de frango grelhado.</p>";
?>