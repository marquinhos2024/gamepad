<?php
$email = 'usuario@exemplo.com';
$senha = 'senha123';
$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

// Agora insira no banco de dados
$stmt = $pdo->prepare("INSERT INTO usuarios (email, senha) VALUES (:email, :senha)");
$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha', $senhaHash);
$stmt->execute();
?>
