<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    // Se o usuário não estiver logado, redireciona para a página de login
    header('Location: login.php');
    exit;
}

// Código do painel de controle
echo "Bem-vindo ao seu painel!";
?>
