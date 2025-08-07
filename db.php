<?php
$host = 'localhost'; // ou o endereço do seu servidor MySQL
$dbname = 'usuarios_db';
$username = 'root'; // o nome de usuário do MySQL
$password = ''; // a senha do MySQL (geralmente vazia em ambientes locais)

try {
    // Conexão com o banco de dados MySQL
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?>
