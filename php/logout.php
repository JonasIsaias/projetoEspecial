<?php
session_start();
session_destroy(); // Destruir todos os dados da sessão
header("Location: index.html"); // Redirecionar para a página inicial
exit();
?>
